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
    <form name="form" method="post" action="storage_action.php" enctype="multipart/form-data">
    <table >
    <th colspan="2">storage</th>
        
        <tr>
            <td align="right">internal storage:</td>
            <td><input type="text" name="ssize" required></td>
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
   echo "<th>storage Id</th>";
   echo "<th>internal storage</th>";
   include("../connection.php");
   $query="SELECT *FROM storage";
   $result=mysqli_query($con,$query);
   while($row=mysqli_fetch_array($result))
   {
       echo "<tr>";
       echo "<td>".$row[0]. "</td>";
       echo "<td>".$row[1]."</td>";
      
       echo "</tr>";
   }


   ?>  
   
 </body>
</html>