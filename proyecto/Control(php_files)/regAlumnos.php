<?php
require 'conexion.php';


if (isset($_POST['registroAl'])) {
  $usuario = $_POST['newNombreRegistro'];
  $apellidos = $_POST['newApellidoRegistro'];
  $nickName = $_POST['newNickName'];
  $eMail = $_POST['newMailRegistro'];
  $pass = $_POST['newPaswwordRegistro'];

  if (empty($usuario) | empty($pass) |empty($nickName) | empty($apellidos) | empty($eMail)){
    echo '<script type="text/javascript">alert("Ha dejado un campo vacío!")</script>';
  //	header("Location: ../login.html");
  	exit();
  	}
    $comprob = "SELECT * from alumnos  where nombreUsuario = '$nickName'";
    $result = $conn->query($comprob);


    if ($result->num_rows > 0)
    		{
    		echo '<script type="text/javascript">alert("Usuario existente!")</script>';
      //  header("Location: ../login.html");
        exit();
    		}else
    			{
            $insertUser = "INSERT INTO alumnos (nombreAlumno,apellidosAlumno,nombreUsuario,passAlumno,emailAlumno) VALUES ('$usuario','$apellidos','$nickName','$pass','$eMail')";
            if ($conn->query($insertUser) === TRUE) {
              echo '<script type="text/javascript">alert("Usuario registrado con éxito")</script>';
              header("Location: ../login.html");
              exit();
            }
            else {
                    echo "Error: " . $insertUser . "<br>" . $conn->error;
                }
    		}
    }

?>
