<?php
session_start();
include "connection.php";

if (isset($_POST['email']) && isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }
}

$email = validate($_POST['email']);
$password = validate($_POST['password']);

if(empty($email)){
    header("Location: login.php?error=Email is Required");
    exit();
}

else if(empty($password)){
    header("Location: login.php?error=Password is Required");
}

else{

    $sql = "SELECT * FROM customer WHERE email='$email' AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if($row['email'] === $email && $row['password'] === $password){
            echo "Logged in!";

            $_SESSION['id'] = $row['id'];
            $_SESSION['firstname'] = $row['firstname'];
            $_SESSION['lastname'] = $row['lastname'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['phonenumber'] = $row['phonenumber'];
            $_SESSION['dateofbirth'] = $row['dateofbirth'];
            $_SESSION['gender'] = $row['gender'];
            $_SESSION['password'] = $row['password'];
            header("Location: home.php");
            exit();
        }else{
            header("Location: login.php?error=Incorrect Email or Password");
            exit();
        }
    }
    else{
        header("Location: login.php?error=Incorrect Email or Password");
        exit();
    }

}