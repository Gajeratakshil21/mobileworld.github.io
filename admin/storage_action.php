<?php
    include("../connection.php");
    $sname=$_POST['sname'];
  
	$query="INSERT INTO storage(s_name) VALUES('".$sname."')";
   // echo $query;
    $result=mysqli_query($con,$query);
    if($result)
    {
        header("location:storage.php?msg=1");
    }
    else
    {
        header("location:storage.php?msg=0");
    }
?>
