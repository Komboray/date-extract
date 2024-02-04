<?php

$localhost = "127.0.0.1";
$username = "root";
$pass = "";
$db_name = "jaribu";
$conn = "";

$conn = mysqli_connect($localhost, $username, $pass , $db_name);

if($conn){
    // echo "connected";
}