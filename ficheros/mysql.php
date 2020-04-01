<?php
#funciones generales

#incluimos el fichero config para acceder a la variable que contiene los datos para conectarnos a la bd
include "config.php";

#conector de la base de datos
function connect( $config = array()){
    $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
    #echo "Connected successfully";
    } 
    return ($conn);
    }


    function execute($conn,$sql){
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    #funcion que crea una sesion al loguearnos
    function executequery($sql,$conn){
        $result=$conn->query($sql);
        $rows=$result->num_rows;

        if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['id_usuario'] = $row['id'];
			$_SESSION['email'] = $row['email'];
			header("location: ../home.php?page=listado");
			} else {
            header("location: ../index.php");
            #echo "usuario no encontrado";
		}
    }

    #funcion que ejecuta la consulta y almacena y prepara los datos obtenidos
    function executedata($sql,$conn){
        $result=$conn->query($sql);
        #var_dump($result);

        if ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
            do{
                $data[]=$row;
            }
            // output data of each row
            while($row = $result -> fetch_array(MYSQLI_ASSOC));
                
            } else {
            $data=null;
        }
        $result -> free_result();
        return($data);
        #var_dump($data)
        
    }

    #funcion que cierra la conexion con la bd
    function cerrarbd($conn){
        $conn->close();
        #echo "conexion cerrada";
    }

?>