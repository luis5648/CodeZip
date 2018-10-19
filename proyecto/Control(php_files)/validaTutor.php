<?php
require 'conexion.php';

if (isset($_POST['logTutor'])){
    $userTutor = $_POST['nickTutor'];
    $passTutor = $_POST['passTutor'];

    if (empty($userTutor)|empty($passTutor)){
        //si algun campo esta vacío pasa esto:
        //redirección a la página de origen
        header( "Location ../Tutores/loginTutor.html");


        exit();
    }
    //validar el nick introducido:

    $sql = "SELECT * FROM tutores where  nombreUsuario = '$userTutor' and passTutor = '$passTutor'";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        session_start();
        $_SESSION['usuario'] = $userTutor;
        header( "Location ../Tutores/loginTutor.html");
    }else{
        //falló al autentificar
        header("Location: ../login.html");
        exit();
    }
}

