<?php
$connect=mysqli_connect("localhost","root","","parinata");
if($connect){
    // echo "Connection Established\n";
}else {
    echo "Error Connecting ".mysqli_connect_error();
}
