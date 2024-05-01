<?php
    include("../connection.php");
    $id=$_GET['id'];
    $query="SELECT *from ram WHERE r_id=$id";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_array($result);
    
    ?>
    <html>
<head>
    <title>COMPANY</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 

</head>
<body>
    <?php
    include("header.php");
    include("menu.php");
    
    ?>
    <form name="form" method="post"  action="ramedit_action.php" enctype="multipart/form-data">
      <input type="hidden" name="r_id" value="<?php echo $row[0]; ?>">
    
    <table >
    <th colspan="2">RAM</th>
        
        <tr>
            <td align="right">ram size:</td>
            <td><input type="text" name="rsize" required></td>
        </tr>
        <tr></tr>
        <tr>
        <td colspan=2 align="center"><input type="submit" value="edit" name="submit">
           <input type="reset" value="Cancel" name="reset"></td>
        
        </tr>          
</table>
</form>
</body>
</html>
?>

