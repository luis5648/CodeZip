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



            <div class="problema">
                <!-- here goes the ajax -->
                <textArea readonly cols="20" rows="10" class="enum" name="prob" id="prob"></textArea>
                <div class="enviar-recibir">

                    <button class="siguiente btn btn-primary" type="submit" name="sig" id="sig">Siguiente problema</button>
                     <a class="btn btn-primary" href="#" id="link" download="codigo.c">Descargar código</a>
                </div>
            </div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.2/ace.js" type="text/javascript" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="management/ed_c.js"></script>
</body>
</html>
