<?php
    include("../connection.php");
    $id=$_GET['id'];
    $query="DELETE FROM product WHERE p_id=$id";
    $result=mysqli_query($con,$query);
    if($result)
    {
        header("location:product.php");
         echo '<script>alert("record deleted...")</script>';
                
    }
    else
    {
        header("location:product.php");
        echo '<script>alert("record not deleted...")</script>';
         
     }
?>