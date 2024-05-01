<?php
include("connection.php");
$fname=$_POST['fname'];
$email=$_POST['email'];
$msg=$_POST['msg'];
$query="INSERT INTO feedback(f_name,f_email,f_msg) VALUES('".$fname."','".$email."','".$msg."')";
$result=mysqli_query($con,$query);
    
if($result)
    header("location:feedback.php");
else    
    echo mysqli_error($con);
    ?>