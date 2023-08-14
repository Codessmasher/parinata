<?php
// checking already login or not if login redirected to dashboard page
session_start();
if(isset($_SESSION['name'])){
    header("location: dashboard.php");
}

require("includes/connection.php");  

if(isset($_POST['signin'])){ 
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check = "SELECT `name` FROM `user` WHERE `email`='$email' AND `password`='$password'";
    $result = mysqli_query($connect, $check);

    if($result && mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result); 
        $_SESSION['name']=$row['name'];
        header("location: dashboard.php");
    } else {
        echo "Please Enter Correct Details";
    }
}
?>
