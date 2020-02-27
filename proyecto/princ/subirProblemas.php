<?php
session_start();

$carpeta = $_SESSION['usuario'];

$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name'];


//valida si existe la carpeta de los archivos
if(!file_exists('Soluciones/'."$carpeta")){
    //crea una carpeta con el nombre previamente dado
    mkdir('Soluciones/'."$carpeta",0777,true);
    if(file_exists('Soluciones/'."$carpeta")){
        //mueve el archivo a la ruta designada con el nombre original
        if(move_uploaded_file($guardado, 'Soluciones/'."$carpeta/"."$nombre")){
            echo '<script type="text/javascript">alert("Archivo guardado.");
    location.href="../PAGE-INIT/Cursos/Editores/Editor_C.php";</script>';
        }else{
            echo "Archivo no se pudo guardar";
        }
    }
}else{
    if(move_uploaded_file($guardado, 'Soluciones/'."$carpeta/"."$nombre")){
        echo '<script type="text/javascript">alert("Archivo guardado.");
    location.href="../PAGE-INIT/Cursos/Editores/Editor_C.php";</script>';
    }else{
        echo "Archivo no se pudo guardar";
    }
}

?>