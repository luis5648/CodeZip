<?php
require 'conexion.php';

if (isset($_POST['login'])) {
	//VARIABLES DEL USUARIO
$usuario = $_POST['txtusuario'];
$pass = $_POST['txtpass'];
//VALIDAR CONTENIDO EN LAS VARIABLES O CAJAS DE TEXTO
if (empty($usuario) | empty($pass))
	{
	header("Location: ../login.html");
	exit();
	}
//VALIDANDO EXISTENCIA DEL USUARIO
$sql = "SELECT * from alumnos  where nombreAlumno = '$usuario' and passAlumno = '$pass' ";
$result = $conn->query($sql);
if ($result->num_rows > 0)
		{
		session_start();
		$_SESSION['usuario'] = $usuario;
		header("Location: ../PerfilUsuario.html");
		}else
			{
			header("Location: ../login.html");
			exit();
		}
}
?>
