<?php
	$index = $_POST['index'] - 1;
	$uid = $_POST['uid'];
    $db = new PDO("mysql:dbname=vibe","root","") or die("unable to connect");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$rows = $db->query("SELECT * FROM snippets WHERE uid=$uid ORDER BY time_added DESC");
	$row = $rows->fetchAll();	
	$sid = $row[$index]['sid'];
	$db->query("DELETE FROM snippets WHERE sid='$sid'");
    header("Location: snippets.php");
?>