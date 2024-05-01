<style>
         body{
                margin: 0;
                padding: 0;
 }
   table {
    border-collapse: collapse;
    width: 70%;
}

tr {
  padding: 0px;
  margin:20px;
  
}
td{
  height:100px;
  weight:600px;
  
}
tr:nth-child(even) {
  background-color: #f2f2f2;
}


    </style>
<?php
include("header.php");
include("menu.php");
include("../connection.php");
session_start();

$query="SELECT *FROM bill b ,shipping s where b.userid=s.userid ";
$result=mysqli_query($con,$query);

    if(mysqli_num_rows($result))
    {
      echo '<h1 align="center">Order Detail</h1>';
      echo '<p align="center">********************************************************</p>';
        echo '<tr>';
        echo '<table align="center" border=8>';
        $i=1;
       
   
   while($row=mysqli_fetch_array($result))
       {
            //echo '<br>';
           echo '<td>' .$row['name'].'</td>';
           $q1="select *from addcart c,product p where c.p_id=p.p_id and c.cart_id IN(".$row['cid'].")";
  $res=mysqli_query($con,$q1);
while($ans=mysqli_fetch_array($res)){
  echo '<td><img src="../admin/image/'.$ans['mobile_image'].'" width="90" height="90">';
  
  echo '<td>'.$ans['m_name'].' ('.$ans['internal_storage'].'    storage,'.$ans['color'].')'.'</td>';
  
          
  


}

           echo '<td><button style="color:white;height:40%"><a href="orderdetails.php?id='.$row[0].'">Details</a></button></td>';
           
           echo '<td><button style="color:white;height:40%"><a href="cancle.php?id='.$row[0].'">cancle</button></a></td>';
           echo '</tr><tr>';
       }
       echo '</table>';
    }

    include("footer.php");
  ?>  