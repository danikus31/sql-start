<?php

$host = "localhost";
$username  = "root";
$passwd = "";
$dbname = "sql_learn";

//Creating a connection
$conn = mysqli_connect($host, $username, $passwd, $dbname);

if(!$conn)die("Не удалось выбрать базу $dbname: " . mysqli_connect_error());

function object_to_table_array($arr){
    $result = array();
    foreach ($arr[0] as $key=>$name)$result[0][]=$key;
    $i=1;
    foreach ($arr as $stage1){
        foreach ($stage1 as $stage2){
            $result[$i][]=$stage2;
        }
        $i++;
    };
    return $result;
}

