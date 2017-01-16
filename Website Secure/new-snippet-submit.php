<?php
session_start();
$snippet = $_POST["snippet"];
$uid = $_POST["uid"];
$time = date('Y/m/d H:i:s');
$db = new PDO("mysql:dbname=vibe","root","") or die("unable to connect");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql="INSERT INTO snippets (uid, snippet) 
	  VALUES ($uid, '$snippet')";
$db->query($sql);
header("Location: snippets.php");
die();

?>