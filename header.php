<html>
    <head>
		
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<style>
nav{
	background:url("images/download (30).jpg");
	background-position:center;
	height:150px;
	width:100%;
	position: relative;
}
nav .logo{
	float:left;
	color:white;
	padding-top:30px;
	font-size:50px;
	font-weight:600;
	line-height:70px;
	padding-left:60px;
	font-family:Snell Roundhand, cursive;
}


nav ul{
	float:right;
	list-style:none;
	margin-right:100px;
	position:relative;
}
nav ul li{
	float:left;
	
}
nav ul li a{
	color:white;
	text-decoration:none;
	line-height:150px;
	font-size:18px;
	padding:8px 25px;
}
nav ul li a:hover{
	color:white;
	box-shadow:0 0 5px #11ffff;  
	border-radius:10px;
	
}

nav ul ul{
	position:absolute;
	top:90px;
	opacity: 0;
	visibility:hidden;
	transition:top .10s;

}
nav ul li:hover>ul{
	top: 150px;
	opacity:1;
	visibility:visible;
}
nav ul ul li{
	position:relative;
	margin:0px;
	width:180px;
	float:none;
	background:url("images/download (30).jpg");
	
	display: list-item;
	border-bottom: 1px solid rgba(0,0,0,0.3);
}
nav ul ul li a{
	color:white;
	text-decoration:none;
	line-height:50px;
	font-size:18px;
	padding:8px 25px;
}
nav ul ul li a:hover{
	color:white;
	font-size:20px;
}

.user{
	background:url("images/375561.jpg");
	
	background-position:center;
	height:30px;
	position:relative;
	
}
.user h1{
	font-size:25px;
	font-weight:600;
	text-align:right;
	color:white;
	font-family:Snell Roundhand, cursive;

}

</style>
</head>
<body>
<?php
include("connection.php");
	session_start();
	if(isset($_SESSION['user']))
	{
	?>
	    <div class="user">
		<h1>welcome..<?php echo $_SESSION['user']?></h1>
	</div>
<?php
	}
	else{
		
	?>
  <div class="user">
		<h1>welcome..Guest</h1>
	</div>
	<?php
	}
	?>


	<nav>
        <div class="logo">Mobile world</div>
		
        <ul>
           <li><a href="index.php">Home</a></li>
            <li><a href="mobile.php">Product</a></li>
			<li><a href="about.php">About Us</a></li>
            <li><a href="feedback.php">Feedback</a></li>
			<?php
				if(isset($_SESSION['user']))
				{
			?>
			<li><a href="#">user Profile</a>
			<ul>
        <li><a href="bill.php">OrderDetails</a></li>
        <li><a href="profile.php">PersonalDetails</a></li>
      </ul>
    </li>
	<?php
					$query="select *from addcart where userid=".$_SESSION['uid']." and status=1";
					$result=mysqli_query($con,$query);
					$row=mysqli_num_rows($result);?>
				
    
			<li><a href="logout.php">Logout</a></li>
			<li><a href="cart.php"><i class="fa fa-shopping-cart" style="font-size:38px;color:green"></i><?php echo $row; ?></a></li>
		
				
				<?php
				}
				else{
					?>
			<li><a href="login.php">Login</a></li>
			<li><a href="cart.php"><i class="fa fa-shopping-cart" style="font-size:38px;color:green"></i></a></li>
		
			<?php
				}
				?>
		
		 </ul>
		 
		 
	</nav>
</body> 
</html>
