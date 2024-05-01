<?php
include("../connection.php");
$id=$_POST['s_id'];
$sname=$_POST['sname'];
$query="UPDATE `series` SET  s_name='".$sname."' WHERE s_id=".$id;
$result=mysqli_query($con,$query);
if($result)
{
        header("location:series.php");
}       
else{
    echo mysqli_error($con);
}