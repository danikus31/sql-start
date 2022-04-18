
<?php

include '../../includes/connection.php';

if(isset($_POST['user_name'])){
    $user_name = trim($_POST['user_name']);
}else{
    $user_name = "";
}

if(isset($_POST['password'])){
    $user_password = $_POST['password'];
}else{
    $user_password = "";
}

$pos = strrpos($user_name, "`");
if (!$pos === false) { // note: three equal signs
    echo '<div color="red">no usign character like  `  in nickname</div>';
}

if($conn_user->query("select password from user_data where name = '$user_name'")){
    $db_password = $conn_user->query("select password from user_data where name = '$user_name'");
    $db_password = $db_password->fetch_assoc()['password'];
}else{
    echo 'error';
}



if(password_verify($user_password, $db_password)){
    header('Location: ../../exercises');
    setcookie("name", $user_name, 0,'/',$domain,false);
}else{
    echo '<div color="red">wrong name or password</div>';
}
?>

<form action="" method="post">
    <input AUTOFOCUS id="user_name" name="user_name" type="text" placeholder="name" value="<?=$user_name?>">
    <input id="password" name="password" type="password" placeholder="password" value="<?=$user_password?>">
    <button id="submit">submit</button>
</form>


