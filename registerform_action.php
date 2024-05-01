<?php 
    include("connection.php");
    $fname=$_POST["FIRSTNAME"];
    $lname=$_POST["LASTNAME"];
    $email=$_POST["EMAIL"];
    $password=$_POST["PASSWORD"];
    $select="SELECT *FROM registerform WHERE EMAIL='".$email."'";
    $result=mysqli_query($con,$select);
    if(mysqli_num_rows($result)==0)
    {
      $query="INSERT INTO registerform(FIRSTNAME,LASTNAME,EMAIL,PASSWORD) VALUES('".$fname."','".$lname."','".$email."','".$password."')";
      $result=mysqli_query($con,$query);
      if($result)
      header("Location:registerform.php?msg=1");      
      else
        header("Location:registerform.php?msg=0");  
       }
    else
    {
        header("Location:registerform.php?msg=2");
    }
?>
   