<?php
    session_start();
    include("connection.php");
    $pay=$_POST["pay"];
    if($pay=="cod")
    {
        $query="insert into payment(type,userid)values('cod','".$_SESSION["uid"]."')";
    }
    else
    {
        $query="insert into payment(type,cardname,cardnum,expmonth,expyear,cvv,userid)values('card','".$_POST["cname"]."','".$_POST["cnum"]."','".$_POST["month"]."','".$_POST["year"]."','".$_POST["cvv"]."','".$_SESSION["uid"]."')";      
    }
    $result=mysqli_query($con,$query);
    $pid=mysqli_insert_id($con);
    if($result)
    {
     echo ("\nRecord inserted in payment");
    }
    else
    {
        echo "not inserted in pyament".mysqli_error($con);
    }
     $q1="select *from addcart c,product p where c.p_id=p.p_id and c.userid=".$_SESSION["uid"]." and c.status=1";
    $res=mysqli_query($con,$q1);
    $cid="0";
    $total=0;
    $gtotal=0;
    while($ans=mysqli_fetch_array($res))
    {
        if($cid=="0")
        {
            $cid=$ans["cart_id"];
        }
        else
        {
            $cid=$cid.",".$ans["cart_id"];
        }
        $total=$total+($ans["price"]*$ans["qty"]);
        $tmp=$ans["stock"]-$ans["qty"];
        $q="update product set stock=".$tmp." where p_id=".$ans["p_id"];
        $r=mysqli_query($con,$q);
        if($r)
        {
            echo "\nrecord updated successfully in stock";
        }
        else
        {
            echo "record not updated in stock".mysqli_error($con);
        }
    }
    $gtotal=$total+($total*5/100);

    $que="insert into bill(p_id,sp_id,userid,cid,total,tax,gtotal,odate,status) values(".$pid.",".$_SESSION['sh_id'].",".$_SESSION['uid'].",'".$cid."',".$total.",0.5,".$gtotal.",'".date("Y/m/d")."','order')";
    $ans=mysqli_query($con,$que);
    if($ans)
    {

        echo "\nrecord insered in bill";    
        // header("location:bill.php");
    }
    else
    {
        echo "not inserted in bill".mysqli_error($con);
    }
   $que="UPDATE addcart SET status=0 WHERE userid=".$_SESSION['uid'];  
    $resu=mysqli_query($con,$que);
   header("location:bill.php");
   
?>
