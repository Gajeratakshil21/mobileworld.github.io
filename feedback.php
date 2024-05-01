<html>
<head>
<link rel="stylesheet" type="text/css" href="css/styler.css">
   
</head>
<body>
<?php
     include("header.php");
    ?>
   
<center><h1>Feedback Form</h1>
<p>***********************************</p>
                    </center>
<br><br>
    <form name="form" method="post" action="feedback_action.php">
    <div class="container">
        
    <p><lable>Full Name</lable>
    <input type="text" placeholder="FIRSTNAME" name="fname" required><br></p>
    <p><label>Email</label>
    <input type="text" placeholder="email" name="email" required></br></p>
    <p><lable>Message*</lable>
    <input type="text" placeholder="write your message here...." name="msg" style="height:100px" required></br></p>
 <center>   <input type="submit" value="submit" style="background-color:#04AA6D;width:350px;height:40px">
</center>
</div> 
<?php
    if(isset($_GET["msg"]))
    {
        if($_GET["msg"]==1)
        {
            echo '<script>alert("Add successfully")</script>';
        }
        else if($_GET["msg"]==0)
        {
            echo '<script>alert("Failed to insert")</script>';
        }
    }
    ?>
     
</form>
<?php
include("footer.php");
?>
</body>
    <html>