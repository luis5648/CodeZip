<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../CSS/style-AboutUs.css">
<script type="text/javascript" src="../JS/js-AboutUs.js"></script>
<body>




	<div id="wrapper">
		<header id="js-header">
			<div class="container clearfix">
				<h1 id="logo">CODE.zip</h1>
				<nav>
					<a href="home.html">Inicio</a>
					<a href="Cursos/MainCursos.html">Cursos</a>
					<a href="#HOME">Acerca de</a>
				</nav>
			</div>
		</header>


		<br><br><br>
		<div id="main">
			<div id="content">
					<div class="container">
					<h1>Perfil de Usuario</h1>
					<div align="left"><img src="profilePicture.png" width="100" height="100"></div>
                        <?php
                        require 'conexion.php';
                        session_start();

                        $user = $_SESSION['usuario'];
                        $sql = "SELECT nombreAlumno,emailAlumno,apellidosAlumno
                        from alumnos  where nombreUsuario = '$user'";

                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        ?>

                        <p>Nombre del alumno: <?php echo $row["nombreAlumno"];?>  </p>

					    <br>

                        <p>E-mail registrado: <?php echo $row["emailAlumno"];?> </p>

					    <br>

					    <p>Apellidos: <?php echo $row["apellidosAlumno"];?>  </p>

					    <br>
					    <br>
					</div>
			</div>
		</div>
		<footer>
			<div class="container clearfix">
				<div class ="col" id="col-1">
					<ul>
						<li>CODE.zip/Route</li>
						<li><a href="home.html">Home</a></li>

						<li><a href="javascript:mensajeContact();">Contacto</a></li>
					</ul>
				</div>
				<div  class ="col" id="col-2">
					<ul>
						<li>SOCIAL</li>
						<li><a href="https://www.facebook.com/profile.php?id=100012609097340">Facebook</a></li>
						<li><a href="javascript:mensajeTwitt();">Twitter</a></li>
						<li><a href="#0">Youtube</a></li>
					</ul>
				</div>
				<div  class ="col" id="col-3">
					<ul>
						<li>SERVICIOS</li>
						<li><a href="javascript:mensajeEmergente();">Ejemplos</a></li>
						<li><a href="javascript:mensajeEmergente();">Tutores</a></li>
						<li><a href="javascript:mensajeEmergente();">Problemas</a></li>
						<li><a href="javascript:mensajeEmergente();">Proyectos</a></li>
					</ul>
				</div>
				<div id="copy">&#xa9; Universidad de Guadalajara, Centro Universitario de Tonalá <a href=""> ICCO</a>, Noviembre 2018</div>
			</div>
		</footer>
	</div>
</body>
</html>