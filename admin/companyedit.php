<?php
    include("../connection.php");
    $id=$_GET['id'];
    $query="SELECT *from company WHERE c_id=$id";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_array($result);
    ?>
    <html>
<head>
    <title>COMPANY</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"> 

</head>
<body>
    <?php
    include("header.php");
    include("menu.php");
    
    ?>
    <form name="form" method="post" action="companyedit_action.php" enctype="multipart/form-data">
      <input type="hidden" name="c_id" value="<?php echo $row[0]; ?>">
    <input type="hidden" name="cimage" value="<?php echo $row[2]; ?>">
    
    <table >
        <tr>
    <th colspan="2">Company</th>
</tr>
        <tr>
            <td align="right"><b>company name:</b></td>
            <td><input type="text" name="cname" value="<?php echo $row[1];?>" required></td>
        </tr>
        <tr></tr>
        <tr>
            <td align="right"><b>company logo:</b></td>
            <td><input type="file" name="cimg" value="<?php echo $row[2];?>"></td>
        </tr>
        <tr></tr><tr></tr>
        <tr>
        <td colspan=2 align="center"><input type="submit" value="edit" name="edit">
            <input type="reset" value="Cancel" name="reset"></td>
        
        </tr>          
</table>
</form>
<?php
include("footer.php");
?>
</body>
</html>
