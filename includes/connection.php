<?php

$host = "localhost";
$username  = "root";
$passwd = "";
$dbname1 = "sql_learn_tables";
$dbname2 = "sql_learn_accounts";

$domain = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false;

//Creating a connection
$conn_exercise = mysqli_connect($host, $username, $passwd, $dbname1);
if(!$conn_exercise)die("Не удалось выбрать базу $dbname1: " . mysqli_connect_error());

$conn_user = mysqli_connect($host, $username, $passwd, $dbname2);
if(!$conn_user)die("Не удалось выбрать базу $dbname2: " . mysqli_connect_error());


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

