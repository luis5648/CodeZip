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
                     <a class="btn btn-primary" href="#" id="link" download="contenido.c">Descargar código</a>
                </div>
            </div>

        </form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.2/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
    /*
    var color = document.querySelector('#theme');
    var itemColor = color.options[color.selectedIndex].value;
    var editor = ace.edit("editor");
    editor.session.setMode("ace/mode/c_cpp");

    //evento para cargar el tema al inicio de la página
   window.addEventListener('load',()=>{

       editor.setTheme(`ace/theme/${itemColor}`);
   });


    //evento para cambiar el tema según la selección
    color.addEventListener('change',(e)=>{

        editor.setTheme(`ace/theme/${e.target.value}`);

    });

    //bajar lo del textarea


    var txt = document.querySelector('#editor');
    document.getElementById('link').onclick = function(code) {
        this.href = 'data:text/none;charset=utf-8,'
            + encodeURIComponent(txt.innerText.substr(txt.innerText.indexOf("//Escribe tu código de c o c++ aqui!")));
    };*/

    var _0x6d9e=["\x23\x74\x68\x65\x6D\x65","\x71\x75\x65\x72\x79\x53\x65\x6C\x65\x63\x74\x6F\x72","\x76\x61\x6C\x75\x65","\x73\x65\x6C\x65\x63\x74\x65\x64\x49\x6E\x64\x65\x78","\x6F\x70\x74\x69\x6F\x6E\x73","\x65\x64\x69\x74\x6F\x72","\x65\x64\x69\x74","\x61\x63\x65\x2F\x6D\x6F\x64\x65\x2F\x63\x5F\x63\x70\x70","\x73\x65\x74\x4D\x6F\x64\x65","\x73\x65\x73\x73\x69\x6F\x6E","\x6C\x6F\x61\x64","\x61\x63\x65\x2F\x74\x68\x65\x6D\x65\x2F","","\x73\x65\x74\x54\x68\x65\x6D\x65","\x61\x64\x64\x45\x76\x65\x6E\x74\x4C\x69\x73\x74\x65\x6E\x65\x72","\x63\x68\x61\x6E\x67\x65","\x74\x61\x72\x67\x65\x74","\x23\x65\x64\x69\x74\x6F\x72","\x6F\x6E\x63\x6C\x69\x63\x6B","\x6C\x69\x6E\x6B","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64","\x68\x72\x65\x66","\x64\x61\x74\x61\x3A\x74\x65\x78\x74\x2F\x6E\x6F\x6E\x65\x3B\x63\x68\x61\x72\x73\x65\x74\x3D\x75\x74\x66\x2D\x38\x2C","\x2F\x2F\x45\x73\x63\x72\x69\x62\x65\x20\x74\x75\x20\x63\xF3\x64\x69\x67\x6F\x20\x64\x65\x20\x63\x20\x6F\x20\x63\x2B\x2B\x20\x61\x71\x75\x69\x21","\x69\x6E\x64\x65\x78\x4F\x66","\x69\x6E\x6E\x65\x72\x54\x65\x78\x74","\x73\x75\x62\x73\x74\x72"];var color=document[_0x6d9e[1]](_0x6d9e[0]);var itemColor=color[_0x6d9e[4]][color[_0x6d9e[3]]][_0x6d9e[2]];var editor=ace[_0x6d9e[6]](_0x6d9e[5]);editor[_0x6d9e[9]][_0x6d9e[8]](_0x6d9e[7]);window[_0x6d9e[14]](_0x6d9e[10],()=>{editor[_0x6d9e[13]](`${_0x6d9e[11]}${itemColor}${_0x6d9e[12]}`)});color[_0x6d9e[14]](_0x6d9e[15],(_0x6368x4)=>{editor[_0x6d9e[13]](`${_0x6d9e[11]}${_0x6368x4[_0x6d9e[16]][_0x6d9e[2]]}${_0x6d9e[12]}`)});var txt=document[_0x6d9e[1]](_0x6d9e[17]);document[_0x6d9e[20]](_0x6d9e[19])[_0x6d9e[18]]= function(_0x6368x6){this[_0x6d9e[21]]= _0x6d9e[22]+ encodeURIComponent(txt[_0x6d9e[25]][_0x6d9e[26]](txt[_0x6d9e[25]][_0x6d9e[24]](_0x6d9e[23])))}
</script>
</body>
</html>
