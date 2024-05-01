<?php 
include("connection.php");
$id=$_GET['id'];
$query="DELETE FROM addcart WHERE cart_id=$id";
$result=mysqli_query($con,$query);
if($result)
{
    header("location:cart.php");
            
}
else
{
    echo mysqli_error();
    //header("location:company.php");
     
}
?>