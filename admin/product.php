
<?php
    include("../connection.php");
    ?>
<html>
    <head>
        <title></title>
       <style>
           body{
   margin: 0;
   padding: 0;
 }
table{
    padding:100px; 
    
    font-family: Arial, Helvetica, sans-serif;
    }
    table th{
          padding-left: 0px;
          font-size:25px;
          background-color:rgb(78, 4, 4);
          color:#f5f5f5;
       
       }
    table td{
        background-color:rgb(229, 173, 173);
        font-size:20px;
       
       }
       input[type="submit"],input[type="reset"] {
        width:90px;
        height:30px;
        margin:10 100px;
        background-color:rgb(78, 4, 4);
        color:#f5f5f5;
        }
 
           </style>
</head>
<body>
    <?php
    include("header.php");
    include("menu.php");
    ?>
    <form name="form" method="post" action="product_action.php" enctype="multipart/form-data">
        <table >
            <th colspan=4>product</th>
                <tr>
                    <td colspan=2>mobile name</td>
                    <td colspan=2><input type="text" name="mname"  size=38 required></td>
                </tr>
                <tr>
                    <td>Company</td>
                    <td><select name="cid" requried>
                    <?php
                $query="SELECT *FROM company";
                $result=mysqli_query($con,$query);
                while($row=mysqli_fetch_array($result))
                {
                    echo "<option value='".$row[0]."'>".$row[1]."</option>";
                }
            ?>  

                           
                    </td>             
                   <td>series</td>
                    <td><select name="sid" required>
            
                <?php
                    $query="SELECT  *FROM series";
                 $result=mysqli_query($con,$query);
                 while($row=mysqli_fetch_array($result))
                 {
                    echo "<option value='".$row[0]."'>".$row[2]."</option>";
                }
            ?>        
            </td>

                </tr>
               <tr>
                    <td>os</td>
                    <td><input type="text" name="os" required></td>
                  <td>processor</td>
                <td><input type="text" name="processor" required></td>
                    
                </tr>
               <tr>
                    <td>rear cemera</td>
                    <td><input type="text" name="rcemera" required></td>
                    <td>front cemera</td>
                    <td><input type="text" name="fcemera" required></td>
                    
                </tr>
                <tr>
                <td>SIM Type</td>
                <td><input type="text" name="sloat" requried>
                </td>
                <td>internal storage</td>
                <td><input type="text" name="storage" requried>
                </td>
</tr>

            <tr>
                <td>display</td>
                <td><input type="text" name="display" requried>
                </td>
                <td>battery</td>
                <td><input type="text" name="battery" requried>
                </td>
</tr>

            <tr>
                <td>ram</td>
            
                <td><select name="rid" requried>
                    <?php
                       $query="SELECT  *FROM ram";
                      $result=mysqli_query($con,$query);
                          while($row=mysqli_fetch_array($result))
                        {
                         echo "<option value='".$row[0]."'>".$row[1]."</option>";
                          }?>
                      </td> 
           
               <td>stock</td>
                <td><input type="text" name="rtype" requried>
                </td>
</tr>
<tr>
                <td>resolution</td>
                <td><input type="text" name="res" requried>
                </td>
               <td>aspect ratio</td>
                <td><input type="text" name="aspect" requried>
                </td>
</tr>

<tr>
                <td>Height</td>
                <td><input type="text" name="hei" requried>
                </td>
               <td>weight</td>
                <td><input type="text" name="wei" requried>
                </td>
</tr>
<tr>
                <td>color</td>
                <td><input type="text" name="color" requried>
                </td>
               <td>price</td>
                <td><input type="text" name="price" requried>
                </td>
</tr>
<tr>
               
                <td>realese date</td>
                <td><input type="date" name="date" requried>
                </td>
                <td>mobile image</td>
                <td><input type="file" name="image" requried>
                </td>
                        </tr>
 <td colspan="4" ><input type="submit" value="submit" name="submit">
 <input type="reset" value="reset" name="reset">
            </td>
            </tr>

</table>    
     <?php

        if(isset($_GET["msg"]))
        {
            if($_GET["msg"]==1)
            {
                echo '<script>alert("Add successfully")</script>';
            }
            else if($_GET["msg"]==0)
            {
                echo '<script>alert("Failed to insert")</script>';
            }
        }

 
    ?>
 
    </form>
    <?php
    echo "<table>";
    echo "<th>product id</th>";
    echo "<th>mobile name</th>";
    echo "<th>Company</th>";
    echo "<th>series</th>";
    echo "<th>os</th>";
    echo "<th>processor</th>";
    echo "<th>rear cemera</th>";
    echo "<th>front cemera</th>";
    echo "<th>SIM type</th>";
    echo "<th>storage</th>";
    echo "<th>display</th>";
    echo "<th>battery</th>";
    echo "<th>ram</th>";
    echo "<th>stock</th>";
    echo "<th>resolution</th>";
    echo "<th>aspect ration</th>";
  
    echo "<th>Height</th>";
    echo "<th>Weight</th>";
   
    echo "<th>color</th>";
    echo "<th>price</th>";
    echo "<th>date</th>";
    echo "<th>image</th>";
   echo "<th>edit</th>";
   echo "<th>delete</th>";
      
    include("../connection.php");
    $query="SELECT *FROM product";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>".$row[0]."</td>";
        echo "<td>".$row[1]."</td>";
        $q="SELECT c_name FROM company WHERE c_id=".$row[2];
        $r=mysqli_query($con,$q);
        $ans=mysqli_fetch_array($r);
        echo "<td>".$ans[0]."</td>";
        $q="SELECT s_name FROM series WHERE s_id=".$row[3];
        $r=mysqli_query($con,$q);
        $ans=mysqli_fetch_array($r);
        echo "<td>".$ans[0]."</td>";
      
        
        echo "<td>".$row[4]."</td>";
        echo "<td>".$row[5]."</td>";
        echo "<td>".$row[6]."</td>";
        echo "<td>".$row[7]."</td>";
        echo "<td>".$row[8]."</td>";
        echo "<td>".$row[9]."</td>";
        echo "<td>".$row[10]."</td>";
        echo "<td>".$row[11]."</td>";
        $q="SELECT r_size FROM ram WHERE r_id=".$row[12];
        $r=mysqli_query($con,$q);
        $ans=mysqli_fetch_array($r);
        echo "<td>".$ans[0]."</td>";
      
        echo "<td>".$row[13]."</td>";
        echo "<td>".$row[14]."</td>";
        echo "<td>".$row[15]."</td>";
        echo "<td>".$row[16]."</td>";
        echo "<td>".$row[17]."</td>";
        echo "<td>".$row[18]."</td>";
        echo "<td>".$row[19]."</td>";
        echo "<td>".$row[20]."</td>";
        echo '<td><img src="image/'.$row[21].'" width="60" height="60"></td>';
        echo '<td><a href="productedit.php?id='.$row[0].'" >edit</a></td>';
 
        echo '<td><a href="productdelete.php?id='.$row[0].'" >delete</a></td>';
 
        echo "</tr>";
    }
    echo '</table>';
    include("footer.php");
   
 ?>

 

</body>
</html>
