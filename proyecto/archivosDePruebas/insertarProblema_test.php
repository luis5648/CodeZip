<?php
if (isset($_POST['enviar'])){
    session_start();

    $solucion = $_REQUEST['TAedit'];
    $probID = $rowen['idProblema'];

    $user = $_SESSION['usuario'];

    $sql1 = "SELECT * FROM alumnos WHERE nombreAlumno = '$user'";
    $r = $conn->query($sql1);
    $alumnoInfo = $r->fetch_assoc();

    $idAlumno = $alumnoInfo['idAlumno'];

    $insertSolc = "INSERT INTO problemasSoluc (idProblema,solucion,idAlumno) VALUES ('$probID','$solucion','$idAlumno') ";

    if ($conn->query($insertSolc) === TRUE) {
        echo '<script type="text/javascript">alert("Solucion enviada para calificar!");
                location.href="../PAGE-INIT/home.html";</script>';

        exit();
    }
    else {
        echo "Error: " . $insertUser . "<br>" . $conn->error;
    }
}


?>