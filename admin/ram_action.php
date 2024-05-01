<?php
    include("../connection.php");
    $rsize=$_POST['rsize'];
  
	$query="INSERT INTO ram(r_size) VALUES('".$rsize."')";
   // echo $query;
    $result=mysqli_query($con,$query);
    if($result)
    {
        header("location:ram.php?msg=1");
    }
    else
    {
        header("location:ram.php?msg=0");
    }
?>
