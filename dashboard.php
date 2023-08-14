<title>Dashboard</title>
<link rel="stylesheet" href="styles/bootstrap.css">

<?php
// checking already login or not if not login redirected to sigin page
session_start();
if (!isset($_SESSION['name'])) {
    header("location:signin.php");
}
// retrieving session stored variable
$name = $_SESSION['name'];
?>
<!-- simple internal style  -->
<style>
    body {
        background: #000;
        color: greenyellow;
    } 
    h1 {
        font-size: 3rem;
    }
</style>

<!-- body welcome and logout button-->
<h1 align='center'>Hello <span style='color:red;text-transform: uppercase;'><?php echo $name ; ?></span></h1>
<div class="d-flex justify-content-center">
    <a href="logout.php" class="btn btn-warning" >Logout</a>
</div>