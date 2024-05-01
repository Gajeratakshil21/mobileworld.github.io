<?php
include("header.php");
include("menu.php");
include("../connection.php");
?>

<html>
    <head>
        <style>
           
body{
    font-family:serif;
    margin:0;
    font-size:18px;
}
.foot{
	height:150px;
    display:flex;
    
  
}
.foot-left{
    margin-right:100px;
}
.foot-left h2{
    font-size:25px;
    padding:0px 0px;
}
.foot-left p{
    padding:0px 10px;;
    
}
.foot-right{
    margin-right:200px;
}
.foot-right h2{
    font-size:25px;
    padding:0px 0px;
    
}
.foot-right p{
    padding:10px 50px;
    
}
.foot-last{
    margin-right:100px;
}
.foot-last h2{
    font-size:25px;
    padding:0px 0px;
}
.foot-last p{
    padding:0px 50px;
    
}
table {
    border-collapse: collapse;
    width: 100%;
}

td {
  padding: 0px 0px;
  
}
tr:nth-child(even) {
  background-color: #f2f2f2;
}

            </style>
        </head>
<body>
    <br>
   <div class="foot">
       <div class="foot-left">
           <h2>Shipping Details</h2>
           <h4>............................................................</h4>
    
           <?php
                $qq="select *from bill where b_id=".$_GET['id'];
                $qr=mysqli_query($con,$qq);
                $result=mysqli_fetch_array($qr);
              $qer="select *from shipping where sp_id=".$result[2];
              $re=mysqli_query($con,$qer);
              $r1=mysqli_fetch_array($re);
           
           ?>
        
<p><?php echo $r1['name'];?></h4>
<p>shipping Address :<?php echo $r1['s_add'];echo  '   ,   '.$r1['city'];echo '  -   '.$r1['pincode']?></p>
<p>Billing Address :<?php echo $r1['b_add'];echo  '   ,   '.$r1['city'];echo '  -   '.$r1['pincode']?></p>
<p>Pincode <?php echo '  -   '.$r1['pincode']?></p>
<p>Mobile Number :<?php echo $r1['contact'];?></p>
           
</div>
<div class="foot-right">
     <h2>Payment Method</h2>
     <h4>............................................................</h4>
    
     <?php
      $qer2="select *from payment where p_id=".$result[1];
      $rul1=mysqli_query($con,$qer2);
      $r3=mysqli_fetch_array($rul1);
   
  ?>
  
     <p>Payment Type :  <?php echo $r3['type']?></p>
    </div>  
<div class="foot-last">
    <h2>Order Summary</h2>
    <h4>............................................................</h4>
      
    <?php
              
           ?>
    <p> Price :<?php echo $result['total'];?></p>
    <p>  Tax :<?php echo $result['tax'];?></p>
    <p> Final Price :<?php echo $result['gtotal'];?></p>
    <p> Delivery Charge :   Free</p>
</div>

</div><br><br><Br><br><br><br><Br><br><br><br><Br><br>
<h5>***********************************************************************************************************************************************************************************************************</h5>
<?php
$query="select *from addcart where cart_id IN(".$result[4].")";
    $result1=mysqli_query($con,$query);
    $gtotal=0;
    $bill=0;
    if(mysqli_num_rows($result1))
    {
      echo '<br>';
       // echo "<h1><center>SHOPPING CART</center></h1>";
        echo '<table align="center" border=0>';
        echo '<tr>';
        echo '<th>Order. No</th>';
        echo '<th>Product</th>';
        echo '<th>Description</th>';
        echo '<th>Price</th>';
        echo '<th>Quantity</th>';
        echo '<th>Total</th><th></th>';
       
       $i=1;
       echo '<tr>';
       
        while($row=mysqli_fetch_array($result1))
        {
         echo '<tr>';
            echo '<td align="center">'.$i.'</td>';
            $_SESSION['item']=$i;
            $i = $i + 1;
           
            $qry="select *from product where p_id=".$row['p_id'];
            $res=mysqli_query($con,$qry);
            $r=mysqli_fetch_array($res);
            
            echo '<td align="center"><a href="mobile_detail.php?id='.$r[0].'"><img src="image/'.$r[21].'" width="90" height="90"></a>';
          
            echo '<td align="center">'.$r['m_name'].'('.$r['color'].') <br>* Storage  '.$r[9].'<br>* Ram  '.$r[12]. 'Gb <br>* Display  '.$r[10];


            echo '<td align="center">'.$r['price'].'</td>';
           
       //     $cid=$row['cart_id'];
           
        echo '<td align="center"> '.$row['qty'].'</td>';
          echo '<input type="hidden" id="cid" value="'.$row['cart_id'].'">';?>
          <?php
             
          echo '<td>'.$r['price']*$row['qty'].'</td>';
          echo '</tr>'; 
          
               }
    }

    echo '</table><br><br>';
           ?>
<?php
include("footer.php");
?>
</body>
   </html>
