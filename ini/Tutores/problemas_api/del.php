<?php
    require '../../princ/conexion.php';

    $id = base64_decode($_GET['w']);

    $consultaDel = mysqli_query($conn,"DELETE FROM problemas WHERE idProblema = '$id'");


    if($consultaDel === TRUE){
        echo "<script>alert('Problema eliminado satisfactoriamente!'); history.back(); </script>";
    }else{
        echo "<script>alert('Ha ocurrido un problema al eliminar!'); history.back(); </script>";
    }

?>