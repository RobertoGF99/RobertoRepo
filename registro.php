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
      <a href="index.html">Inicio</a>
    </div>
    
    <div class="d-inline-block d-xl-none ml-md-0 ml-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

    <div class="main-menu">
      <ul class="js-clone-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="">Admin</a></li>
      </ul>
      <ul class="social js-clone-nav">
        <li><a href="#"><span class="icon-facebook"></span></a></li>
        <li><a href="#"><span class="icon-twitter"></span></a></li>
        <li><a href="#"><span class="icon-instagram"></span></a></li>
      </ul>
    </div>
  </header> 
  <main class="main-content">
        <?php
        #la variable page indicará la pagina a la que queremos dirigirnos
        #si pinchamos en admin desde el inicio, nos aparecera el menu de login
            $page=$_GET['page'];
            switch ($page){
                case 'login';
                #incluimos el formulario de login
                include "./includes/inc-login.php";
                break;

                #
                case 'new';
                #incluimos el formulario de registro
                include "./includes/inc-new.php";
                break;
            }
        ?>
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