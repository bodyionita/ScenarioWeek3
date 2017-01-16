<?php
session_start();
unset($_SESSION["username"]); 
unset($_SESSION["is_admin"]);
header("Location: start.php");
die();
?>