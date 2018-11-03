<!DOCTYPE html>
<html>
<head>
	<title>PERFIL USUARIO</title>
</head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../CSS/style-perfilUser.css">
<script type="text/javascript" src="../JS/js-UserPerfil.js"></script>
<body>

<div id="wrapper">
<br>
	
<div>
		<header id="js-header">
			<div class="container clearfix"><br>
			<img src="../PIC/01code.jpeg" alt="" class="img-Logo">	
			<h1 id="logo">CODE.zip</h1>	
			</div>
		</header>
</div>	

<br><br><br><br>
<form action="../Control(php_files)/cerrar.php">
     <button type="submit" class="exit"name="botonSalir1">SALIR</button>
    </form>
<div class="tab">
  <button class="tablinks" onclick="abrirContenido(event, 'perfilUsuario')">Perfil</button>
  <button class="tablinks" onclick="abrirContenido(event, 'cursosUsuario')">Cursos</button>
  <button class="tablinks" onclick="abrirContenido(event, 'material')">Material</button>
</div>

<br><br>

<div class="main">
	<div class="content">

					<div id="perfilUsuario" class="tabcontent">
							<div class="container">
								<h3>Perfil de usuario</h3>

								<div align="left"><img src="../PIC/user.png" width="100" height="100"></div>
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
								<p>E-mail registrado: <?php echo $row["emailAlumno"];?> </p>
								<p>Apellidos: <?php echo $row["apellidosAlumno"];?>  </p>
							</div>  
					</div>



					<div id="cursosUsuario" class="tabcontent">
						<div class="container">
						<h3>Cursos disponibles</h3>
						</div>
					</div>



					<div id="material" class="tabcontent">
						
						<div class="container">
						<h3>Material academico disponible</h3>
						</div>
					
					</div>

	</div> <!--DIV CONTENT -->

</div><!-- DIV MAIN-->


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