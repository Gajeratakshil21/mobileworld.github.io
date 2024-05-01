<?php 
include("../connection.php");
$id=$_GET['id'];
$query="DELETE FROM ram WHERE r_id=$id";
$result=mysqli_query($con,$query);
if($result)
{
    header("location:ram.php");
    echo '<script> alert("recorded deleted..")</script>';
}
else{
    
    header("location:ram.php");
    echo '<script> alert("recorded not deleted..")</script>';
}