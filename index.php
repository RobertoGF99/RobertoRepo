<?php
#incluimos ficheros con nuestras funciones
include "ficheros/config.php";
include "ficheros/mysql.php";

$conexion=connect($config['database']);

#preparamos la consulta
$sql="SELECT * from imagenes order by id desc";

#variable que almacena los datos obtenidos de la consulta
$filas=executedata($sql,$conexion);

cerrarbd($conexion);



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shutter &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/magnific-popup.css">
    <link rel="stylesheet" href="bootstrap/css/jquery-ui.css">
    <link rel="stylesheet" href="bootstrap/css/owl.carousel.min.css">
    <link rel="stylesheet" href="bootstrap/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="bootstrap/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="bootstrap/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="bootstrap/css/aos.css">
    <link rel="stylesheet" href="bootstrap/css/fancybox.min.css">

    <link rel="stylesheet" href="bootstrap/css/style.css">
    
  </head>
  <body>
  

  <div class="site-wrap">

  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <header class="header-bar d-flex d-lg-block align-items-center" data-aos="fade-left">
    <div class="site-logo">
      <a href="index.php">Inicio</a>
    </div>
    
    <div class="d-inline-block d-xl-none ml-md-0 ml-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

    <div class="main-menu">
      <ul class="js-clone-nav">
        <li class="active"><a href="index.php">Home</a></li>

        
        <li><a href="registro.php?page=login">[admin]</a></li>
      </ul>
      <ul class="social js-clone-nav">
        <li><a href="#"><span class="icon-facebook"></span></a></li>
        <li><a href="#"><span class="icon-twitter"></span></a></li>
        <li><a href="#"><span class="icon-instagram"></span></a></li>
      </ul>
    </div>
  </header> 
  <main class="main-content">
    <div class="container-fluid photos">
      <div class="row align-items-stretch">
        <?php

        #comprobamos que hay datos
        if(!empty($filas)){
          #si hay, los mostramos
        foreach($filas as $fil){
          echo '<div><img src="imagenes/'.$fil["file"].'" alt="">'.$fil["nombre"].'</div>';

        }
      }else{
        #si no hay, mostramos el siguiente mensaje
        echo "<h2>no hay ninguna imagen en la galeria</h2>";
      }
        ?>
        


      
        
        

      </div>
    </div>
  </main>

</div> <!-- .site-wrap -->

  <script src="bootstrap/js/jquery-3.3.1.min.js"></script>
  <script src="bootstrap/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="bootstrap/js/jquery-ui.js"></script>
  <script src="bootstrap/js/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="bootstrap/js/owl.carousel.min.js"></script>
  <script src="bootstrap/js/jquery.stellar.min.js"></script>
  <script src="bootstrap/js/jquery.countdown.min.js"></script>
  <script src="bootstrap/js/jquery.magnific-popup.min.js"></script>
  <script src="bootstrap/js/bootstrap-datepicker.min.js"></script>
  <script src="bootstrap/js/aos.js"></script>

  <script src="bootstrap/js/jquery.fancybox.min.js"></script>

  <script src="bootstrap/js/main.js"></script>
    
  </body>
</html>