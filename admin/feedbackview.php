
<html>
    <head>
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

include("../connection.php");
// Using database connection file here
        echo "<table>";
        echo"<th>user id</th>";
        echo"<th>full name</th>";
        echo "<th>email</th>";
        echo "<th>message</th>";
       echo "<th>delete</th>" ;
   

$query="SELECT *FROM feedback";
$result=mysqli_query($con,$query);

while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" .$row[0]."</td>";
    echo "<td>" .$row[1]."</td>";
    echo "<td>" .$row[2]."</td>";
    echo "<td>" .$row[3]."</td>";
    echo '<td><a href="feedbackdelete.php?id='.$row[0].'">delete</a></td>';
   
    echo "</tr>";
    
     
}
echo '</table>';
echo '<br><br><br><br><br>';
include("footer.php");
?>
</body>
</html>