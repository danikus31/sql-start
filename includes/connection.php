<?php

$host = "localhost";
$username  = "root";
$passwd = "";
$dbname = "sql_learn";

//Creating a connection
$conn = mysqli_connect($host, $username, $passwd, $dbname);

if(!$conn)print("Connection Failed ");