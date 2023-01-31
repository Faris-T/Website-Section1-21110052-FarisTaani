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


$sqlcheck = "SELECT * FROM customer WHERE email='$email'";
$checkresult = mysqli_query($conn, $sqlcheck);

if(mysqli_num_rows($checkresult) === 0){
$sqlinsert = "INSERT INTO customer(firstname,lastname,email,phonenumber,password,dateofbirth,gender) VALUES('$firstname','$lastname','$email','$phone','$password','$dob','$gender')";
mysqli_query($conn, $sqlinsert);
    header("Location: home.php");
}
else{
    header("Location: signup.php?error=Email already in use");
}
?>