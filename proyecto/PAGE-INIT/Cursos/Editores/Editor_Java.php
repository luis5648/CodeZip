<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Java editor</title>
    <style type="text/css" media="screen">
        #editor {
            position: absolute;
            top: 10%;
            right: 0;
            bottom: 40%;
            left: 0;
            font-size: 14pt;
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
    $iteradorProblemas = $_POST["conta"]+1;
}else {
    $iteradorProblemas =1;
}

$gen = "SELECT * FROM problemas WHERE idProblema = '$iteradorProblemas' and lenguaje = '1'";
$resp = $conn->query($gen);
$rowen = $resp->fetch_assoc();



?>


<form action="../../../Control(php_files)/subirProblemas.php" method="post" enctype="multipart/form-data">
    <input type="file" name="archivo">
    <button>subir codigo</button>
    <div id="editor" ><textarea name="TAedit">//Escribe tu código de Java aqui!

        </textarea>
    </div>

</form>



<form action=""  method="post">





    <div class="problema">
        <input type="hidden" name="conta" value="<?=$iteradorProblemas ?>">
        <textArea readonly cols="20" rows="10" class="enum" name="prob">Problema: <?php echo $rowen['enunciado']; ?> </textArea>
        <div class="enviar-recivir">

            <button class="siguiente" type="submit" name="sig">Siguiente problema</button>
        </div>
    </div>
</form>




<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.2/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/eclipse");
    editor.session.setMode("ace/mode/java");
</script>
</body>
</html>
