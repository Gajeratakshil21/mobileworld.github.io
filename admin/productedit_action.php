<?php
    include("../connection.php");
    $id=$_POST['p_id'];
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
   $img = $_POST['pimage'];
    $mobile_image=$_FILES['image']['name'];     
   if($mobile_image="")
   {
    $query="UPDATE product SET m_name='".$mname."',c_id='".$c_id."',s_id='".$s_id."',os='".$os."',processor='".$processor."',rear_cemera='".$r_cemera."',front_cemera='".$f_cemera."',sim_type='".$card_sloat."',internal_storage='".$internal_storage."',display='".$display."',battery='".$battery."',r_id='".$rid."',stock='".$ram_type."',resolution='".$resolution."',aspact_ratio='".$aspect_ratio."',height='".$height."',weight='".$weight."',color='".$color."', price='".$price."',release_date='".$release_date."',mobile_image='".$mobile_image."',WHERE p_id=".$id;
    $result = mysqli_query($con,$query);
        if($result)
            header("Location:product.php");
        else
            echo mysqli_error($con);
   }
?>

