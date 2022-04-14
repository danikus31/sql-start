<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>



<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>



<?php

include "includes/connection.php";

?>

    <form action="" method="post">
        <textarea autofocus name="text" id="text" cols="30" rows="10" ><?=$_POST['text']?></textarea>
        <br>
        <button id="submit">submit</button>
    </form>

<?php

if(
    isset($_POST['text'])
){

$sql = $_POST['text'];
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo '<table>';
    while($row = $result->fetch_assoc()) {
        echo'<tr>';
        foreach ($row as $key => $value){
            echo '<th>'.$key.'='.$value.'</th>';
        }
        echo'<tr>';
    }
    echo '<table>';

} else {
    echo "0 results";
}
$conn->close();
}
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

<script>
    $('#text').keydown(function (e) {

        if (e.ctrlKey && e.keyCode == 13) {
            $('#submit').click();
        }
    });
</script>

</body>
</html>