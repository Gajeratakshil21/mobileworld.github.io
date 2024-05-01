<?php
include("connection.php");
session_start();

$email=$_POST["email"];
$pass=$_POST["password"];
$select="SELECT * FROM registerform WHERE EMAIL='$email' and PASSWORD='$pass'";
$result=mysqli_query($con,$select);
if($row=mysqli_fetch_array($result))
{
    $_SESSION['uid']=$row[0];
    $_SESSION['user']=$row[1];
    echo "value of pid".$_SESSION['pid'];
    //exit();
    if($_SESSION['pid'])
    {
        header("location:mobile_detail.php?id=".$_SESSION['pid']);
        unset($_SESSION['pid']);
    }
    else
    {
        header("location:index.php?msg=1");
    }
   
}
else
{
    header("location:login.php?msg=0");
      
}

?>


  