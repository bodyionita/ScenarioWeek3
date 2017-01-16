<?php
$name = $_POST["name"];
$pw = $_POST["password"];
$cpw = $_POST["confirm"];
$username = $_POST["username"];

register($name, $username, $pw);
session_start();
header("Location: start.php");
die();


function register($name, $username, $pw) {
	$db = new PDO("mysql:dbname=vibe","root","") or die("unable to connect");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql="INSERT INTO users (username, name, password) 
		  VALUES ('$username', '$name', '$pw')";
	$db->query($sql);
}

?>