<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>Perfil tutor</title>
	<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel="stylesheet" href="../CSS/style-perfilTutor.css">

	<form action="../Control(php_files)/cerrar.php">
		 <button type="submit" class="exit"name="botonSalir1">SALIR</button>
		</form>
		<br><br><br><br>

</head>

<?php

		require "../Control(php_files)/conexion.php";
		session_start();

		$user = $_SESSION['tutorLog'];
		$sql = "SELECT *
		from tutores  where nombreUsuario = '$user'";

		$result = $conn->query($sql);
		$row = $result->fetch_assoc();

		$especialidad = "SELECT nombreLenguaje from tutores
		inner join cursos on tutores.especialidad = cursos.idCurso
		where tutores.nombreUsuario = '$user'";

		$espRes = $conn->query($especialidad);
		$espFil = $espRes->fetch_assoc();

 ?>
<body>
	<div class="wrapper">
<header>

	<h1>PANEL TUTOR</h1>

</header>


<nav>
		<ul>
			<li class="gnav1">GENERAL</li>
			<li class="gnav2">ALUMNOS</li>
			<li class="gnav3">PROYECTOS</li>
			<li class="gnav4">MATERIAL [ C ]</li>
			<li class="gnav5">MATERIAL [ C++ ]</li>
			<li class="gnav6">MATERIAL [Java 1-2]</li>
			<li class="gnav7">MATERIAL [Java 3-4]</li>
			<li class="gnav8">MATERIAL [Java 5-6]</li>
			<li class="gnav9">MATERIAL [Java 7-8]</li>
			<li class="gnav11">MATERIAL [Secc.DOCX]</li>	
		</ul>
</nav>


<div class="contents" id="contents">
<div class="container">

<article id="page1" class="show top">
	<section>
		<h1>Datos generales</h1>

			<p>Nombre completo: <?php echo $row['nombreTutor'];
			echo " ";
			echo $row['apellidoPaterno'];
			echo " ";
			echo $row['apellidoMaterno'];
			?></p>
			<br><br>
			<p>Especialidad: Lenguaje <?php echo $espFil['nombreLenguaje'] ?></p>

	</section>
</article>


<article id="page2">
	<section>
		<h1>Alumnos en tutoria</h1>
		<h3>Alumnos disponibles: </h3>
		<br><br>

		<?php
			require "../Control(php_files)/vistaDirTutor.php";
			echo obtener_estructura_directorios("../Control(php_files)/Soluciones");

		 ?>
			<hr>
			<br><br><br><br>
		<p>Subir una corrección: </p><br>
			<form action="../Control(php_files)/subirCorreccion.php" method="post" enctype="multipart/form-data">
					<input type="file" name="correccion"><br><br>
					<input type="submit" value="subir...">
			</form>

			<hr>
			<p>instrucciones para subir una corrección: </p> <a href="../Control(php_files)/instrucciones.txt" style="color:cyan" target="_blank">instrucciones.txt</a>
	</section>
</article>


<article id="page3">
	<section>
		<h1>Proyectos disponibles</h1>
		<p>This is tab three.</p>
	</section>
</article>


<article id="page4"> <!-- SECCIÓN MATERIAL C-->
	<section>

 						<ul type="list-style-type:disc">
						<li class="part" >Archivos de C</li><br>
						<br><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!ooti0SgY" target="_blank">Lenguaje C</a>
						</p>
						<br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!F0lT1CIS"target="_blank">Programación C</a>
						</p>
						<br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a  class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!U8MWxCQQ"target="_blank">Programación gráfica en C</a>
						</p>
						<br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;" >
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!V4t10CxZ?BsFmQTgZ" target="_blank">Iniciando al lenguaje C</a>
						</p>
						<br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a  class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!V4t10CxZ?0o8HwAYT" target="_blank">Curso de lenguaje en C</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a  class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!V4t10CxZ?t88kjbhJ" target="_blank">Introducción a la programación en C</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!V4t10CxZ?tw8k3bpB" target="_blank">Lenguaje de programación C</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!V4t10CxZ?dst3XLgC" target="_blank">Programación C</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!V4t10CxZ?Y402kLZK" target="_blank">Tutorial en C</a>
						</p>
						<br>
					</ul>

	</section>
</article>

<article id="page5"> <!-- SECCIÓN MATERIAL C++-->
	<section>
 						<ul type="list-style-type:disc">
 						<li class="part" >Archivos de C++</li><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!llE2wTSY" target="_blank">Como programar en C++, [9na Edi. Deitel]</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!RsszDDIY?xl0iwTyJ" target="_blank">Programación C y C++</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!RsszDDIY?EocTULbT" target="_blank">Aprenda C++</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!RsszDDIY?I5kBWITZ" target="_blank">Apuntes en C++</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!RsszDDIY?ppN0TYCQ" target="_blank">Curso de C++</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!RsszDDIY?9l0BxKDC" target="_blank">El lenguaje C++</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!RsszDDIY?UtUWXaRb" target="_blank">La cara oculta de C++</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!RsszDDIY?d5EFQYqL" target="_blank">Manual básico de C++</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!RsszDDIY?MklFnZaa" target="_blank">Programación en C++</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!RsszDDIY?Q1001SwA" target="_blank">Programación Win API con C++</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!RsszDDIY?V1dwlBaJ" target="_blank">Programación Orientada a Objetos en C++</a>
						</p><br>
						<br>
						</ul>
		

	</section>
</article>

<article id="page6">
<section>
						<ul type="list-style-type:disc">
						<li class="part" >Parte 1</li> <!-- PARTE 1 DE LIBROS-->

						<br><p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Q48FxRBS" target="_blank">Como programar en Java, [9na Edi. Deitel]</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!ptlW3CzR?4k1XGCZL" target="_blank">Como programar en Java, [7ma Edi. Deitel]</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!ptlW3CzR?shUSQD4Z" target="_blank">Aprendiendo Java</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a  class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!ptlW3CzR?091gCJAR" target="_blank">Pensando la computación [con Java]</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!ptlW3CzR?xtERyJQI" target="_blank">Introducción Java</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!ptlW3CzR?VsNzVIib" target="_blank">Java EE</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!ptlW3CzR?4gNH3AwJ" target="_blank">Desarrollo de proyectos con Java</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!g4dHjDqZ?8t8TyRDQ" target="_blank">Piensa en Java, [2da Edi. Pretince Hall]</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?8wtE3RAK" target="_blank">La biblia de Java </a>
						</p><br>




						<li class="part" id="dataJava2">Parte 2</li> <!-- PARTE 2 DE LIBROS-->
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!IkUBTQrC?kgcFzIyD" target="_blank">Programación Andriod con Java</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!FtVWQJxS?MkshhIwZ" target="_blank">Java NET y Java Chat</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?gk1nVTAR" target="_blank">Introducción a programación Java I</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?1w1k1K5a" target="_blank">Introducción a programación Java II</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?Vs9ymAzY" target="_blank">Introducción a programación Java III</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?V18UFQAa" target="_blank">Aprenda Java como si estuviera en 1ro. [año: 1999]</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?5pET0DaY" target="_blank">Aprenda Java como si estuviera en 1ro.[año: 2000]</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?EwUwkZ4D" target="_blank">Aprendiendo Java Y Programación orientada a objetos</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?s9s2ibJT" target="_blank">Desarrollo de aplicaciones con Java</a>
						</p><br>

						</ul>
</section>
</article>

<article id="page7">
<section>
							<ul type="list-style-type:disc">
							<li class="part" id="dataJava3">Parte 3</li> <!-- PARTE 3 DE LIBROS-->
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?QgFnmASR" target="_blank">Aprenda Servlets de Java</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?swcSyAiQ" target="_blank">Tutoriales android programming [Java]</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?BxFzERgR" target="_blank">Aplicaciones avanzadas con Java</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?EtkVTaxb" target="_blank">Estructuras de datos con Java</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?FkkmjB6b" target="_blank">Introducción a la POO , Java</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?toNVkZRI" target="_blank">Introduction to Web Services with Java</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?VlE2RT6C" target="_blank">Manual de Java</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?1t82mAgb" target="_blank">Piensa en Java, [2da Ed. Prentice Hall]</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?JlsAlAKb" target="_blank">Programacion avanzada en Java</a>
						</p><br><br>


						<li class="part" id="dataJava4">Parte 4</li> <!-- PARTE 4 DE LIBROS-->
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?Yp8yCDIA" target="_blank">Programación multihebra en Java</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?phMS3D5Z" target="_blank">Flujos de entrada y salida, Java</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?I5V3nYhL" target="_blank">Desarrollo de aplicaciones con Java</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?Z5MCXIQA" target="_blank">Java desde cero</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?cp02AZ4K" target="_blank">Java para todos</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?QgNxHBSR" target="_blank">Jerarquia de errores y excepciones</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?Qk1yDaRT" target="_blank">Programación de juegos para celulares[Java]</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?xpcDELgZ" target="_blank">Java Servlets para todos</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?N4kynTSR" target="_blank">Clases abstractas [Java]</a>
						</p><br>
						<br><br>

					</ul>

</section>
</article>

<article id="page8">
<section>
						<ul type="list-style-type:disc"> 
						<li class="part" id="dataJava5">Parte 5</li> <!-- PARTE 5 DE LIBROS-->
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jp1XgDbB?NwsyibbT" target="_blank">Como empezar a programar en Java</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jp1XgDbB?tlkDgZoI" target="_blank">Desarrollo de aplicaciones Web con JSP y XML</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jp1XgDbB?B0sxnAzD" target="_blank">Java 2D</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jp1XgDbB?9xdjXSCZ" target="_blank">Guia de iniciación en Java</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jp1XgDbB?d0lkhKwC" target="_blank">Java 3D</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jp1XgDbB?0sFAzRZR" target="_blank">Java Básico I</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jp1XgDbB?IsUV1ABC" target="_blank">Java Básico II</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jp1XgDbB?R4slAQIS" target="_blank">Java Básico III</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jp1XgDbB?151BzRBD" target="_blank">Java Gamming</a>
						</p>
						<br><br>



						<li class="part" id="dataJava6">Parte 6 [Java y estructuras de datos]</li> <!-- PARTE 6 DE LIBROS-->
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!sxUDVZYA?p11TXQgS" target="_blank">Unidad I [antecedentes]</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!sxUDVZYA?RhEyhYiD" target="_blank">Unidad II [arreglos]</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!sxUDVZYA?9odmhajS" target="_blank">Unidad III [listas]</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!sxUDVZYA?Ql0EFJLS" target="_blank">Unidad IV y V [pilas y colas]</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!sxUDVZYA?s49j1TDT" target="_blank">Unidad VI [arboles]</a>
						</p><br>
						
						<br><br>
						</ul>

</section>
</article>



<article id="page9"> <!--SECCIÒN 7-8 PDF's -->
	<section>	
		<p class="title">Parte [7-8]</p>
		<p>Desplege contenido seleccionando un boton :</p><br>

		<button  class="accordion">PARTE 7</button>
		<div class="panel">
  			

		

						<li class="part" id="dataJava7">Parte 7 [Java Illuminated]</li> <!-- PARTE 7 DE LIBROS-->
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jl9VjbCB?4plD0JSC" target="_blank">Unidad I</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jl9VjbCB?IpFBFDrY" target="_blank">Unidad II</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jl9VjbCB?EsU2mD5S" target="_blank">Unidad III</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jl9VjbCB?09tnmDaJ" target="_blank">Unidad IV</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks1" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jl9VjbCB?4lskzB4J" target="_blank">Unidad V</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks1" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jl9VjbCB?NhEAEAzC" target="_blank">Unidad VI</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jl9VjbCB?51lmUI4a" target="_blank">Unidad VII</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a  class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jl9VjbCB?Btcg1DAA" target="_blank">Unidad IX</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks1" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jl9VjbCB?QhMl1A6S" target="_blank">Unidad X</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks1" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jl9VjbCB?IgFQUIAZ" target="_blank">Unidad XI</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jl9VjbCB?A1NGCShL" target="_blank">Unidad XII</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jl9VjbCB?J11zBDzD" target="_blank">Unidad XIII</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jl9VjbCB?09NkWQIY" target="_blank">Unidad XIV</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks1" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!Jl9VjbCB?Yt8lHLpC" target="_blank">Unidad XV</a>
						</p><br>
						<br><br>
											</div> <!-- DIV PARTE DE SECCION 7-->

													<br><br>


							<button class="accordion">PARTE 8</button>
						<div class="panel">
						  
								<li class="part" id="dataJava8">Parte 8 [Java con Neatbeans]</li> <!-- PARTE 8 DE LIBROS-->
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks1" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!UwN0AC7I?Ax8jFLqC" target="_blank">Tema 1 - POO</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!UwN0AC7I?94kHgLbA" target="_blank">Tema 2 - Tipos de datos y expresiones</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks1" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!UwN0AC7I?lwcHCYZQ" target="_blank">Tema 3 - Sentencias de control</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!UwN0AC7I?sgcxCJzI" target="_blank">Tema 4 - Excepciones</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!UwN0AC7I?JhFBQKDT" target="_blank">Tema 5 - Arreglos y cadenas</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!UwN0AC7I?x8sgmS4S" target="_blank">Tema 6 - Colecciones</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!UwN0AC7I?910xWRCJ" target="_blank">Tema 7 - GUI, SWING y Java Beans</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!UwN0AC7I?okdlRSqJ" target="_blank">Tema 8 - Entrada y salida</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks1" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!UwN0AC7I?UkVDSJYC" target="_blank">Tema 9 - Aplicaciones de dos capas</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!UwN0AC7I?lwsA2abT" target="_blank">Tema 10 - Pruebas unitarias</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!UwN0AC7I?V9FiBaRL" target="_blank">Tema 11 - Expresiones regulares</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!UwN0AC7I?Rs1RSZqY" target="_blank">Tema 12 - Hilos</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!UwN0AC7I?Rt0HEIRL" target="_blank">Tema 13 - Gráficas</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks1" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!UwN0AC7I?Vp1kzBaI" target="_blank">Tema 14 - Imagenes</a>
						</p><br>
						<p>
						<img src="../PIC/icon-PDF.png" alt="Icon" style="float:left;width:30px;height:30px;">
						<a class="Clinks1" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!UwN0AC7I?0kdHDYoL" target="_blank">Tema 15 - Acceso a DB con JPA</a>
						</p><br>
						<br><br>


						</div> <!-- DIV PARTE DE SECCION 8-->
		
	</section>
</article>

<article id="page10"> <!--SECCIÒN DOCX -->
	<section>
		<p class="title">Parte 9 [Sección DOCX]</p>
		<p>Desplege contenido seleccionando un boton :</p><br>

<button class="accordion">Sección DOCX I</button>
<div class="panel">
					
  						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?k4FnVDQb" target="_blank">Clases y metodos finales [Java]</a>
						</p><br><br>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?8gNGHIpJ" target="_blank">Polimorfismo y enlace dinamico [Java]</a>
						</p><br><br>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?xwFw0bgL" target="_blank">Clases y objetos [Java]</a>
						</p><br><br>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?wlNV3TDa" target="_blank">Tecnología de almacenamiento de colecciones [Java]</a>
						</p><br><br>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?B91CSSxT" target="_blank">Colecciones [Java]</a>
						</p><br><br>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?g81gmKCC" target="_blank">Clase Array List [Java]</a>
						</p><br><br>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?4otgxQrI" target="_blank">Trabajando con mapas [Java]</a>
						</p><br><br>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a class="Clinks1" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?x01H3bhL" target="_blank">Clase HashMap [Java]</a>
						</p><br><br>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?FhUUUIQK" target="_blank">Iteración sobre colecciones [Java]</a>
						</p><br>

					
						


</div>
<br><br>
<button class="accordion">Sección DOCX II</button>
<div class="panel">
  <p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?o8lixKgT" target="_blank">TIpos ENUM [Java]</a>
						</p><br><br>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?V8dXERBb" target="_blank">Operador InstanceOf [Java]</a>
						</p><br><br>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?B5UTRLRD" target="_blank">Clases genéricas [Java]</a>
						</p><br><br>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?dhdhCJAY" target="_blank">Hashing [Java]</a>
						</p><br><br>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a class="Clinks1" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?M4USkSwa" target="_blank">Archivos [Java]</a>
						</p><br><br>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?RxFDXRrQ" target="_blank">Interface clonable [Java]</a>
						</p><br><br>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a class="Clinks1" href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?8xknTCLD" target="_blank">GUI Interfaz gráfica [Java]</a>
						</p><br><br>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?gkd3GJiA" target="_blank">Contenedores AWT [Java]</a>
						</p><br><br>
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?EpcQybZC" target="_blank">Componentes AWT [Java]</a>
						</p><br><br>

</div>
<br><br>

<button class="accordion">Sección DOCX III</button>
<div class="panel">
 							<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?Q18ykLTb" target="_blank">AWT Menú [Java]</a>
						</p><br><br>
						
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?IllS0YjD" target="_blank">De AWT a Swing[Java]</a>
						</p><br><br>
						
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?4p8TmQTQ" target="_blank">Gestores de diseño [Java]</a>
						</p><br><br>
						
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?Noklma4Q" target="_blank">Manejo de eventos [Java]</a>
						</p><br><br>
						
						<p>
							<img src="../PIC/icon-DOCX.png" alt="Icon2"style="float:left;width:33px;height:33px;" >
							<a class="Clinks1"href="https://mega.nz/#F!c9dRwY6I!tfgvONOPDljfK68MuQs5Wg!w8lwjSjB?04szUYgZ" target="_blank">Metodo Main [Java]</a>
						</p><br><br>

</div>


	</section>
</article>







</div>
</div>
</div>
	<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js'></script>

		<script src="../JS/js-AdminPanel.js"></script>

</body>

</html>
