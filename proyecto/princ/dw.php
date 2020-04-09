<?php

header('Content-Type: application/octet-stream');

echo file_get_contents('ftp://luis:newborn@localhost/' . $_GET["file"]);