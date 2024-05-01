<script type="text/javascript" language="javascript">
function validateform()
{
    var e_fnm=/^[A-Za-z]{1,20}$/;
    var e_lnm=/^[A-Za-z]{1,20}$/;
    var e_email=/^[A-Za-z0-9]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
   var fname=document.form.FIRSTNAME.value;  
	var lname=document.form.LASTNAME.value;
    var email=document.form.EMAIL.value;
   
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
<center><h1>Edit Profile</h1>
<p>***********************************************</p>
                    </center>
    <form name="form" method="post" action="profileedit_action.php"  onsubmit="return validateform();"><br>
    <p><lable>Firstname</lable>
    <input type="text" placeholder="FIRSTNAME" name="FIRSTNAME" value="<?php echo $_POST['fname']; ?>" required><br></p>
    <p><label>Lastname</label>
    <input type="text" placeholder="LASTNAME" name="LASTNAME" value="<?php echo $_POST['lname']; ?>" required>
    <p><lable>Email</lable>
    <input type="text" placeholder="EMAIL" name="EMAIL" value="<?php echo $_POST['email']; ?>" required><br></p>
    <button type="submit" class="registerbtn">Edit & Save</button>
    
  </div>
</form>
    <?php
        include("footer.php")
    ?>
</body>
    </html>