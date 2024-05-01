<?php
include("connection.php");
session_start();
$uid=$_SESSION['uid'];
$fname=$_POST["FIRSTNAME"];
$lname=$_POST["LASTNAME"];
$email=$_POST["EMAIL"];

       
$select="SELECT *FROM registerform WHERE EMAIL='".$email."'";
$result=mysqli_query($con,$select);
if(mysqli_num_rows($result)==0)
{
  $query="UPDATE registerform SET FIRSTNAME='".$fname."',LASTNAME='".$lname."',EMAIL='".$email."'WHERE userid=".$uid;
  $result=mysqli_query($con,$query);
  if($result)
  header("Location:profile.php?msg=1");      
  else
    header("Location:profile.php?msg=0");  
   }
else
{
    echo mysqli_error();
 //   header("Location:profile.php?msg=2");
}

?>
      