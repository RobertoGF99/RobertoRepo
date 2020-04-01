<?php
#procesamos los datos del formulario de registro

include "../ficheros/config.php";
include "../ficheros/mysql.php";

#recogemos parametros

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$enabled=$_POST['enabled'];

if (isset ($_POST['enabled'])){
    $enabled=1;

}else{
    $enabled=0;
}

$conexion=connect($config['database']);
#var_dump($conexion);


$sql="INSERT INTO `users` (`nombre`, `email`, `password`, `enabled`) VALUES ('".$nombre."', '".$email."', '".$password."', ".$enabled.")";
#var_dump($sql);

#funcion que ejecuta la consulta
#guardamos el resultado de la consulta
$return=execute($conexion,$sql);



cerrarbd($conexion);

#redirigimos al index
header("location: ../index.php");



?>