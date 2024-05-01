<?php
    $con=mysqli_connect("localhost","root","");
    if(!$con)
    {
        echo "not contected.....";
    }
    
    $db=mysqli_select_db($con,"mobileworld");
    if(!$db)
    {
        echo " database not selected";
    }
    
?>