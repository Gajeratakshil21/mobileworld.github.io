<?php
    include("../connection.php");
    $id=$_POST['c_id'];
    $cname = $_POST['cname'];
    $img = $_POST['cimage'];
    $cimg=$_FILES['cimg']['name'];
           
   
    if($cimg=="")
    {
        $query="UPDATE company SET c_name='".$cname."' WHERE c_id=".$id;
      }
    else{
    
            $filename=$_FILES['cimg']['tmp_name'];
            move_uploaded_file($filename,"image/".$cimg);
        
            $query="UPDATE company SET c_name='".$cname."',c_logo='".$cimg."' WHERE c_id=".$id;
       
     }
        $result = mysqli_query($con,$query);
        if($result)
            header("Location:company.php");
        else
            echo mysqli_error($con);
?>

