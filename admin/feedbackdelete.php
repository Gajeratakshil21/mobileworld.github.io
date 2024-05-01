<?php 
include("../connection.php");
$id=$_GET['id'];
$query="DELETE FROM feedback WHERE f_id=$id";
$result=mysqli_query($con,$query);
if($result)
    header("location:feedbackview.php");
else
    echo mysqli_error($con);
    ?>