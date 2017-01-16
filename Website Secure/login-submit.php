<?php
$username = $_POST["username"];
$pw = $_POST["password"];

session_start();
if (is_correct_password($username, $pw)) {
	if (is_admin($username)) $_SESSION["is_admin"] = 1;
	else $_SESSION["is_admin"] = 0;
	$_SESSION["username"] = $username;
	header("Location: start.php");
} else
{
	$_SESSION["invalid_login"] = 1;
	header("Location: login.php");
}
die();
	
function is_admin($username){
	$db = new PDO("mysql:dbname=vibe", "root", "");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$rows = $db->query("SELECT is_admin FROM users WHERE username = '$username'");
	foreach ($rows as $row) 
		if ($row["is_admin"] == 1) return TRUE;
	return FALSE;
	}


function is_correct_password($username, $pw){
	$db = new PDO("mysql:dbname=vibe", "root", "");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$rows = $db->query("SELECT username,password FROM users WHERE username = '$username'");
	foreach ($rows as $row) if ($row["password"] == $pw) return TRUE;
	return FALSE;
}
?>