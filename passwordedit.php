<?php
include("connection.php");
session_start();
    
/*$cpwd = $_POST['cpwd'];
$npwd=$_POST['npwd'];
$copwd=$_POST['copwd'];*/

$query="SELECT *FROM `registerform` WHERE  userid=".$_SESSION['uid'];
$result=mysqli_query($con,$query);
$ans=mysqli_fetch_array($result);
if($_POST['cpwd']==$ans['PASSWORD'])
{
    $query="UPDATE registerform set PASSWORD='".$_POST['PASSWORD']."' WHERE userid='" . $_SESSION["uid"] . "'";
    $result=mysqli_query($con,$query);
    header("location:profile.php");
}


 else{
     echo mysqli_error($con);
 }

?>