<?php
include("../connection.php");
$id=$_GET['id'];
$que="UPDATE bill SET status='cancle' WHERE b_id=".$id;  
$resu=mysqli_query($con,$que);
if($resu)
{
    header("location:order.php");

}
else{
    echo mysqli_error($con);
}
?>
    