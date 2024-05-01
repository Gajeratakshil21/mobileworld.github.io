<html>
    <head>
        <title>product</title>
        <style>
             .stock{
                background-color:red;
                font-size: 20px;
                width:200px;
                height:40px;
            };

            </style>
    </head>
<body>
<?php
include("header.php");
    $id= $_GET['id'];
    include("connection.php");
    $query="SELECT *FROM product where p_id=".$id;
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_array($result);
    ?>
    
    <center>
    <table align="center" >
        <tr >
    
            <td align="center">
            <figure><img src="admin/image/<?php echo $row[21]?> " height="200px" width="200px">
            <br><br>
</td>
<td style="padding:10px 10px">
           
            <h2><?php echo $row[1]?><?php echo "  (" .$row[18]."  )"?></h2>
   <ul>
       
<?php  $q="SELECT r_size FROM ram WHERE r_id=".$row[12];
        $r=mysqli_query($con,$q);
        $ans=mysqli_fetch_array($r);
        ?>
      <li>  <?php echo $ans[0]." Gb ram |"?><?php echo $row[9]." internal storang "?></li>
     <li><?php echo $row[10]." HD + Display"?></li>
 <li><?php echo $row[6]." rear camera"?></li> 
 
 <li><?php echo $row[7]." Front camera  "?></li>
 <li>1 Year Warranty for Mobile</li> 
 <h3 style="background-color:rgb(207, 195, 195);color:black;font-size:20px;width:50%;height:30px">Price RS:<?php echo $row[19]." .00"?></h3>
 <?php $_SESSION['price']=$row['price'];?>
<br>
	 
 <?php
 
 if($row[13]==0)
 {
     echo '<tr>';
     echo'<td></td>';
    echo'<td><div class=stock>OUT OF STOCK </td>';
     echo'</tr>';

 }
 
 else{
     
     $qry="select *from product where p_id=".$row['p_id'];
     $res=mysqli_query($con,$qry);
     $r=mysqli_fetch_array($res);

     echo "<form name='frm' method='POST' action='addtocart.php'>";
     echo "Quantity:<input type='number' name='qty' value=1 min=1 max='".$row[13]."'>";
     echo "<input type='hidden' name='pid' value='".$id."'>";
     echo "<form>";
 

    echo '<tr>';
     echo'<td></td>';
    echo'<td><input type="submit" value="ADD TO CART" style="background-color:orange;width:200px;height:40px">';
    echo'</td>';
     echo'</tr>';

 }
     ?>
 
 
   
  
<tr>
    <td style="padding:20px;font-size:20px;font-weight: bold;text-align:center"><u>Product Highlights</u></td>
</tr>  <tr>  <td align="left" colspan="2">..........................................................................................................................................................</td>

</tr><br><br>
<tr>
    <td align="left" style="padding:0px;font-size:15px"><b>GENERAL FEATURES</b></td></tr>
 <tr>   <td align="left" colspan="2">..........................................................................................................................................................</td>
</tr>

<tr>
    <td style="background-color:white;font-size:20px" >Mobile Name </td>
    <td style="font-size:20px"> <?php echo $row[1]?></td>
</tr>
<tr>
<?php  $q="SELECT c_name FROM company WHERE c_id=".$row[2];
        $r=mysqli_query($con,$q);
        $ans=mysqli_fetch_array($r);
        ?>
        <tr>
    <td style="background-color:white;font-size:20px" >company Name </td>
    <td style="font-size:20px"> <?php echo $ans[0]?></td>
</tr>
<tr>
<?php  $q="SELECT s_name FROM series WHERE s_id=".$row[3];
        $r=mysqli_query($con,$q);
        $ans=mysqli_fetch_array($r);
        ?>
        <tr>
    <td style="background-color:white;font-size:20px" >company series </td>
    <td style="font-size:20px"> <?php echo $ans[0]?></td>
</tr>

<tr>
    <td style="background-color:white;font-size:20px" >color </td>
    <td style="font-size:20px"> <?php echo $row[18]?></td>
</tr>
<tr>
    <td style="background-color:white;font-size:20px" >Browser Type </td>
    <td style="font-size:20px"> Smartphones</td>
</tr>
<tr>
    <td style="background-color:white;font-size:20px" >SIM Type </td>
    <td style="font-size:20px"><?php echo $row[8]?></td>
</tr>
<tr>
    <td style="background-color:white;font-size:20px" >Touchscreen </td>
    <td style="font-size:20px"> Yes</td>
</tr>
<tr>
    <td style="background-color:white;font-size:20px" >stock </td>
    <td style="font-size:20px"> <?php echo $row[13]?></td>
</tr>

<tr>
<td align="left" colspan="2">..........................................................................................................................................................</td>
</tr>
<tr>
    <td align="left" style="padding:0px;font-size:15px"><b>DISPLAY FEATURES</b></td></tr>
 <tr>   <td align="left" colspan="2">..........................................................................................................................................................</td>
</tr>

<tr>
    <td style="background-color:white;font-size:20px" >Display Size </td>
    <td style="font-size:20px"> <?php echo $row[10]?></td>
</tr>
<tr>
    <td style="background-color:white;font-size:20px" >Resolution </td>
    <td style="font-size:20px"> <?php echo $row[14]?></td>
</tr>
<tr>
    <td style="background-color:white;font-size:20px" >Aspect ratio  </td>
    <td style="font-size:20px"><?php echo $row[15]?></td>
</tr>
<tr>
<td align="left" colspan="2">..........................................................................................................................................................</td>
</tr>
<tr>
    <td align="left" style="padding:0px;font-size:15px"><b>OS&PROCESSOR FEATURES</b></td></tr>
 <tr>   <td align="left" colspan="2">..........................................................................................................................................................</td>
</tr>

<tr>
    <td style="background-color:white;font-size:20px" >Os system </td>
    <td style="font-size:20px"> <?php echo $row[4]?></td>
</tr>
<tr>
    <td style="background-color:white;font-size:20px" >Processor core </td>
    <td style="font-size:20px"> <?php echo $row[5]?></td>
</tr>
<tr>
<td align="left" colspan="2">..........................................................................................................................................................</td>
</tr>
<tr>
    <td align="left" style="padding:0px;font-size:15px"><b>CAMERA FEATURES</b></td></tr>
 <tr>   <td align="left" colspan="2">..........................................................................................................................................................</td>
</tr>

<tr>
    <td style="background-color:white;font-size:20px" >Primary camera available </td>
    <td style="font-size:20px">yes</td>
</tr>
<tr>
    <td style="background-color:white;font-size:20px" >primary camera </td>
    <td style="font-size:20px"> <?php echo $row[6]?></td>
</tr>
<tr>
    <td style="background-color:white;font-size:20px" >second camera available </td>
    <td style="font-size:20px">yes</td>
</tr>
<tr>
    <td style="background-color:white;font-size:20px" >secondary camera </td>
    <td style="font-size:20px"> <?php echo $row[7]?></td>
</tr>
<tr>
<td align="left" colspan="2">..........................................................................................................................................................</td>
</tr>
<tr>
    <td align="left" style="padding:0px;font-size:15px"><b>BATTERY FEATURES</b></td></tr>
 <tr>   <td align="left" colspan="2">..........................................................................................................................................................</td>
</tr>

<tr>
    <td style="background-color:white;font-size:20px" >battery capacity</td>
    <td style="font-size:20px"><?php echo $row[11]?></td>
</tr>
<tr>
<td align="left" colspan="2">..........................................................................................................................................................</td>
</tr>
<tr>
    <td align="left" style="padding:0px;font-size:15px"><b>DIMENSIONS</b></td></tr>
 <tr>   <td align="left" colspan="2">..........................................................................................................................................................</td>
</tr>

<tr>
    <td style="background-color:white;font-size:20px" >height</td>
    <td style="font-size:20px"><?php echo $row[16]?></td>
</tr>
<tr>
    <td style="background-color:white;font-size:20px" >weight</td>
    <td style="font-size:20px"><?php echo $row[17]?></td>
</tr>
<tr>
<td align="left" colspan="2">..........................................................................................................................................................</td>
</tr>
<tr>
    <td align="left" style="padding:0px;font-size:15px"><b>WARRANTY</b></td></tr>
 <tr>   <td align="left" colspan="2">..........................................................................................................................................................</td>
</tr>

<tr>
    <td style="background-color:white;font-size:20px" >warrenty summary </td>
    <td style="font-size:20px">1 Year Warranty for Mobile and 6 Months for Accessories</td>
</tr>
<tr>
    <td style="background-color:white;font-size:20px" >domestic warrenty</td>
    <td style="font-size:20px">1 year</td>
</tr></table>
</center>
<br><br><br>
<?php 
    include("footer.php");
?>
</body>
</html>