<?php
session_start();
mkdir("./uploads/".$_SESSION["username"], 0777, true);
$target_dir = "uploads/".$_SESSION["username"]."/";
$file_name = $_FILES["file"]["name"];
$target_file = $target_dir.basename($file_name);
$uploadOk = 1;
move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
$_SESSION["file_url"] = 'http://'.$_SERVER['HTTP_HOST'].'/Website%20Secure/my-files.php';
header("Location: upload.php");
?>