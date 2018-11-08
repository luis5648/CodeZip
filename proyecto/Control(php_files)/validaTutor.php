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
        $_SESSION['tutorLog'] = $userTutor;
        echo '<script> alert("bienvenido!");
        location.href = "../Tutores/PerfilTutor.php" </script>';

    }else{
        //falló al autentificar
        echo '<script> alert("El usuario o la contraseña no son correctos!");
        location.href = "../Tutores/loginTutor.html" </script>';
        //header( "Location ../Tutores/loginTutor.html");
        exit();
    }
}
