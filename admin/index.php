<?php
    session_start();
    if(!$_SESSION['adminloginid'])
    {
        header("location:login.php");
    }
    ?>

<html>
  <head>
    <style>
     body{
        margin:0;
        padding:0;
    
      }
     /* .imag img{
        background-size:cover;
        width:500px;
         }*/
      </style>
   </head>
  <body>
    <?php
    include("header.php");
    include("menu.php");
    ?>
    <h1 align="center" style="font-size:70px;padding:100px;	font-family:Snell Roundhand, cursive;">Welcome <?php echo    $_SESSION['adminloginid']?></h1>
   <?php
   include("footer.php");
   ?>
 </body>

  </html>