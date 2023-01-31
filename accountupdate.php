<?php
session_start();
include "connection.php";

$email = $_POST['email'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];

$_SESSION['email'] = $email;
$_SESSION['password'] = $password;
$_SESSION['firstname'] = $firstname;
$_SESSION['lastname'] = $lastname;
$_SESSION['gender'] = $gender;
$_SESSION['dateofbirth'] = $dob;
$_SESSION['phonenumber'] = $phone;

$sqlinsert = "UPDATE customer SET firstname = '$firstname', lastname = '$lastname', phonenumber = '$phone', password = '$password', dateofbirth = '$dob', gender = '$gender' WHERE email = '$email'";
mysqli_query($conn, $sqlinsert);

header("Location: home.php");

?>