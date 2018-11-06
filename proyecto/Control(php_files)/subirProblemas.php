<?php


$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name'];


//valida si existe la carpeta de los archivos
if(!file_exists('Soluciones')){
    //crea una carpeta con el nombre previamente dado
    mkdir('Soluciones',0777,true);
    if(file_exists('Soluciones')){
        //mueve el archivo a la ruta designada con el nombre original
        if(move_uploaded_file($guardado, 'Soluciones/'."$nombre")){
            echo "Archivo guardado con exito";
        }else{
            echo "Archivo no se pudo guardar";
        }
    }
}else{
    if(move_uploaded_file($guardado, 'Soluciones/'."$nombre")){
        echo '<script type="text/javascript">alert("Archivo guardado.");
    location.href="../PAGE-INIT/Cursos/Editores/Editor_C.php";</script>';
    }else{
        echo "Archivo no se pudo guardar";
    }
}

?>