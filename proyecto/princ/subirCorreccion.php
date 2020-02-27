<?php

$nombre = $_FILES['correccion']['name'];
$saved = $_FILES['correccion']['tmp_name'];

if (!file_exists("Soluciones/Correcciones")){
    mkdir("Soluciones/Correcciones",0777,true);
    if (file_exists("Soluciones/Correcciones")){
        if (move_uploaded_file($saved,'Soluciones/Correcciones/'."$nombre")){
            echo '<script type="text/javascript">alert("Corrección subida.");
    location.href="../Tutores/PerfilTutor.php";</script>';
        }else{
            echo "Archivo no se pudo guardar";
        }

    }
}else{
    if(move_uploaded_file($saved,'Soluciones/Correcciones/'."$nombre")){
        echo '<script type="text/javascript">alert("Corrección subida.");
    location.href="../Tutores/PerfilTutor.php";</script>';
    }else{
        echo "Archivo no se pudo guardar";
    }

}