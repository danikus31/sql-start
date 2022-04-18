<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap" rel="stylesheet">
    <title>Document</title>



<style>
    *{
        font-family: 'Inter', sans-serif;
    }
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

include "../includes/connection.php";

?>
<div><?=$_COOKIE['name']?></div>
    <form action="" method="post">
        <textarea autofocus name="text" id="text" cols="30" rows="10" style="padding: 5px" ><?=$_POST['text']?></textarea>
        <br>
        <button id="submit">submit</button>
    </form>
<?php
$sql = $_POST['text'];
if($result = $conn_exercise->query($sql)) {
    $result = $conn_exercise->query($sql);
    $conn_exercise->close();
    $result = $result->fetch_all(MYSQLI_ASSOC);


    $result = object_to_table_array($result);


    echo '<table>';
    foreach ($result as $table1) {
        echo '<tr>';
        foreach ($table1 as $table2) {
            echo '<th>' . $table2 . '</th>';
        }
        echo '</tr>';
    }
    echo '</table></tr>';
} else{

    echo $conn_exercise->error;
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