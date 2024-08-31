<?php
session_start();
if(empty($_SESSION["uname"] == true)) header("location:login.php");
session_unset();
session_destroy();
 header("location:login.php");
exit;
 ?>
 