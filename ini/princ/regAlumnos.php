<?php
require 'conexion.php';

require 'Seguridad.php';
$seguridad = new Seguridad();

if ($seguridad->getUsuario() == null) {
    header('Location: ../../index.html');
    exit;
}




function verificar_email($email)
{
  if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@(alumnos.udg.mx)+$/",$email))

  {
    return true;
  }
  return false;
}


if (isset($_POST['registroAl'])) {
  $usuario = $_POST['newNombreRegistro'];
  $apellidos = $_POST['newApellidoRegistro'];
  $nickName = $_POST['newNickName'];
  $eMail = $_POST['newMailRegistro'];
  $pass = $_POST['newPaswwordRegistro'];

  if (empty($usuario) | empty($pass) |empty($nickName) | empty($apellidos) | empty($eMail)){
    echo '<script type="text/javascript">alert("Ha dejado un campo vacío!");
    location.href="../../index.html";</script>';
  
  	exit();
  	}
    $comprob = "SELECT * from alumnos  where nombreUsuario = '$nickName'";
    $result = $conn->query($comprob);


    if ($result->num_rows > 0)
    		{
        echo '<script type="text/javascript">alert("Usuario existente!");
        location.href="../../index.html";</script>';
      
        exit();
    		}else{
          if (verificar_email($eMail)) {
            $insertUser = "INSERT INTO alumnos (nombreAlumno,apellidosAlumno,nombreUsuario,passAlumno,emailAlumno) VALUES ('$usuario','$apellidos','$nickName','$pass','$eMail')";
            if ($conn->query($insertUser) === TRUE) {
              echo '<script type="text/javascript">alert("Usuario registrado con éxito");
                location.href="../../index.html";</script>';

              exit();
            }
            else {
                    echo "Error: " . $insertUser . "<br>" . $conn->error;
                }
          }else {
            echo '<script type="text/javascript">alert("El correo insertado no pertenece a UDG!");
            location.href="../../index.html";</script>';
          }

    		}
    }

?>
