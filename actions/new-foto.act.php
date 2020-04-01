<?php
#procesamos los datos de subida de foto
include "/xampp/htdocs/galeria/ficheros/config.php";
include "/xampp/htdocs/galeria/ficheros/mysql.php";


$autor_id=$_POST['autor_id'];
$nombre=$_POST['nombre'];
$desc=$_POST['descripcion'];


move_uploaded_file($_FILES["fichero"]["tmp_name"], "../imagenes/".$_FILES["fichero"]["name"]);
$fichero=$_FILES["fichero"]["name"];
$size=$_FILES["fichero"]["size"];



$conexion=connect($config['database']);
$sql="INSERT INTO `imagenes`(`autor_id`, `nombre`, `file`, `size`, `text`) 
VALUES ('".$autor_id."','".$nombre."','".$fichero."','".$size."','".$desc."')";

$return=execute($conexion,$sql);

cerrarbd($conexion);

header("location: ../home.php?page=listado");
?>