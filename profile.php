<script type="text/javascript" language="javascript">
function validateform()
{
    var e_pwd=/^[A-Za-z0-9]{4,20}$/; 
    var pwd=document.form.npwd.value;
    var cpwd=document.form.copwd.value;
  
	
     if(pwd=="")
	{
		alert("Enter Your PASSWORD");
		document.form.npwd.focus();
		return false;
	}
	else if(!e_pwd.test(pwd))
	{
		alert("INVALID PASSWORD");
		document.form.copwd.focus();
        return false;
     }
     if(pwd != cpwd)
	{
		alert("Enter match PASSWORD");
		document.form.copwd.focus();
		return false;
	}
}
</script>

<?php

include("header.php");
include("connection.php");

$query="SELECT *from registerform WHERE userid=".$_SESSION['uid']."";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);



?>
<html>
    <head>
    
<style>
body{
    margin:0;
    padding:0;
   
}
table{
    width:35%;
    height:40%;
    background-color:whitesmoke;
    border-bottom: 1px solid rgba(0,0,0,0.3);
    background:url("images/images (5).jfif");
    background-repeat: no-repeat;
    background-size:1000px;
	
}
input[type=submit]{
    padding: 12px 30px;
    background-color:green;
    color:white;
}
td{
    color:white;
    font-size:25px;
}
    </style>
    </head>
    <body>
        <br><br>
<center><h1>Profile</h1> 
<p>************************</p>   
<br>
<form name="form" method="post" action="profileedit.php" ><br>
  
<table border=0>
    <tr>
    <td>Firstname : <?php echo $row[1]?></td>
    <input type="hidden" name="fname" value="<?php echo $row[1]?>">
</tr>
<tr>
    <td>Lastname : <?php echo $row[2]?></td>
    <input type="hidden" name="lname" value="<?php echo $row[2]?>">
</tr>
<tr>
    <td>Email : <?php echo $row[3]?></td>
    <input type="hidden" name="email" value="<?php echo $row[3]?>">
</tr>
<tr><td align="center"><input type="submit" value="Edit" ></td>
<td align="center"><button style=" padding: 12px 30px; background-color:green"><a href="changepassword.php" style="color:white">Change Password</td>
  
</table>               
</center>
<br><br><br>
<br><br><br><br><br><br>
<?php
        include("footer.php")
    ?>
