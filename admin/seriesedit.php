
<?php
    include("../connection.php");
    $id=$_GET['id'];
    $query="SELECT *from series WHERE s_id=$id";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_array($result);
    ?>

<html>
    <head>
            <link rel="stylesheet" type="text/css" href="style.css">
        </head>
<body>
<body>
    <form name="form" method="post" action="seriesedit_action.php" enctype="multipart/form-data">
    <input type="hidden" name="s_id" value="<?php echo $row[0]; ?>">
    <input type="hidden" name="c_id" value="<?php echo $row[1]; ?>">
    
    <table>
        <th colspan=2>SERIES</th>
        <tr>
            <td>Company</td>
            <td><select name="cid" required>
            <?php
                $query="SELECT *FROM company";
                $result=mysqli_query($con,$query);
                while($row=mysqli_fetch_array($result))
                {
                    echo "<option value='".$row[0]."'>".$row[1]."</option>";
                }
            ?>    
            </td>
        </tr>
        <tr>
            <td>Series Name</td>
            <td><input type="text" name="sname" required></td>
        </tr>
        <tr>
            <td colspan=2 align="center"><input type="submit" value="edit" name="submit">
            <input type="reset" value="Cancel" name="reset"></td>
        </tr>
    </table> 
  
</body>
    </html>
    