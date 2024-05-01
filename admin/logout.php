<?php
session_start();
unset($_SESSION['adminloginid']);
header("location:index.php");
?>