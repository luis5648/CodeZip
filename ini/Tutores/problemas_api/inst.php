<?php

require '../../princ/Seguridad.php';
$seguridad = new Seguridad();

if ($seguridad->getUsuario() == null) {
    header('Location: ../../../index.html');
    exit;
}

require '../../princ/conexion.php';

session_start();

$problemaN = $_POST['nombreP'];
$problemaE = $_POST['problema'];

$user = $_SESSION['tutorLog'];
$sql = "SELECT idTutor, especialidad from tutores  where nombreUsuario = '$user'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$id = $row['idTutor'];
$lenguaje = $row['especialidad'];






$sqlInsertar = "INSERT INTO problemas (nombreProblema, lenguaje, enunciado, autor) VALUES ('$problemaN', '$lenguaje', '$problemaE', '$id')";

if ($conn->query($sqlInsertar)===TRUE) {
    echo json_encode(array("situation" => "agregado!"));
}else{
    echo json_encode(array("situation" =>"Error al agregar!"));
}

//mysqli_query($conn,"INSERT INTO problemas (nombreProblema, lenguaje, enunciado, autor) VALUES ('$problemaN','$problemaE', '$id')");
