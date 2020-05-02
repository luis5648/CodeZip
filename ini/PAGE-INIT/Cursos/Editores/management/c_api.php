<?php

require '../../../../princ/Seguridad.php';
$seguridad = new Seguridad();

if ($seguridad->getUsuario() == null) {
    header('Location: ../../../../../index.html');
    exit;
}


require '../../../../princ/conexion.php';

$lang = $_POST["lenguaje"];


    $gen = "SELECT * FROM problemas WHERE lenguaje = '$lang'";

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
//}







