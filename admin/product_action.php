<?php
    include_once("../connection.php");
    $m_name=$_POST['mname'];
    $c_id=$_POST['cid'];
      $s_id=$_POST['sid'];
    $os=$_POST['os'];
    $processor=$_POST['processor'];
    $r_cemera=$_POST['rcemera'];
    $f_cemera=$_POST['fcemera'];
    $card_sloat=$_POST['sloat'];
   $internal_storage=$_POST['storage'];
    $display=$_POST['display'];
  $battery=$_POST['battery'];
   $rid=$_POST['rid'];
   $ram_type=$_POST['rtype'];
 $resolution=$_POST['res'];
   $aspect_ratio=$_POST['aspect'];
   $height=$_POST['hei'];
   $weight=$_POST['wei'];
   $color=$_POST['color'];
   $price=$_POST['price'];
   $release_date=$_POST['date'];
   $mobile_image=$_FILES['image']['name'];
    $filename=$_FILES['image']['tmp_name'];
    move_uploaded_file($filename,"image/".$mobile_image);

    
    
     $query="INSERT INTO product(m_name,c_id,s_id,os,processor,rear_cemera,front_cemera,sim_type,internal_storage,display,battery,r_id,stock,resolution,aspact_ratio,height,weight,color,price,release_date,mobile_image)VALUES('".$m_name."','".$c_id."','".$s_id."','".$os."','".$processor."','".$r_cemera."','".$f_cemera."','".$card_sloat."','". $internal_storage."','".$display."','".$battery."','".$rid."','".$ram_type."','".$resolution."','".$aspect_ratio."','".$height."','".$weight."','".$color."','".$price."','".$release_date."','".$mobile_image."')";
     $result=mysqli_query($con,$query);
       if($result)
       {
           header("location:product.php?msg=1");
       }
       else
       {
         echo mysqli_error($con);
           //header("location:product.php?msg=0");
       }
?>

                                                                        

       
    
     