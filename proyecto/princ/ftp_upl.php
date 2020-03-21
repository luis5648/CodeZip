<?php
require_once 'ftp_acc.php';
session_start();

$carpeta = $_SESSION['usuario'];

# Comprobar que se haya enviado algo desde el formulario
if (is_uploaded_file($_FILES["archivo"]["tmp_name"])) {


	# Realizamos la conexion con el servidor

	if ($conn_id) {
		# Realizamos el login con nuestro usuario y contraseña
		if (@ftp_login($conn_id, $user, $password)) {

			#valida si existe la carpeta del usuario
			if (!file_exists($ruta . '/' . $carpeta)) {
				//si no, se crea

				if (ftp_mkdir($conn_id, $ruta . '/' . $carpeta)) {
					
					#cambio al directorio
					if (@ftp_chdir($conn_id, $ruta. '/' . $carpeta)) {

						# Subimos el fichero
						if (@ftp_put($conn_id, $_FILES["archivo"]["name"], $_FILES["archivo"]["tmp_name"], FTP_BINARY))
							echo "Fichero subido correctamente";
						else
							echo "No ha sido posible subir el fichero";
					} else
						echo "No existe el directorio especificado";
				} else {
					echo "no se pudo crear $carpeta";
				}
			}
		} else
			echo "El usuario o la contraseña son incorrectos";
		# Cerramos la conexion ftp
		ftp_close($conn_id);
	} else
		echo "No ha sido posible conectar con el servidor";
} else {
	
}