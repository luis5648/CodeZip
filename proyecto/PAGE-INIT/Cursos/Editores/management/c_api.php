<?php

require '../../../../Control(php_files)/conexion.php';

$valClick = 1;
if (isset( $_POST['sig'])){


    $gen = "SELECT * FROM problemas WHERE lenguaje = '2'";

    $rowen = mysqli_query($conn,$gen );

    $json = array();
    while ($fila = mysqli_fetch_array($rowen)) {
        $json[] = array(
            'id' => $fila['idProblema'],
            'nombre' => $fila['nombreProblema'],
            'enunciado' => $fila['enunciado']
        );
    }
    echo json_encode($json);
}







