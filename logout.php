<?php
session_start();
unset($_SESSION['uid']);
unset($_SESSION['user']);
header("location:index.php");
?>