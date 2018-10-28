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
$sql = "SELECT * from alumnos  where nombreUsuario = '$usuario' and passAlumno = '$pass' ";
$result = $conn->query($sql);
if ($result->num_rows > 0)
		{
		session_start();
		$_SESSION['usuario'] = $usuario;
            echo '<script> alert("logueo exitoso!");
        location.href = "User.php" </script>';
		}else
			{
                echo '<script> alert("Usuario o contraseña incorrectos");
        location.href = "../PAGE-INIT/home.html" </script>';
			exit();
		}
}
?>
