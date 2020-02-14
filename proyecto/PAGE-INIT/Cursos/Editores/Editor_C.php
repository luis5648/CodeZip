<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>C & Cpp editor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
        div.enviar-recibir{
            text-align: center;
            width: auto;
            height: auto;
            margin-top: 0.5%;
        }
        .enum{
            background-color: black;
            position: absolute;
            bottom: 0;
            left: 0;
            width: 99.5%;
            height: 80%;
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

$gen = "SELECT * FROM problemas WHERE idProblema = '$iteradorProblemas' and lenguaje = '2'";
$resp = $conn->query($gen);
$rowen = $resp->fetch_assoc();



?>
<!-- Prueba para escribir archivos con php -->
<?php
/*$nombreArchivo = $_POST['archNam'];
    $ar =fopen($nombreArchivo,"a")
    or die("no se pudo crear el archivo");

    fwrite(ar,$_POST['TAedit']);
    fclose(ar);
*/


?>


<form style="display: inline" action="../../../Control(php_files)/subirProblemas.php" method="post" enctype="multipart/form-data">
    <input class="btn btn-secondary" type="file" name="archivo">
    <button class="btn btn-secondary">subir codigo</button>



    <div style="display: inline; padding-left: 5%">
        <label for="theme">tema del editor</label>
        <select name="EditorColor" id="theme" >
            <option value="monokai">Monokai</option>
            <option value="eclipse">Eclipse-syntaxis</option>
            <option value="solarized_dark">Solarized Dark</option>
            <option value="solarized_light">Solarized Light</option>

        </select>
    </div>

    <div id="editor" ><textarea name="TAedit" id="TA_txt">//Escribe tu código de c o c++ aqui!

        </textarea>
    </div>

</form>

<form action=""  method="post">

            <div class="problema">
              <input type="hidden" name="conta" value="<?=$iteradorProblemas ?>">
                <textArea readonly cols="20" rows="10" class="enum" name="prob">Problema: <?php echo $iteradorProblemas;?> <?php echo $rowen['enunciado']; ?> </textArea>
                <div class="enviar-recibir">

                    <button class="siguiente btn btn-primary" type="submit" name="sig">Siguiente problema</button>
                     <a class="btn btn-primary" href="#" id="link" download="contenido.c">Descargar el contenido del textarea</a>
                </div>
            </div>

        </form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.2/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
    var color = document.querySelector('#theme');
    var itemColor = color.options[color.selectedIndex].text;
    var editor = ace.edit("editor");
//    editor.setTheme("ace/theme/monokai");
    editor.session.setMode("ace/mode/c_cpp");

    color.addEventListener('change',(e)=>{

        editor.setTheme(`ace/theme/${e.target.value}`);

    });

    //bajar lo del textarea
    var txt = document.querySelector('#editor');
    document.getElementById('link').onclick = function(code) {
        this.href = 'data:text/none;charset=utf-8,'
            + encodeURIComponent(txt.innerText);
    };
</script>
</body>
</html>
