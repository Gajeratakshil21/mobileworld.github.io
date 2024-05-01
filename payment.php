<script type="text/javascript" language="javascript">
function validateform()
{
    var number=/^[0-9]{16}$/; 
    var cvv=/^[0-9]{3}$/; 
	var numb=document.form.cnum.value;  
  var cv=document.form.cvv.value;  
  
  if(numb=="")
	{
		alert("ENTER YOUR cart number");
		document.form.cnum.focus();
		return false;
	}
	else if(!number.test(numb))
	{
		alert("Enter only 16 digit number");
		document.form.cnum.focus();
		return false;
	}
	if(cv=="")
	{
		alert("ENTER YOUR cvv");
		document.form.cvv.focus();
		return false;
	}
	else if(!cv.test(cv))
	{
		alert("Enter only 3 digit number");
		document.form.cvv.focus();
		return false;
	}
	  
}
</script>

<html>
<head>
  <style>

    .detail{
      margin:0;
      padding:0;

    }
    .detail table{
      width:100px;
      height:100px;
    
    }
    .detail td{
      background-color:white;
      
    }
    </style>
  <link rel="stylesheet" type="text/css" href="css/styler.css">
</head>
<body onload="first()">
  <?php
  include("header.php");
//  include("homemenu.php");
  ?>
  
<div class="container">
  <h1>Payment</h1>
  <br><br><br>
  <hr />
  <form name="form" method="post" action="payment_action.php" onsubmit="return validateform();">
<input type="radio" value="credit"  name="pay" id="show1" onClick="showhide()" checked/> Credit Card
<input type="radio" value="cod"  name="pay" id="show2" onClick="showhide()" /> Cash on Deliver
</br><br><br>
<div id="hidecod">
    <h1>you have selected </br>cash on delivery</br></br></h1>
    <p>we are not taking any extra charges for COD</br></p>
</div>

<div id="hidecard">
<label>Card Holder Name: </label>
	<input type="text" name="cname" placeholder="enter your name" id="c_name" value="" required>
</br>
<label>CardNumber: </label>
	<input type="text" name="cnum" placeholder="enter your number" id="c_num" value="" required>                                   
</br>
<label>ExpiryDate: </label>
    <select name="month" required>
    	<option>Jan</option>
		<option>Feb</option>
		<option>Mar</option>
	    <option>Apr</option>
		<option>May</option>
		<option>Jun</option>
		<option>Jul</option>
		<option>Aug</option>
		<option>Sep</option>
		<option>Oct</option>
		<option>Nov</option>
		<option>Dec</option>
	</select>
												
	<select name="year" required>
		<option>2018</option>
		<option>2019</option>
		<option>2020</option>
		<option>2021</option>
    </select>

</br>
    <label>CVV: </label>
     <input type="text" name="cvv" placeholder="CVV Number" id="cvv" value="" required></td>
     <input type="hidden" name="type"  value="credit_card" >
</br>

    </div>
    <div class="detail">
    <table border=10 align="right"> 
    <tr>
    <td>Total <?php echo   $_SESSION['gtotal'];?></td>
    
      <td>Tex <?php echo '0.5%'?></td>
      <td>grand Total <?php echo  $_SESSION['bill'];?></td>
   
    </table>
</div>
   <br><br>
 <center><input type="submit" name="submit" value="pay" style="background-color:#04AA6D;width:90px;height:40px" /><input type="reset" name="clear" value="clear" style="background-color:#04AA6D;width:90px;height:40px"/>
</form>
</center>
<script>
    function first()
    {
        var x=document.getElementById("hidecard");
        var y=document.getElementById("hidecod");
        x.style.display = "block";
        y.style.display = "none";
    
    }
    function showhide()
    {
        var x=document.getElementById("hidecard");
        var y=document.getElementById("hidecod");
       var test=document.getElementsByName("pay");
       if(test[0].checked)
        {
            x.style.display = "block";
            y.style.display = "none";
        }
        else
        {
            x.style.display = "none";
            y.style.display = "block";
        }
    }
</script>                                  
								

 
</div><br><br>

<?php
include("footer.php");
?>
</body>
</html>
