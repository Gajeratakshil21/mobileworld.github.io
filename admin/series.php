<?php 
    include("../connection.php");
?>
<html>
<head>
    <title>series</title>
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
   <body>
    <form name="form" method="post" action="series_action.php" enctype="multipart/form-data">
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
            <td>Series Name:</td>
            <td><input type="text" name="sname" required></td>
        </tr>
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
    echo "<table>";
    echo "<th>Series Id</th>";
    echo "<th>Company Name</th>";
    echo "<th>Series Name</th>";
    echo "<th>edit</th>";
    echo "<th>delete</th>";
     
    $query="SELECT *FROM series";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>".$row[0]."</td>";
        $q="SELECT c_name FROM company WHERE c_id=".$row[1];
        $r=mysqli_query($con,$q);
        $ans=mysqli_fetch_array($r);
        echo "<td>".$ans[0]."</td>";
        echo "<td>".$row[2]."</td>";
        echo '<td><a href="seriesedit.php?id='.$row[0].'">edit</a></td>'; 
       
        echo '<td><a href="seriesdelete.php?id='.$row[0].'">delete</a></td>'; 
        echo "</tr>";
    }
    echo '</table>';
    include("footer.php");
 ?>
</body>
</html>