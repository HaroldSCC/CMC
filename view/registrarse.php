
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Inicio</title>
    <!-- Bootstrap CSS -->
    <!-- Icon -->
    <link rel="stylesheet" href="assets/fonts/line-icons.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/nivo-lightbox.css">
    <!-- Animate -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a href="index.html" class="navbar-brand">CMC <br>solutions group sas</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <i class="lni-menu"></i>
      </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">
                                Inicio
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Hero Area Start -->
        <div id="hero-area" class="hero-area-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="contents text-center">
                            <h2 class="head-title wow fadeInUp">
                                Formulario de registro
                            </h2>        <button class="btn btn-success" onclick="mostrarForm('Emperesa');">Emperesa</button>
            <button class="btn btn-success" onclick="mostrarForm('natural');">Persona natural</button>
                        </div>
                        <div class="img-thumb text-center wow fadeInUp" data-wow-delay="0.6s">
                            <img class="img-fluid" src="assets/img/hero-1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End -->
    </header>
    <!-- Header Area wrapper End -->
    <br>
    <!-- Feature Section Start -->

    <div class="container-sm">

            <div id="contenidoForm" >
                

                <script >
                    function mostrarForm(opcion){
                        div = document.getElementById('contenidoForm');
                        div.style.display = '';
                        const forminiciocliente ="<form action='../controller/cliente/registrar.php' method='post' >";
                        const forminicioempresa ="<form action='../controller/empresa/registrar.php' method='post' >";
                        const id ="<div class='form-group'><label for='id'>id</label><input autocomplete='off' type='text' name='id' class='form-control' maxlength='10' required='true'  placeholder='Entre id'></div>";
                        const nombre ="<div class='form-group'><label for='nombre'>nombre</label><input autocomplete='off' type='text' name='nombre' class='form-control' maxlength='30' required='true'  placeholder='Entre nombre'></div>";
                        const empresanombre = "<div class='form-group'><label for='empresanombre'>Nombre de la empresa</label><input autocomplete='off' type='text' name='empresanombre' class='form-control' maxlength='30' required='true'  placeholder='Entre Nombre de la empresa'></div>";
                        const personanombre = "  <div class='form-group'><label for='personanombre'>Nombre</label><input autocomplete='off' type='text' name='personanombre' class='form-control' maxlength='30' required='true' placeholder='Entre nombre de quien registra'></div>";
                        const nit = "<div class='form-group'><label for='nit'>nit</label><input autocomplete='off' type='text' name='nit' class='form-control' maxlength='10' required='true'  placeholder='Entre nit'></div>";
                        const cedula ="<div class='form-group'><label for='cedula'>cedula</label><input autocomplete='off' type='text' name='cedula' class='form-control' maxlength='10' required='true' pattern='[0-9]{1,10}' placeholder='Entre cedula'></div>";
                        const firma ="  <div class='form-group'><label for='firmavirtual'>firmavirtual</label><input autocomplete='off' type='text' name='firmavirtual' class='form-control' maxlength='15' required='true'  placeholder='Entre firma virtual'></div>";
                        const fechav ="<div class='form-group'><label for='fechavencimiento'>fecha de vencimiento</label><input autocomplete='off' type='date' name='fechavencimiento' class='form-control' maxlength='15' required='true'  placeholder='Entre fecha de vencimiento'></div>";
                        const contrasena ="<div class='form-group'><label for='dian'>Contrasena dian</label><input autocomplete='off' type='text' name='dian'  class='form-control'  maxlength='50' required='true'  placeholder='Entre Contraseña de la dian'></div>";
                        const botones="<br><button  type='submit' style='float:right;' class='btn btn-primary'>Ingresar</button><button class='btn btn-danger'  onclick='cancelar();'>Cancelar</button>";
                        const formfin = "</form>";

                        if (opcion == 'Emperesa') {
                            div.innerHTML = "<h3>formulario de Emperesa</h3>"; 
                            div.innerHTML = forminicioempresa+nit+empresanombre+personanombre+cedula+contrasena+firma+fechav+botones+formfin;
                        }
                        if (opcion == 'natural') {
                            div.innerHTML = forminiciocliente+id+nombre+cedula+contrasena+firma+fechav+botones+formfin;
                        }
                    }
                    function cancelar(){
                        div = document.getElementById('contenidoForm');
                        div.style.display = 'none';
                        
                    }
                </script>
    </div><br>
    <!-- Contact Section End -->
    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
        <i class="lni-arrow-up"></i>
    </a>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.mixitup.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/nivo-lightbox.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.min.js"></script>
    </body>
</html>