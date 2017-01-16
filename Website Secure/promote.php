<?php 
session_start();
$db = new PDO("mysql:dbname=vibe", "root", "");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$uid = $_POST["uid"];
$db->query("UPDATE users SET is_admin=1 WHERE uid=$uid");
$_SESSION["promoted_uid"] = $uid;
header("Location: admin.php");
?>