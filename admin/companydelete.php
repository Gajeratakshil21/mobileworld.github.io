<?php
    include("../connection.php");
    $id=$_GET['id'];
    $query="DELETE FROM company WHERE c_id=$id";
    $result=mysqli_query($con,$query);
    if($result)
    {
        header("location:company.php");
         echo '<script>alert("record deleted...")</script>';
                
    }
    else
    {
        header("location:company.php");
        echo '<script>alert("record not deleted...")</script>';
         
     }
?>