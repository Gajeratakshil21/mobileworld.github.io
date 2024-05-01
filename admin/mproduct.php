<?php
include("../connection.php");
$pnm=$_POST['pname'];
$cid=$_POST['cid'];
$query="INSERT INTO `product` ( `pname`, `c_id`) VALUES ( '".$pnm."','".$cid."')";
$result=mysqli_query($con,$query);
if($result)
    echo "success....";
else
    echo mysqli_error($con);
    ?>