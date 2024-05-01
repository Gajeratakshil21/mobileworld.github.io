<script type="text/javascript" language="javascript">
function validateform()
{
    var contact=/^[0-9]{10}$/; 
    var pincode=/^[0-9]{6}$/; 
	var con=document.form.contact.value;  
  var pin=document.form.pincode.value;  
  
  if(con=="")
	{
		alert("ENTER YOUR contact");
		document.form.contact.focus();
		return false;
	}
	else if(!contact.test(con))
	{
		alert("Enter only 10 digit number");
		document.form.contact.focus();
		return false;
	}
	if(pin=="")
	{
		alert("ENTER YOUR pincode");
		document.form.pincode.focus();
		return false;
	}
	else if(!pincode.test(pin))
	{
		alert("Enter only 6 digit number");
		document.form.pincode.focus();
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
//  include("homemenu.php");
  ?>
  <form name="form" method="post" action="shipping_action.php" onsubmit="return validateform();">
  <div class="container">
    <br><br>
<center><h1><u>Shipping form</u></h1>
                    </center>
    <p><lable>Full Name</lable>
    <input type="text" placeholder="Full Name" name="fullname" required><br></p>
    <p><lable>Shipping Address</lable>
   
    <input type="text" placeholder="shipping Address" name="sadd" style="height:100px" required></br></p>
   
   <p>  <lable>Billing Address</lable>
   <input type="text" placeholder="Billing Address" name="badd" style="height:100px" required></br></p>
   <p><label>City</label>
    <input type="text" placeholder="city" name="city" required>
    
    <lable>Contact</lable>
    <input type="text" placeholder="Contact" name="contact" required>
    <lable>Pin-Code</lable>
    <input type="text" placeholder="Pin-Code" name="pincode" required><br></p>
    
    <button type="submit" class="registerbtn">Continue</button>
    
  </div>
</form>
  
</div><br><br>
<?php
include("footer.php");
?>
</body>
</html>