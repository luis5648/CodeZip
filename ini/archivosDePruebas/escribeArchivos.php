<?php

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">



        <input type="submit">
    </form>
    <textarea id="txt">dddd</textarea>
    <a href="#" id="link" download="contenido.c">Descargar el contenido del textarea</a>

    <script>
            var txt = document.getElementById('txt');
            document.getElementById('link').onclick = function() {
                this.href = 'data:text/none;charset=utf-8,'
                    + encodeURIComponent(txt.value);
            };
    </script>
</body>
</html>
