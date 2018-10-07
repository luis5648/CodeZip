<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BIENVENIDOS</title>
	<!DOCTYPE html>


</head>
<body>




<h1 id="h01">BIENVENIDOS A NUESTRO CURSO DE PROGRAMACION</h1>
<ul class="menu">
<li><a href="#Java"> Curso de Java</a> </li>
<li><a href="#C">Curso de C </a></li>
<li><a href="#C++">Curso de C++</a></li>
</ul>

<p>
Este espacio esta hecho para que ustedes puedan aprender bastantes tipos de 
leguajes ya sea Java c y c++ espero les guste la idea y participen 

</p>



<p id="java">
	hoy les mostraremos una parte muy escensial sobre Java 
	una de las herramientas mas importante el</p> <br>
  <p>Favor de subir su archivo para ser revisado aqui </p>

<form action="pagina.php" method="post" enctype="multipart/form-data">
<label for="file">filename</label>
<input type="file" name="file" id="file">
<input type="submit" name="submit" value="submit">
</form>
<?php
$allowedExts=array("txt","zip");
$extension = end(explode(".",$_FILES["file"]["name"]));
if($_FILES["file"]["size"]<2000480000000 and in_array($extension,$allowedExts)) {

if($_FILES["file"]["error"]>0){
echo "error:".$_FILES["file"]["error"]."<br/>";
}

else{
if (file_exists("Java/".$_FILES["file"]["name"])) {
	

}
else{
$tmp=$_FILES["file"]["tmp_name"];
$dir="Java/".$_FILES["file"]["name"];
move_uploaded_file($tmp,$dir);

}




}}

else{echo "archivo invalido";}
?>



<br><br><br><br><br>


<p id="C">
	hoy les mostraremos una parte muy escensial sobre C
	una de las herramientas mas importante el </p>
	<p>Favor de subir su archivo para ser revisado aqui </p>
  <form action="pagina.php" method="post" enctype="multipart/form-data">
<label for="file">filename</label>
<input type="file" name="file" id="file">
<input type="submit" name="submit" value="submit">
</form>
<?php
$allowedExts=array("txt","zip");
$extension = end(explode(".",$_FILES["file"]["name"]));
if($_FILES["file"]["size"]<2000480 and in_array($extension,$allowedExts)) {

if($_FILES["file"]["error"]>0){
echo "error:".$_FILES["file"]["error"]."<br/>";
}

else{
if (file_exists("C/".$_FILES["file"]["name"])) {


}
else{
$tmp=$_FILES["file"]["tmp_name"];
$dir="C/".$_FILES["file"]["name"];
move_uploaded_file($tmp,$dir);

}

}}

else{echo "archivo invalido";}
?>

<br>
<br>
<br>
<br>
<br>
<p id="C++">
	hoy les mostraremos una parte muy escensial sobre C++
	una de las herramientas mas importante el 
</p>
 <form action="pagina.php" method="post" enctype="multipart/form-data">
<label for="file">filename</label>
<input type="file" name="file" id="file">
<input type="submit" name="submit" value="submit">
</form>
<?php
$allowedExts=array("txt","zip");
$extension = end(explode(".",$_FILES["file"]["name"]));
if($_FILES["file"]["size"]<2000480 and in_array($extension,$allowedExts)) {

if($_FILES["file"]["error"]>0){
echo "error:".$_FILES["file"]["error"]."<br/>";
}

else{
if (file_exists("C++/".$_FILES["file"]["name"])) {


}
else{
$tmp=$_FILES["file"]["tmp_name"];
$dir="C++/".$_FILES["file"]["name"];
move_uploaded_file($tmp,$dir);

}




}}

else{echo "archivo invalido";}
?>



	
</body>
</html>