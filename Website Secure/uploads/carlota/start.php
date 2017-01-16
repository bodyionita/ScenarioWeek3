<html>
<head>
<title>Vibe</title>
<?php include 'navigation-bar.php' ?>

</head>
<body>
<?php
	$rows = $db->query("SELECT * FROM users;");
	foreach ($rows as $row)
		echo $row["username"]." ".$row["password"]." ".$row["is_admin"]."\n";
?>