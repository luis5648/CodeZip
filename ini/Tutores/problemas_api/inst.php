<?php

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
    echo json_encode("agregado!");
}else{
    echo json_encode("Error al agregar: ".mysqli_error($conn));
}

//mysqli_query($conn,"INSERT INTO problemas (nombreProblema, lenguaje, enunciado, autor) VALUES ('$problemaN','$problemaE', '$id')");
