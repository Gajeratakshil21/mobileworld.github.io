<html>
<head>
    <title>COMPANY</title>
 <style>

body{
   margin: 0;
   padding: 0;
  
 }
table{
    padding:80px 0px 0px 500px; 
    font-family: Arial, Helvetica, sans-serif;
  
    }
    table th{
          padding-left: 30px;
          font-size:35px;
          background-color:rgb(78, 4, 4);
          color:#f5f5f5;
          
       
       }
    table td{
        background-color:rgb(229, 173, 173);
        width:70px;
        font-size:20px;
       
       }
       input[type="submit"],input[type="reset"] {
        width:70px;
        margin:0 25;
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
    <form name="form" method="post" action="company_action.php" enctype="multipart/form-data">
    <table >
        <tr>
    <th colspan="2">Company</th>
</tr>
        <tr>
            <td><b>company name: </b></td>
            <td><input type="text" name="cname" required></td>
        </tr>
        <tr></tr>
        <tr>
            <td><b>company logo:</b></td>
            <td><input type="file" name="cimg" required></td>
        </tr>
        <tr></tr><tr></tr>
        <tr>
        <td colspan=2 align="center"><input type="submit" value="ADD" name="submit">
            <input type="reset" value="Cancel" name="reset"></td>
        
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
include("../connection.php");
// Using database connection file here
        echo "<table>";
        echo"<th>id</th>";
        echo"<th>name</th>";
        echo"<th>logo</th>";
        echo "<th>edit</th>";
        echo "<th>Delete</th>";
   

$query="SELECT *FROM company";
$result=mysqli_query($con,$query);

while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" .$row[0]."</td>";
    echo "<td>" .$row[1]."</td>";
    echo '<td><img src="image/'.$row[2].'" width="70" height="40"></td>';
    echo '<td><a href="companyedit.php?id='.$row[0].'" >edit</a></td>';
    echo '<td><a href="companydelete.php?id='.$row[0].'" >delete</a></td>';
       
    echo "</tr>";
    
    
     
}
echo '</table>';
include("footer.php");

?>
  
    </body>
</html>
