<?php
$name = $_POST["name"];
$pw = $_POST["password"];
$cpw = $_POST["confirm"];
$username = $_POST["username"];
session_start();
if (strpos($username, ".") !== FALSE)
	{ 
		$_SESSION["invalid_username"] = 1;
		header("Location: register.php");
	}
	else 
	{
		register($name, $username, $pw); 
		header("Location: start.php"); 		
	}
	


function register($name, $username, $pw) {
	$db = new PDO("mysql:dbname=vibe","root","") or die("unable to connect");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql="INSERT INTO users (username, name, password) 
		  VALUES ('$username', '$name', '$pw')";
	$db->query($sql);
}

?>