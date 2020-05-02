<?php

require '../../princ/Seguridad.php';
$seguridad = new Seguridad();

if ($seguridad->getUsuario() == null) {
    header('Location: ../../../index.html');
    exit;
}

require '../../princ/conexion.php';

session_start();

$user = $_SESSION['tutorLog'];
$sql = "SELECT idTutor from tutores  where nombreUsuario = '$user'";

$result = $conn->query($sql);
$row = $result->fetch_assoc();

$id = $row['idTutor'];



$gen = "SELECT * FROM problemas where autor = $id";

    $rowen = mysqli_query($conn,$gen );
    $i = 0;
    $json = array();
    while ($fila = mysqli_fetch_array($rowen)) {
        
        $json[] = array(
            'numero'=> $i,
            'id' => $fila['idProblema'],
            'nombre' => $fila['nombreProblema'],
            'enunciado' => $fila['enunciado']
        );
        $i++;
    }
    echo json_encode($json);
