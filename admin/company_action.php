<?php
    include("../connection.php");
    $cname=$_POST['cname'];
     $cimage=$_FILES['cimg']['name'];
    $filename=$_FILES['cimg']['tmp_name'];

	move_uploaded_file($filename,"image/".$cimage);
    $query="INSERT INTO company(c_name,c_logo) VALUES('".$cname."','".$cimage."')";
   // echo $query;
    $result=mysqli_query($con,$query);
    if($result)
    {
        header("location:company.php?msg=1");
    }
    else
    {
        header("location:company.php?msg=0");
    }
?>
