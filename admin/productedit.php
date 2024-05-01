<?php
    include("../connection.php");
    $id=$_GET['id'];
    $query="SELECT *from product WHERE p_id=$id";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_array($result);
    ?>
    <html>
<head>
    <title>product</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 

</head>
<body>
    <?php
    include("header.php");
    include("menu.php");
    
    ?>
    <form name="form" method="post" action="productedit_action.php" enctype="multipart/form-data">
      <input type="hidden" name="p_id" value="<?php echo $row[0]; ?>">
    <input type="hidden" name="pimage" value="<?php echo $row[21]; ?>">
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
 
   </form>
</body>
</html>
