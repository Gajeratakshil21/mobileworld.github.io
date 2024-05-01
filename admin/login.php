<?php
include("../connection.php");
session_start();
?>
<html>
    <head>
    <style>
    body{
   margin: 0;
   padding: 0;
   background-image: url('../admin/image/9211.jpg_wh860.jpg');
   background-size: cover;
 }
 .box{
    width:300px;
    height:300px;
    padding:50px;
    padding-right:100px;
    position: absolute;
    top:50%;
    left:70%;
    transform: translate(-50%,-50%);
   background-color: rgb(10,9,9,0.4);
   text-align: center;
   
 }
 .box h1{
     font-size:50px;
     color:white;
     padding:0px,0px,20px;
     
 }    
 .box img{
        padding:0px;
        margin:0px,40px;
        width:100px;
 }
 table td{
          width:30px;
          padding:20px;
          color:white;
          font-size:20px;
         }
         input[type="submit"],input[type="reset"] {
          width:70px;
          margin:0 25;
          color:black;
          }
   

</style>
<link rel="stylesheet" type="text/css" href="styler.css">

      </head>
    <body>
        <form class="box" name="form" method="post">
           
         <img src="image/man-user.png">
             <table>
            <tr>
                <td align="right"><b>username:</b></td>
                <td><input type="text" placeholder="USERNAME" name="AdminName"  required></td>
            </tr>
            <tr></tr>
            <tr>
                <td align="right"><b>Password:</b></td>
                <td><input type="password" placeholder="PASSWORD" name="AdminPassword" required ></td>
            </tr>
            <tr></tr><tr></tr>
            <tr align="center">
                <td align="center" colspan="2"><input type="submit" name="submit" value="login"></td>
            </tr>   
            
               
</table>
</div>
        
   </form>
  <?php
   if(isset($_POST['submit']))
{
    $query="SELECT * FROM `adminlogin` WHERE `Admin_Name`='$_POST[AdminName]' and `Admin_password`='$_POST[AdminPassword]'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1)
    {
        $_SESSION['adminloginid']=$_POST['AdminName'];
        header("location:index.php");
    }
    else{
        echo "<script> alert('incorrect password')</script>"; 
           }
 }
?>

  </body>
</html>