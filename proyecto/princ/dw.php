<?php

header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="'.$_GET["file"].'"');

echo file_get_contents('ftp://luis:newborn@localhost/' . $_GET["file"]);