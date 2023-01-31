<?php
session_start();
include "connection.php";

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phonenumber = $_POST['phone'];
$address = $_POST['address'];
$inquiry = $_POST['inquire'];
$text = $_POST['infoproblem'];

$sqlinsert = "INSERT INTO contactus(firstname,lastname,email,phonenumber,address,inquiry,problem) VALUES('$firstname','$lastname','$email','$phonenumber','$address','$inquiry','$text')";
mysqli_query($conn, $sqlinsert);
header("Location: home.php");
?>