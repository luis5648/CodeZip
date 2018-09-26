<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
	LOGIN</title>
</head>
<body>

	<h1>Ingrese sus datos</h1>
    <form >
    Ingrese su nombre de usuario<input type="text" name="usuario">
    Ingrese su contraseña<input type="text" name="contraseña">
    <input type="submit" value="enviar">	
    </form>

<?php
$conexion=@mysql_connect("localhost","root","tuputisimamadre");

if (!$conexion) {

	exit("error en base de datos");
}

mysql_select_db("web");
$user=$_GET['usuario'];
$password=$_GET['contraseña'];
$query=mysql_query("select *from users where id='".user." and password='".password,$conexion);


if (!$data=mysql_fetch_assoc($query)) {
	echo "usuario no valido";
	
}

else {
pagina();

}


?>

	
</body>
</html>