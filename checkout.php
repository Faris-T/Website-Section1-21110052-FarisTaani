<?php
session_start();
include "connection.php";

if(isset($_SESSION['id'])){

    $cusid = $_SESSION['id'];
    $item1 = $_POST['item1'];
    $item2 = $_POST['item2'];
    $item3 = $_POST['item3'];
    $item4 = $_POST['item4'];
    $finalprice = $_POST['finalprice'];        
    
    $sqlcheckout = "INSERT INTO orderinfo(customer_id,item1quantity,item2quantity,item3quantity,item4quantity,finalprice) VALUES('$cusid','$item1','$item2','$item3','$item4','$finalprice')";
    mysqli_query($conn,$sqlcheckout);
    echo "I love ben";
    header("Location: home.php?success=Successfully Added to Cart");
}

else{
    echo "what are you doing here ben";
}
?>