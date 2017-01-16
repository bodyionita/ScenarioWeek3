<?php
$username = $_POST["username"];
$old_pw = $_POST["old_pw"];
$new_pw = $_POST["new_pw"];
$new_icon_url = $_POST["icon_url"];
$new_website = $_POST["website"];
$new_name = $_POST["new_name"];
$new_profile_color = $_POST["new_profile_color"];
session_start();

$db = new PDO("mysql:dbname=vibe", "root", "");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->query("UPDATE users 
			SET profile_color='$new_profile_color',icon_url='$new_icon_url', name='$new_name', website='$new_website'
		    WHERE username='$username'");

if ($old_pw) { 
	if (!$new_pw)  $_SESSION["invalid_new_password"] = 1; 
	   else {
			$rows = $db->query("SELECT password FROM users WHERE uid='$uid' AND password='$old_pw'");
			$_SESSION["invalid_password"]=1; 
			foreach ($rows as $row)
				if ($rows){
						 $db->query("UPDATE users SET password='$new_pw' WHERE username=$username"); 
						 unset($_SESSION["invalid_password"]);
				}
					
			}
}
$_SESSION["success"] = 1;
header("Location: profile.php");

?>