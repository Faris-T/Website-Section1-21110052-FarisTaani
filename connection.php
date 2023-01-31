<?php
$host = 'localhost';
$dbname = 'krustykrabs';
$user = 'root';
$pass = '';

$conn = mysqli_connect($host, $user, $pass, $dbname);

if(!$conn){
    echo "Connection Failed";
}
