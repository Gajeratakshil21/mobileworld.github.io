<?php
include("../connection.php");
$id=$_GET['id'];
$query="DELETE FROM series WHERE s_id=$id";
$result=mysqli_query($con,$query);
if($result)
{
    header("location:series.php");
    echo '<script>alert("record deleted...")</script>';
}
else{
    header("location:series.php");
    echo '<script>alert("record  not deleted...")</script>';
}