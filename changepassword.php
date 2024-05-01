<script type="text/javascript" language="javascript">
function validateform()
{
    var e_pwd=/^[A-Za-z0-9]{4,20}$/; 
    var c_pwd=/^[A-Za-z0-9]{4,20}$/; 
    var cpwd=document.form.cpwd.value;
   
    var pwd=document.form.PASSWORD.value;
    var cpwd=document.form.CPASS.value;
  
    if(cpwd=="")
	{
		alert("Enter Your PASSWORD");
		document.form.cpwd.focus();
		return false;
	}
     if(pwd=="")
	{
		alert("Enter Your PASSWORD");
		document.form.PASSWORD.focus();
		return false;
	}
	else if(!e_pwd.test(pwd))
	{
		alert("INVALID PASSWORD");
		document.form.PASSWORD.focus();
        return false;
     }
     if(pwd != cpwd)
	{
		alert("Enter match PASSWORD");
		document.form.CPASS.focus();
		return false;
	}
}
</script>


<?php
include("header.php");
?>
<style>
    body{
    margin:0;
    padding:0;
}
table{
    width:30%;
    height:30%;
    background-color:whitesmoke;
    font-size:20PX;
}
input[type=submit]{
    padding: 12px 30px;
    background-color:green;
    color:white;
}

    </style>
  
    
<center>
<form name="form" method="post" action="passwordedit.php"  onsubmit="return validateform();"><br>
   
    <table border=8>
    <h1 align="center">Change Password</h1><br>
	<p align="center">*************************************************</p><br><br>

    <tr>
        <td>Current Password: <input type="password" placeholder="Current Password" name="cpwd"><br></td>
</tr>
<tr> 
    <td>New Password :   <input type="password" placeholder="PASSWORD" name="PASSWORD"><br></p>
 </td>
</tr>
    <tr>
        <td>Confrim Password : <input type="password" placeholder="CONFRIM PASSWORD" name="CPASS"><br>
   </td>
</tr>
  <tr>
      <td align="center"><input type="submit" value="Edit & Save" ></td>
       </table>
</center>
<br><br><br><br><br><br><br><br>
<?php
include("footer.php");
?>