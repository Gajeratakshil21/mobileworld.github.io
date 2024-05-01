<?php
 include("../connection.php");
 $id=$_GET['id'];
 $query="DELETE FROM registerform WHERE userid=$id";
 $result=mysqli_query($con,$query);
 if($result)
 {
    header("location:user.php");
    echo '<script>alert("record deleted...")</script>';
 
 }
 else{
    header("location:user.php");
    echo '<script>alert("record not deleted...")</script>';
 
 }