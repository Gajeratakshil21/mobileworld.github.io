
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/styler.css">
</head>
  
<body>
    <?php
    include("header.php");
    // include("menu.php");
    ?><br><br>
    <form  name="form" action="login_action.php" method="post">
  
        <div class="container">
        <h1 align="center">Login Form</h1>
        <p align="center">*************************************</p>
  
            <label>Email</label>
            <input type="text" placeholder="Enter email" name="email" required>
  
            <label>Password</label>
            <input type="password" placeholder="Enter Password" name="password" required>
  
          <center>  <input type="submit" value="login" style="background-color:#04AA6D;width:390px;height:40px"></center>
    
           <center><h5> Not a member? <a href="registerform">Signup now</a></h5></center>

            </div>
          <?php
        if(isset($_GET["msg"]))
        {
            if($_GET["msg"]==1)
            {
                include("loginuser.php");
                echo '<script>alert("Login successful")</script>';
            }
            else if($_GET["msg"]==0)
            {
                echo '<script>alert("Invalid Username Or Password")</script>';
            }
        }
    ?>
           
         </form><br><br><br>
         <?php
         include("footer.php")
         ?>
        </body>
  
