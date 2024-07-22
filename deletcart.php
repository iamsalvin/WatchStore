<?php
include 'dbconnect.php';
$id=$_GET['id'];
$n=mysqli_query($con,"delete  from cart where id='$id'");
echo "<script> window.location.href='cart.php';</script>";
?>