<?php
    include("../connection.php");
    $cid=$_POST['cid'];
    $sname=$_POST['sname'];
    $query="INSERT INTO series(c_id,s_name) VALUES(".$cid.",'".$sname."')";
    $result=mysqli_query($con,$query);
    if($result)
    {
        header("location:series.php?msg=1");
    }
    else
    {
        
        header("location:series.php?msg=0");
    }
?>
