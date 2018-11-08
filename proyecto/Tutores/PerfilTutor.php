<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>PANEL TUTORES</title>
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
      <li class="gnav4">MATERIAL</li>
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
    <p>This is tab two.</p>
  </section>
</article>
<article id="page3">
  <section>
    <h1>Proyectos disponibles</h1>
    <p>This is tab three.</p>
  </section>
</article>
<article id="page4">
  <section>
    <h1>Material, videos, PDF's</h1>
    <p>This is tab four.</p>
  </section>
</article>
<article id="page5">
  <section>
    <h1>Tab5 Title</h1>
    <p>This is tab five</p>
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
