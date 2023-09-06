<?php 
session_start();
session_destroy();

Header("Location: Login_Page.php");
exit;
?>