<?php
include "ftp_acc.php";
#nuevo intento con modo pasivo
//ftp_pasv($conn_id,false);
$path = $_GET["file"];
$tamanio = ftp_size($conn_id,$path);

//ftp_get($conn_id,"php://output", $path, FTP_BINARY);

//header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="'.$path.'"');
header('Content-Transfer-Encoding: binary');
//header('Expires: 0');
//header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
//header('Pragma: public');
//header('Content-Length: $tamanio');

echo file_get_contents('ftp://luis:newborn@localhost/'.$_GET["file"]);