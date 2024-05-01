<script type="text/javascript" language="javascript">
function validateform()
{
    var e_fnm=/^[A-Za-z]{1,20}$/;
    var e_lnm=/^[A-Za-z]{1,20}$/;
    var e_email=/^[A-Za-z0-9]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
    var e_pwd=/^[A-Za-z0-9]{4,20}$/; 
	var fname=document.form.FIRSTNAME.value;  
	var lname=document.form.LASTNAME.value;
    var email=document.form.EMAIL.value;
    var pwd=document.form.PASSWORD.value;
    var cpwd=document.form.CPASS.value;
  
    if(fname=="")
	{
		alert("ENTER YOUR FIRSTNAME");
		document.form.FIRSTNAME.focus();
		return false;
	}
	else if(!e_fnm.test(fname))
	{
		alert("Enter only character in firstname");
		document.form.FIRSTNAME.focus();
		return false;
	}
	if(lname=="")
	{
		alert("Enter Your LastName");
		document.form.LASTNAME.focus();
		return false;
	}
	else if(!e_lnm.test(lname))
	{
		alert("Enter only chracter in lastname");
		document.form.LASTNAME.focus();
		return false;
	}
   if(email=="")
	{
		alert("Enter Your EMAIL");
		document.form.EMAIL.focus();
		return false;
	}
	else if(!e_email.test(email))
	{
		alert("INVALID EMAIL");
		document.form.EMAIL.focus();
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
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/styler.css">
    </head>
<body>
    <?php
     include("header.php");
//    include("homemenu.php");
    ?>
    <div class="container">
<center><h1>Sign up form</h1>
    <p>**************************************</p>
                    </center>
    <form name="form" method="post" action="registerform_action.php"  onsubmit="return validateform();"><br>
    <p><lable>Firstname</lable>
    <input type="text" placeholder="FIRSTNAME" name="FIRSTNAME"><br></p>
    <p><label>Lastname</label>
    <input type="text" placeholder="LASTNAME" name="LASTNAME" >
    <p><lable>Email</lable>
    <input type="text" placeholder="EMAIL" name="EMAIL"><br></p>
   <p>  <lable>Password</lable>
    <input type="password" placeholder="PASSWORD" name="PASSWORD"><br></p>
    <lable>Confrim Password</lable>
    <input type="password" placeholder="CONFRIM PASSWORD" name="CPASS"><br>
    <center>   <input type="submit" value="submit" style="background-color:#04AA6D;width:350px;height:40px">
</center> 
  </div>
</form>
<?php
   if(isset($_GET["msg"]))
   {
       if($_GET["msg"] =="1")
           echo '<script>alert("record inserted sucessfully")</script>';
       else if($_GET["msg"] == "0")
           echo '<script>alert("record not inserted sucessfully")</script>';
       else if($_GET["msg"] == "2")
           echo '<script>alert("email id is already exist")</script>';
   }

    ?>
    <?php
        include("footer.php")
    ?>
</body>
    </html>