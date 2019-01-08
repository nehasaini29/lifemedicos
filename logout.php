<?php
include('connect.php');
session_start();
$id=$_SESSION['user_id'];
$query="delete from cart where user_id=$id";
$res=mysqli_query($con,$query);

$_SESSION['user_id']="";
session_destroy();
header("location:login.php");



?>