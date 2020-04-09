<style>
    .arLi {
        color: cyan;
        list-style-type: disc;
    }
</style>
<?php

function obtener_estructura_directorios($ruta)
{
    // Se comprueba que realmente sea la ruta de un directorio
    if (is_dir($ruta)) {
        // Abre un gestor de directorios para la ruta indicada
        //$gestor = opendir($ruta);
        echo "<ul>";
        $archivo = scandir($ruta);
        for ($i = 2; $i < count($archivo); $i++) {
            $r = $ruta . "/" . $archivo[$i];
            echo "<a target='_blank' href=$r class='arLi'><li>.$archivo[$i].</li></a>";
        }

        /*
        // Recorre todos los elementos del directorio
        while (($archivo = readdir($gestor)) !== false)  {

            $ruta_completa = $ruta . "/" . $archivo;

            // Se muestran todos los archivos y carpetas excepto "." y ".."
            if ($archivo != "." && $archivo != "..") {
                // Si es un directorio se recorre recursivamente
                if ((is_dir($ruta_completa)) && (!is_file($ruta_completa))) {
                  if (is_dir($archivo)) {
                    echo "<mark><li>" . $archivo . "</li></mark>" . "<br>";
                    obtener_estructura_directorios($ruta_completa);
                  }else {
                    echo "<li>" . $archivo . "</li>" . "<br>";
                    obtener_estructura_directorios($ruta_completa);
                  }

                } else {
                    echo "<li>" . $archivo . "</li>" . "<br>";
                }
            }
        }

        // Cierra el gestor de directorios
        */
        //closedir($gestor);
        echo "</ul>";
    } else {
        echo "No es una ruta de directorio valida<br/>";
    }
}

function obtenerFTP()
{
    require 'ftp_acc.php';

    $login_result = ftp_login($conn_id, $user, $password);

    $contents = ftp_nlist($conn_id, $ruta);
    
    foreach ($contents as $file) {
        $fs = ftp_nlist($conn_id, $file);
        foreach ($fs as $f){
            echo "<a href=\"../princ/dw.php?file=".urlencode($f)."\">".htmlspecialchars($f)."</a>";
        echo "<br>";
        }
        
    }
    ftp_close($conn_id);
}

?>