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

			<div id="P01">
				<header id="js-header">
				<img src="../PIC/01code.jpeg" alt="" class="img-Logo">	
				<h1 id="logo">CODE.zip</h1>	
			</div>
		</header>
</div>	


<form action="../Control(php_files)/cerrar.php">
     <button type="submit" class="exit"name="botonSalir1">SALIR</button>
    </form>
<div class="tab">
  <button class="tablinks" id="T01" onclick="abrirContenido(event, 'perfilUsuario')">Perfil</button>
  <button class="tablinks" id="T02" onclick="abrirContenido(event, 'cursosUsuario')">Cursos</button>
  <button class="tablinks" id="T03" onclick="abrirContenido(event, 'material')">Material</button>
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
								<p>Curso actual :									</p>
								<!--	PONER QUERY DE CURSO ACTUAL (SI LO HAY) -->
							</div>  
					</div>



					<div id="cursosUsuario" class="tabcontent" >
						<div class="container">
						<h3>Cursos disponibles</h3>

			

						<p>
						<img src="../PIC/icon-C-code.png" alt="Icon" style="float:left;width:33px;height:33px;">
						<a href="../PAGE-INIT/Cursos/C.html" target="_blank">Curso de C</a>
						</p>
						
						<p>
						<img src="../PIC/icon-C++-code.png" alt="Icon" style="float:left;width:33px;height:33px;">
						<a href="../PAGE-INIT/Cursos/C++.html" target="_blank">Curso de C++</a>
						</p>
						<p>
						<img src="../PIC/icon-Java-code.png" alt="Icon" style="float:left;width:30px;height:30px;target="_blank"">
						<a href="../PAGE-INIT/Cursos/Java-basico.html" target="_blank">Curso de Java [nivel básico]</a>
						</p>
						<p>
						<img src="../PIC/icon-Java-code.png" alt="Icon" style="float:left;width:30px;height:30px;target="_blank"">
						<a href="../PAGE-INIT/Cursos/Java-medio.html"target="_blank" >Curso de Java [nivel medio]</a>
						</p>
						<p>
						<img src="../PIC/icon-Java-code.png" alt="Icon" style="float:left;width:30px;height:30px;target="_blank"">
						<a href="../PAGE-INIT/Cursos/Java-complejo.html" target="_blank">Curso de Java [nivel complejo]</a>
						</p>

					
						
					
						</div>
					</div>



					<div id="material" class="tabcontent">




					<div id="mySidenav" class="sidenav">
					<a href="javascript:void(0)" class="closebtn" onclick="closeNav()"> CERRAR &times;</a>
					<a href="#P01" onclick="closeNav()">Inicio [Material]</a>
					<a href="#dataC" onclick="closeNav()">Archivos de C</a>
					<a href="#dataC++" onclick="closeNav()">Archivos de C++</a>
					<a href="#dataJava1" onclick="closeNav()">Archivos de Java [Parte 1]</a>
					<a href="#dataJava2" onclick="closeNav()">Archivos de Java [Parte 2]</a>
					<a href="#dataJava3" onclick="closeNav()">Archivos de Java [Parte 3]</a>
					<a href="#dataJava4" onclick="closeNav()">Archivos de Java [Parte 4]</a>
					<a href="#dataJava5" onclick="closeNav()">Archivos de Java [Parte 5]</a>
					<a href="#dataJava6" onclick="closeNav()">Archivos de Java [Parte 6]</a>
					<a href="#dataJava7" onclick="closeNav()">Archivos de Java [Parte 7]</a>
					<a href="#dataJava8" onclick="closeNav()">Archivos de Java [Parte 8]</a>
					<a href="#dataJava9a" onclick="closeNav()">Archivos de Java [Parte 9] (DOCX I)</a>
					<a href="#dataJava9b" onclick="closeNav()">Archivos de Java [Parte 9] (DOCX II)</a>
					<a href="#dataJava9c" onclick="closeNav()">Archivos de Java [Parte 9] (DOCX III)</a>
					</div>








						
						<div class="container">
						<span  class="spanBtn"style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menú explorador</span>
						<h3>Material academico disponible</h3>
						<p>Actualmente se cuenta con una colección de libros/PDF's (LINKS) virtuales
						 con fines academicos no lucrativos ni con fines de reproducción, copia
						 o cualquier otra manipulación que manipule las obras.</p>
						<br>
						
						<h3 id="dataC">Archivos de C</h3>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!ooti0SgY" target="_blank">Lenguaje C</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!F0lT1CIS"target="_blank">Programación C</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!U8MWxCQQ"target="_blank">Programación gráfica en C</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!V4t10CxZ?BsFmQTgZ" target="_blank">Iniciando al lenguaje C</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!V4t10CxZ?0o8HwAYT" target="_blank">Curso de lenguaje en C</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!V4t10CxZ?t88kjbhJ" target="_blank">Introducción a la programación en C</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!V4t10CxZ?tw8k3bpB" target="_blank">Lenguaje de programación C</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!V4t10CxZ?dst3XLgC" target="_blank">Programación C</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!V4t10CxZ?Y402kLZK" target="_blank">Tutorial en C</a>
						</p>
						<br>



						<h3 id="dataC++">Archivos de C++</h3>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!llE2wTSY" target="_blank">Como programar en C++, [9na Edi. Deitel]</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!RsszDDIY?xl0iwTyJ" target="_blank">Programación C y C++</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!RsszDDIY?EocTULbT" target="_blank">Aprenda C++</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!RsszDDIY?I5kBWITZ" target="_blank">Apuntes en C++</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!RsszDDIY?ppN0TYCQ" target="_blank">Curso de C++</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!RsszDDIY?9l0BxKDC" target="_blank">El lenguaje C++</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!RsszDDIY?UtUWXaRb" target="_blank">La cara oculta de C++</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!RsszDDIY?d5EFQYqL" target="_blank">Manual básico de C++</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!RsszDDIY?MklFnZaa" target="_blank">Programación en C++</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!RsszDDIY?Q1001SwA" target="_blank">Programación Win API con C++</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!RsszDDIY?V1dwlBaJ" target="_blank">Programación Orientada a Objetos en C++</a>
						</p>
						<br>
						

						<h3 id="dataJava1">Archivos de Java</h3>
						
						
						<ul type="list-style-type:disc">
						<li class="part" >Parte 1</li> <!-- PARTE 1 DE LIBROS-->
						
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Q48FxRBS" target="_blank">Como programar en Java, [9na Edi. Deitel]</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!ptlW3CzR?4k1XGCZL" target="_blank">Como programar en Java, [7ma Edi. Deitel]</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!ptlW3CzR?shUSQD4Z" target="_blank">Aprendiendo Java</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!ptlW3CzR?091gCJAR" target="_blank">Pensando la computación [con Java]</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!ptlW3CzR?xtERyJQI" target="_blank">Introducción Java</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!ptlW3CzR?VsNzVIib" target="_blank">Java EE</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!ptlW3CzR?4gNH3AwJ" target="_blank">Desarrollo de proyectos con Java</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!g4dHjDqZ?8t8TyRDQ" target="_blank">Piensa en Java, [2da Edi. Pretince Hall]</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?8wtE3RAK" target="_blank">La biblia de Java </a>
						</p>


						<li class="part" id="dataJava2">Parte 2</li> <!-- PARTE 2 DE LIBROS-->
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!IkUBTQrC?kgcFzIyD" target="_blank">Programación Andriod con Java</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!FtVWQJxS?MkshhIwZ" target="_blank">Java NET y Java Chat</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?gk1nVTAR" target="_blank">Introducción a programación Java I</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?1w1k1K5a" target="_blank">Introducción a programación Java II</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?Vs9ymAzY" target="_blank">Introducción a programación Java III</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?V18UFQAa" target="_blank">Aprenda Java como si estuviera en 1ro. [año: 1999]</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?5pET0DaY" target="_blank">Aprenda Java como si estuviera en 1ro.[año: 2000]</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?EwUwkZ4D" target="_blank">Aprendiendo Java Y Programación orientada a objetos</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?s9s2ibJT" target="_blank">Desarrollo de aplicaciones con Java</a>
						</p>


						<li class="part" id="dataJava3">Parte 3</li> <!-- PARTE 3 DE LIBROS-->
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?QgFnmASR" target="_blank">Aprenda Servlets de Java</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?swcSyAiQ" target="_blank">Tutoriales android programming [Java]</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?BxFzERgR" target="_blank">Aplicaciones avanzadas con Java</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?EtkVTaxb" target="_blank">Estructuras de datos con Java</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?FkkmjB6b" target="_blank">Introducción a la POO , Java</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?toNVkZRI" target="_blank">Introduction to Web Services with Java</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?VlE2RT6C" target="_blank">Manual de Java</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?1t82mAgb" target="_blank">Piensa en Java, [2da Ed. Prentice Hall]</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?JlsAlAKb" target="_blank">Programacion avanzada en Java</a>
						</p>


						<li class="part" id="dataJava4">Parte 4</li> <!-- PARTE 4 DE LIBROS-->
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?Yp8yCDIA" target="_blank">Programación multihebra en Java</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?phMS3D5Z" target="_blank">Flujos de entrada y salida, Java</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?I5V3nYhL" target="_blank">Desarrollo de aplicaciones con Java</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?Z5MCXIQA" target="_blank">Java desde cero</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?cp02AZ4K" target="_blank">Java para todos</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?QgNxHBSR" target="_blank">Jerarquia de errores y excepciones</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?Qk1yDaRT" target="_blank">Programación de juegos para celulares[Java]</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?xpcDELgZ" target="_blank">Java Servlets para todos</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?N4kynTSR" target="_blank">Clases abstractas [Java]</a>
						</p>
						<br><br>

						<li class="part" id="dataJava5">Parte 5</li> <!-- PARTE 5 DE LIBROS-->
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jp1XgDbB?NwsyibbT" target="_blank">Como empezar a programar en Java</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jp1XgDbB?tlkDgZoI" target="_blank">Desarrollo de aplicaciones Web con JSP y XML</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jp1XgDbB?B0sxnAzD" target="_blank">Java 2D</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jp1XgDbB?9xdjXSCZ" target="_blank">Guia de iniciación en Java</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jp1XgDbB?d0lkhKwC" target="_blank">Java 3D</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jp1XgDbB?0sFAzRZR" target="_blank">Java Básico I</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jp1XgDbB?IsUV1ABC" target="_blank">Java Básico II</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jp1XgDbB?R4slAQIS" target="_blank">Java Básico III</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jp1XgDbB?151BzRBD" target="_blank">Java Gamming</a>
						</p>
						<br><br>



						<li class="part" id="dataJava6">Parte 6 [Java y estructuras de datos]</li> <!-- PARTE 6 DE LIBROS-->
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!sxUDVZYA?p11TXQgS" target="_blank">Unidad I [antecedentes]</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!sxUDVZYA?RhEyhYiD" target="_blank">Unidad II [arreglos]</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!sxUDVZYA?9odmhajS" target="_blank">Unidad III [listas]</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!sxUDVZYA?Ql0EFJLS" target="_blank">Unidad IV y V [pilas y colas]</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!sxUDVZYA?s49j1TDT" target="_blank">Unidad VI [arboles]</a>
						</p>
						
						<br><br>


						<li class="part" id="dataJava7">Parte 7 [Java Illuminated]</li> <!-- PARTE 7 DE LIBROS-->
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jl9VjbCB?4plD0JSC" target="_blank">Unidad I</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jl9VjbCB?IpFBFDrY" target="_blank">Unidad II</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jl9VjbCB?EsU2mD5S" target="_blank">Unidad III</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jl9VjbCB?09tnmDaJ" target="_blank">Unidad IV</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jl9VjbCB?4lskzB4J" target="_blank">Unidad V</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jl9VjbCB?NhEAEAzC" target="_blank">Unidad VI</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jl9VjbCB?51lmUI4a" target="_blank">Unidad VII</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jl9VjbCB?Btcg1DAA" target="_blank">Unidad IX</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jl9VjbCB?QhMl1A6S" target="_blank">Unidad X</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jl9VjbCB?IgFQUIAZ" target="_blank">Unidad XI</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jl9VjbCB?A1NGCShL" target="_blank">Unidad XII</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jl9VjbCB?J11zBDzD" target="_blank">Unidad XIII</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jl9VjbCB?09NkWQIY" target="_blank">Unidad XIV</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jl9VjbCB?Yt8lHLpC" target="_blank">Unidad XV</a>
						</p>
					
						
						<br><br>




						<li class="part" id="dataJava8">Parte 8 [Java con Neatbeans]</li> <!-- PARTE 8 DE LIBROS-->
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!UwN0AC7I?Ax8jFLqC" target="_blank">Tema 1 - POO</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!UwN0AC7I?94kHgLbA" target="_blank">Tema 2 - Tipos de datos y expresiones</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!UwN0AC7I?lwcHCYZQ" target="_blank">Tema 3 - Sentencias de control</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!UwN0AC7I?sgcxCJzI" target="_blank">Tema 4 - Excepciones</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!UwN0AC7I?JhFBQKDT" target="_blank">Tema 5 - Arreglos y cadenas</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!UwN0AC7I?x8sgmS4S" target="_blank">Tema 6 - Colecciones</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!UwN0AC7I?910xWRCJ" target="_blank">Tema 7 - GUI, SWING y Java Beans</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!UwN0AC7I?okdlRSqJ" target="_blank">Tema 8 - Entrada y salida</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!UwN0AC7I?UkVDSJYC" target="_blank">Tema 9 - Aplicaciones de dos capas</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!UwN0AC7I?lwsA2abT" target="_blank">Tema 10 - Pruebas unitarias</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!UwN0AC7I?V9FiBaRL" target="_blank">Tema 11 - Expresiones regulares</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!UwN0AC7I?Rs1RSZqY" target="_blank">Tema 12 - Hilos</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!UwN0AC7I?Rt0HEIRL" target="_blank">Tema 13 - Gráficas</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!UwN0AC7I?Vp1kzBaI" target="_blank">Tema 14 - Imagenes</a>
						</p>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!UwN0AC7I?0kdHDYoL" target="_blank">Tema 15 - Acceso a DB con JPA</a>
						</p>
						<br><br>




						<li class="part" id="dataJava9a">Parte 9 [secciones DOCX]</li></ul>
						<ul style="list-style-type:none">
						<li class="partDoc">Sección DOCX I</li>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?k4FnVDQb" target="_blank">Clases y metodos finales [Java]</a>
						</p>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?8gNGHIpJ" target="_blank">Polimorfismo y enlace dinamico [Java]</a>
						</p>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?xwFw0bgL" target="_blank">Clases y objetos [Java]</a>
						</p>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?wlNV3TDa" target="_blank">Tecnología de almacenamiento de colecciones [Java]</a>
						</p>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?B91CSSxT" target="_blank">Colecciones [Java]</a>
						</p>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?g81gmKCC" target="_blank">Clase Array List [Java]</a>
						</p>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?4otgxQrI" target="_blank">Trabajando con mapas [Java]</a>
						</p>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?x01H3bhL" target="_blank">Clase HashMap [Java]</a>
						</p>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?FhUUUIQK" target="_blank">Iteración sobre colecciones [Java]</a>
						</p>
						
						<li class="partDoc" id="dataJava9b">Sección DOCX II</li>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?o8lixKgT" target="_blank">TIpos ENUM [Java]</a>
						</p>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?V8dXERBb" target="_blank">Operador InstanceOf [Java]</a>
						</p>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?B5UTRLRD" target="_blank">Clases genéricas [Java]</a>
						</p>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?dhdhCJAY" target="_blank">Hashing [Java]</a>
						</p>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?M4USkSwa" target="_blank">Archivos [Java]</a>
						</p>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?RxFDXRrQ" target="_blank">Interface clonable [Java]</a>
						</p>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?8xknTCLD" target="_blank">GUI Interfaz gráfica [Java]</a>
						</p>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?gkd3GJiA" target="_blank">Contenedores AWT [Java]</a>
						</p>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?EpcQybZC" target="_blank">Componentes AWT [Java]</a>
						</p>

					<li class="partDoc" id="dataJava9c">Sección DOCX III</li>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?Q18ykLTb" target="_blank">AWT Menú [Java]</a>
						</p>
						<p>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?IllS0YjD" target="_blank">De AWT a Swing[Java]</a>
						</p>
						<p>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?4p8TmQTQ" target="_blank">Gestores de diseño [Java]</a>
						</p>
						<p>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?Noklma4Q" target="_blank">Manejo de eventos [Java]</a>
						</p>
						<p>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?04szUYgZ" target="_blank">Metodo Main [Java]</a>
						</p>
						</ul>
												
						</div>						
					</div>

	</div> <!--DIV CONTENT -->

</div><!-- DIV MAIN-->


<footer>
	<div class="container clearfix">
		<div class ="col" id="col-1">
						<ul>
						<li>CODE.zip</li>
						<li><a href="javascript:IraHome();">Home</a></li>

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
						<li><a href="javascript:clickPerfilUser();">Perfil</a></li>
						<li><a href="javascript:clickCurso();">Cursos</a></li>
						<li><a href="javascript:clickMaterial();">Material</a></li>
						
					</ul>
		</div>
			<div id="copy">&#xa9; Universidad de Guadalajara, Centro Universitario de Tonalá <a href=""> ICCO</a>, Noviembre 2018</div>
	</div>
</footer>


</div>
</body>
</html>