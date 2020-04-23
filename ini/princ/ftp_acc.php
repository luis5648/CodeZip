<?php
# Definimos las variables
$host="localhost";
$port=21;
$user="luis";
$password="newborn";
$ruta = "files"; //Directorio para los usuarios en general
$corr = "correcciones"; //Directorio para las correcciones
$conn_id=ftp_connect($host,$port);
