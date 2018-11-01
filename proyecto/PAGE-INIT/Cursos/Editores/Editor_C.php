<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>C & Cpp editor</title>
    <style type="text/css" media="screen">
        #editor {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 40%;
            left: 0;
            font-size: 16px;
        }
        div.problema{
            background-color: black;
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 40%;
            color: white;
        }
        div.enviar-recivir{
            text-align: center;
            width: auto;
            height: auto;
        }
        .enum{
            background-color: black;
            position: absolute;
            bottom: 0;
            left: 0;
            width: 99.5%;
            height: auto;
            color: white;
            resize: none;
            font-size: 16px;

        }
    </style>
    <meta charset="utf-8">
</head>
<body>

<?php
 require '../../../Control(php_files)/conexion.php';
//generar problemas:

$iteradorProblemas =1;
if (isset($_POST['sig'])){
    $iteradorProblemas++;
}

$gen = "SELECT enunciado FROM problemas WHERE idProblema = '$iteradorProblemas'";
$resp = $conn->query($gen);
$rowen = $resp->fetch_assoc();

 if (isset($_POST['enviar'])){
     $enunciado = $_POST['edit'];


 }


?>
<form action="" method="post">
    <div id="editor" name="edit">//Escribe tu código de c o c++ aqui!
    </div>



            <div class="problema">
                <textArea readonly cols="20" rows="10" class="enum" name="prob">Problema: <?php echo $rowen['enunciado']?> </textArea>
                <div class="enviar-recivir">
                    <button class="enviar" type="submit" name="enviar">Enviar solución!</button>
                    <button class="siguiente" type="submit" name="sig">Siguiente problema</button>
                </div>
            </div>
        </form>




<script src="ace-builds/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.session.setMode("ace/mode/c_cpp");
</script>
</body>
</html>