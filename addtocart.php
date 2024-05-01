<?php
session_start();
if(!isset($_SESSION['uid']))
{
  $_SESSION['pid']=$_POST['pid'];
  header("location:login.php");
}
include("connection.php");
$pid=$_POST["pid"];
$qty=$_POST["qty"];
$uid=$_SESSION["uid"];
$query="INSERT INTO addcart(p_id,userid,qty,status) VALUES(".$pid.",".$uid.",".$qty.",1)";
$result=mysqli_query($con,$query);
if($result)
{
    header("location:cart.php");
}
else
{
    echo mysqli_error($con);
}
?>