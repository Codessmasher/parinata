<?php
// checking already login or not if login redirected to dashboard page

session_start();
if(isset($_SESSION['name'])){
    header("location: dashboard.php");
}

require("includes/connection.php");

if(isset($_POST['signup'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];

    $insert="INSERT INTO `user`(`Name`, `Email`, `Password`, `Address`, `Phone`) VALUES ('$name','$email','$password','$address',$phone)";
    $isInserted=mysqli_query($connect,$insert);

    if($insert){
        header("location: signin.php");
    }else{
        echo "Error Inserting";
    }
}