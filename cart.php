<?php
//session_start();

?>
<html>
    <head>
        <title>shopping cart</title>
        <style>
            body{
                margin: 0;
                padding: 0;
 }
 h1{
    font-family: Arial, Helvetica, sans-serif;
   
 }
   table {
    border-collapse: collapse;
    width: 70%;
}

th, {
  text-align: left;
  padding: 8px;
  
}

tr:nth-child(even) {background-color: #f2f2f2;}

        </style>
</head>
<body>
<?php
include("header.php");
//include("menu.php");

include("connection.php");
    if(!isset($_SESSION['user'])){
    header("location:login.php"); 
    } 
    if(isset($_GET['q']))
    {
        $q1="update addcart set qty=".$_GET['q']." where cart_id=".$_GET['cid'];    
        mysqli_query($con,$q1);
    }
    
    $query="select *from addcart where userid='".$_SESSION['uid']."' and status=1";
    $result=mysqli_query($con,$query);
    $gtotal=0;
    $bill=0;
    if(mysqli_num_rows($result))
    {
        echo "<h1 align='center'>SHOPPING CART</h1><br>";
        echo '<p align="center">**********************************************</p><br><br>';
        echo '<table align="center" border=0>';
        echo '<tr>';
        echo '<th>Ser. No</th>';
        echo '<th>Product</th>';
        echo '<th>Description</th>';
        echo '<th>Price</th>';
        echo '<th>Quantity</th>';
        echo '<th>Total</th><th></th>';
        echo '<th>Delete</th>';
     
        $i=1;
        
        while($row=mysqli_fetch_array($result))
        {
            echo '<tr align="center">';
            echo '<td>'.$i.'</td>';
            $_SESSION['item']=$i;
            $i = $i + 1;
           
            $qry="select *from product where p_id=".$row['p_id'];
            $res=mysqli_query($con,$qry);
            $r=mysqli_fetch_array($res);
            echo '<td><img src="admin/image/'.$r[21].'" width="90" height="90">';
          

        //    echo " </br><button><a href='mobile_detail.php?id=$row[0]'>Details</a></button>";  
   
            echo '<td><a href="mobile_detail.php?id='.$r[0].'">'.$r['m_name'].'('.$r['color'].')</a></td>';
            echo '<td>'.$r['price'].'</td>';
           
            $cid=$row['cart_id'];
           
            echo '<td><input type="number" id="qty'.$cid.'" name="qty" value="'.$row['qty'].'" min=1 max="'.$r[13].'">';
          echo '<input type="hidden" id="cid" value="'.$row['cart_id'].'">'; ?>
           
       <input type="button" id="<?php echo $row['cart_id']; ?>" onClick="updateqty(this.id);" value="Update" style="background-color:orangered;width:40%;height:30px"></button></td>
       
<?php    
            echo '<td>'.$r['price']*$row['qty'].'</td>';
            $gtotal=$gtotal+($r['price']*$row['qty']);
            $_SESSION['gtotal']=$gtotal;
            echo '<td></td><td><a href="cartdelete.php?id='.$row[0].'" >Delete</a></td>';
        

     
        }
        echo '<tr></tr><tr></tr><tr></tr>';
       
        $bill=$gtotal+(($gtotal*0.5)/100);
        $_SESSION['bill']=$bill;
        echo '<tr><td colspan="5" align="right">Grand Total</td><td colspan="3" align="right">'.$gtotal.'</td></tr>';
        echo '<tr><td colspan="5" align="right">Tax </td><td colspan="3" align="right">0.5%</td></tr>';
        echo '<tr><td colspan="5" align="right">Bill Amount</td><td colspan="3" align="right">'.$bill.'</td></tr>';
    //    echo '</table>';
    
        echo "<form name='frm' method='POST' action='shipping.php'>";
        echo '<tr><td></td><td></td><td></td><td></td><td><input type="submit" value="checkout" style="background-color:#04AA6D ;width:190px;height:40px"></td>';
        echo '<br><br>';
        echo '</table>';
 ?>
     
<?php
    }
    
    else{
        echo '<h1 align="center" >No item avalible</h1>';
    }
    ?>
 <?php
 echo '<br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br>
';
 include("footer.php");
 ?>        

<script>
    function updateqty(cid)
    {
        var qty=document.getElementById("qty"+cid).value;
        window.location.href='cart.php?q='+qty+'&cid='+cid;
    }
</script>
</body>
</html>

