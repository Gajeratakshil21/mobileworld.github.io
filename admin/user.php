<html>
    <head>
        <style>
            table{
    padding:100px 400px; 
    
    font-family: Arial, Helvetica, sans-serif;
    }
    table th{
            padding-top:10px;
          padding-left: 20px;
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

include("../connection.php");
// Using database connection file here
        echo "<table >";
        echo"<th> userid</th>";
        echo"<th>firstname</th>";
        echo"<th>lastname</th>";
        echo "<th>email</th>";
        echo "<th>password</th>";
       echo "<th>delete</th>" ;
   

$query="SELECT *FROM registerform";
$result=mysqli_query($con,$query);

while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" .$row[0]."</td>";
    echo "<td>" .$row[1]."</td>";
    echo "<td>" .$row[2]."</td>";
    echo "<td>" .$row[3]."</td>";
    echo "<td>" .$row[4]."</td>";
    echo '<td><a href="userdelete.php?id='.$row[0].'">delete</a></td>';
   
    echo "</tr>";
    
     
}

echo '</table>';
include("footer.php");
?>
</body>
</html>