<?php
include("header.php");

?>
<html>
    <head>
        <title>Bill</title>
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
    width: 50%;
}

td{
  height:100px;
  }
/*tr:nth-child(even) {
  background-color: #f2f2f2;
}*/


        </style>
</head>
<body>
<h1 align="center"> Thank you !</h1><br>
     
      <h2 align="center">Your order has been placed successfully </h2><br>
      <h4 align="center" style="color:blue">Your Order Details..... </h4><br>
      <p align="center"><b>.................................................................................................................................................................................................................................</b></p>
       <?php
//include("menu.php");

include("connection.php");
    
    $query="select *from bill  where userid='".$_SESSION['uid']."' order by odate desc";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result))
    {
      echo '<center>';
      echo '<table align="center">';
      
        $i=1;
       
        while($row=mysqli_fetch_array($result))
        {
            echo '<tr style="background-color:#ccc">';
            echo '<td ><h4> Order Placed <br>'.$row["odate"].'</h4></td>';
            echo '<td><h4> Total <br>'.$row["gtotal"].'</h4></td>';
            $query1="select *from shipping where sp_id=(select sp_id from bill where b_id=".$row[0].")";
            $result1=mysqli_query($con,$query1);
            $row1=mysqli_fetch_array($result1);
            echo '<td><h4> Ship To <br>'.$row1['name'].'</h4></td>';
           
            
            echo '<td><a href="Bill1.php?b_id='.$row[0].'">Details</a></td>';
            echo '</tr><tr>';
           echo '</tr><tr style="background-color:whitesmoke" >';
          
  $q1="select *from addcart c,product p where c.p_id=p.p_id and c.userid=".$_SESSION["uid"]." and c.cart_id IN(".$row['cid'].")";
  $res=mysqli_query($con,$q1);
while($ans=mysqli_fetch_array($res)){
  echo '<td><img src="admin/image/'.$ans['mobile_image'].'" width="90" height="90">';
  
  echo '<td>'.$ans['m_name'].' ('.$ans['internal_storage'].'    storage,'.$ans['color'].')'.'</td>';
  
          
  echo '</tr></b><tr style="background-color:whitesmoke">';
      }
    }
    echo '</table>';
  }

echo '<br><br><br>'; 
  include("footer.php");
  ?>    
      
        
            
 
</body>
</html>

