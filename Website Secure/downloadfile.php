<?php
$file_name = basename($_POST["file"]);
$file = "./uploads/".$_POST["username"]."/".$file_name;
header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=$file_name");
    header("Content-Type: application/zip");
    header("Content-Transfer-Encoding: binary");
    readfile($file);

?>