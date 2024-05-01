<?php
 session_start();
    include("../connection.php");
    $query="SELECT * FROM `adminlogin` WHERE `Admin_Name`='$_POST[AdminName]' and `Admin_password`='$_POST[AdminPassword]'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1)
    {
        $_SESSION['adminloginid']=$_POST['AdminName'];
        header("location:index.php");
    }
    else{
        echo "<script> alert('incorrect password');</script>"; 
        header("location:index.php");
           }


 ?>