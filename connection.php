<?php
$conn=mysqli_connect("localhost","root","","testing");
if(mysqli_connect_error()){
    echo "<script>alert('Can not connect to data base');</script>";
    exit();
}

?>