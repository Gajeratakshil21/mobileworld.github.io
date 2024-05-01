<?php
    include("connection.php");
    session_start();
    $name=$_POST['fullname'];
    $s_add=$_POST['sadd'];
    $b_add=$_POST['badd'];
    $city=$_POST['city'];
    $contact=$_POST['contact'];
  
    $pincode=$_POST['pincode'];
    $query="Insert into shipping(userid,name,s_add,b_add,contact,city,pincode) values(".$_SESSION['uid'].",'".$name."','".$s_add."','".$b_add."','".$contact."','".$city."','".$pincode."')";
    
    $result=mysqli_query($con,$query);
    $_SESSION["sh_id"]=mysqli_insert_id($con);
    if($result)
    {
        header("Location:payment.php");
    }
    else
    {
        echo mysqli_error($con);
    }
    

?>