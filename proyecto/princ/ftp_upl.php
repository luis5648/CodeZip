<?php
require_once 'ftp_acc.php';
session_start();

$carpeta = $_SESSION['usuario'];


function ftp_is_dir($dir)
{
	global $conn_id;
	// get current directory
	$original_directory = ftp_pwd($conn_id);
	// test if you can change directory to $dir
	// suppress errors in case $dir is not a file or not a directory
	if (@ftp_chdir($conn_id, $dir)) {
		// If it is a directory, then change the directory back to the original directory
		ftp_chdir($conn_id, $original_directory);
		return true;
	} else {
		return false;
	}
}


# Comprobar que se haya enviado algo desde el formulario
if (is_uploaded_file($_FILES["archivo"]["tmp_name"])) {


	# Realizamos la conexion con el servidor

	if ($conn_id) {
		# Realizamos el login con nuestro usuario y contraseña
		if (ftp_login($conn_id, $user, $password)) {

			if(!ftp_is_dir($ruta . '/' . $carpeta )){
				if(ftp_mkdir($conn_id,$ruta . '/' . $carpeta )){
					if (@ftp_chdir($conn_id, $ruta . '/' . $carpeta)) {

						# Subimos el fichero
						if (ftp_put($conn_id, $_FILES["archivo"]["name"], $_FILES["archivo"]["tmp_name"], FTP_BINARY))
							echo '<script type="text/javascript">alert("Archivo guardado.");
						location.href="../PAGE-INIT/Cursos/Editores/Editor_C.php";</script>';
						else
							echo '<script type="text/javascript">alert("No se ha podido guardar el archivo! contacte con soporte del sitio.");
						location.href="../PAGE-INIT/Cursos/Editores/Editor_C.php";</script>';
					} echo '<script type="text/javascript">alert("No existe la ruta de guardado, contacte a soporte del sitio.");
					location.href="../PAGE-INIT/Cursos/Editores/Editor_C.php";</script>';
				}
			}else {
				if (@ftp_chdir($conn_id, $ruta . '/' . $carpeta)) {

					# Subimos el fichero
					if (ftp_put($conn_id, $_FILES["archivo"]["name"], $_FILES["archivo"]["tmp_name"], FTP_BINARY))
						echo '<script type="text/javascript">alert("Archivo guardado.");
					location.href="../PAGE-INIT/Cursos/Editores/Editor_C.php";</script>';
					else
						echo '<script type="text/javascript">alert("No se ha podido guardar el archivo! contacte con soporte del sitio.");
					location.href="../PAGE-INIT/Cursos/Editores/Editor_C.php";</script>';
				} echo '<script type="text/javascript">alert("No existe la ruta de guardado, contacte a soporte del sitio.");
				location.href="../PAGE-INIT/Cursos/Editores/Editor_C.php";</script>';
			}

		} else {
			echo "El usuario o la contraseña son incorrectos";
		}

		# Cerramos la conexion ftp
		ftp_close($conn_id);
	} else
		echo "No ha sido posible conectar con el servidor";
}

//listar archivos del ftp: https://stackoverflow.com/questions/52855025/list-and-download-clicked-file-from-ftp
