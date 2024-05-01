<?php
include("../connection.php");
$id=$_POST['r_id'];
$rsize=$_POST['rsize'];
$query="UPDATE ram SET r_size='".$rsize."' WHERE r_id=".$id;
$result = mysqli_query($con,$query);
        
if($result)
    header("location:ram.php");
else    
    echo mysqli_error($con);
    ?>
      