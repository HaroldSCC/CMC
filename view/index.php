<?php
session_start();
 $validacion = '';
 $inhabilitado = '';
    require("../model/mysql.php");
    if (isset($_POST['id'])) {
        $usuario=$_POST['id'];
        $contrasena=$_POST['clave'];
        $pdo = new db();   
        $cuentas = $pdo->mysql->query("select e.estado, u.empleado,u.usuario,u.clave , p.nombre from empleado e, usuario u, perfil p where u.empleado=e.id and u.perfil=p.perfil and usuario='$usuario' and  clave='$contrasena'");
        foreach($cuentas as $cuenta)
        {
            if ($cuenta['estado'] == '1') {
                $_SESSION['empleado'] = $cuenta['empleado'];
                $_SESSION['sesion'] = $usuario;
                $_SESSION['cargo'] =  $cuenta['nombre'] ;
                header("Location: layout/layouts/layout.php"); 
            }else {
                $inhabilitado = '1';

            }

        }
        if ($inhabilitado == '1') {
            $validacion ="<div class='alert alert-danger'><center><strong></strong> el usuario esta inhabilitado.</div>" ;            
        }else {
            $validacion ="<div class='alert alert-danger'><center><strong>Ojo!</strong> el usuario o contraseña es incorrecta.</div>" ;
        }

    }
?>
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
        <link rel="stylesheet" href="assets/css/main1.css">
        <!-- Responsive Style -->
        <link rel="stylesheet" href="assets/css/responsive.css">
    </head>

    <body style="color:#000000">
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
                            <li class="nav-item active">
                                <a class="nav-link" href="#hero-area">
                  Inicio
                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#mision">
                  mision
                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#vision">
                  vision
                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#services">
                  Servicios
                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#team">
                  Nosotros
                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#contact">
                  Contacto
                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="registrarse.php">
                Registrarte
              </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="modal" data-target="#myModal">
                Iniciar Sesion
              </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
            <?php
                require_once('formularios/iniciarsesion.php');
            ?>
            <!-- Hero Area Start -->
            <div id="hero-area" class="hero-area-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="contents text-center">
                                <h2 class="head-title wow fadeInUp"></h2>

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
        <br><br>
        <!-- Feature Section Start -->
        <div id="mision">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12" id="cuadradito">
                        <div class="text-wrapper">
                            <div>
                                <h2 class="title-hl wow fadeInLeft" data-wow-delay="0.3s">Mision </h2>
                                <p class="mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate ad nisi totam aliquid dicta esse sapiente hic inventore eum. Distinctio qui placeat est ea, dignissimos ab vitae aspernatur dolorum possimus?</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 " id="cuadradito">
                        <div class="text-wrapper">
                            <div>
                                <h2 class="title-hl wow fadeInLeft" data-wow-delay="0.3s">vision </h2>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, nam velit minus quaerat quae incidunt, officiis alias, quam rem laboriosam facilis! Eligendi dolorum nemo, sequi suscipit repellat eos ullam iste..</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature Section End -->
<br><br>
        <!-- Services Section Start -->
        <section id="services" class="section-padding bg-gray">
            <div class="container">
                <div class="section-header text-center">
                    <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Servicios</h2>
                    <p>equipo de los mejores contadores de colombia<br> en 2020.</p>
                </div>
                <div class="row">
                    <!-- Services item -->
                    <div class="col-md-6 col-lg-4 col-xs-12">
                        <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
                            <div class="icon">
                                <i class="lni-pencil"></i>
                            </div>
                            <div class="services-content">
                                <h3><a href="#">Declaracion de renta</a></h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <!-- Services item -->
                    <div class="col-md-6 col-lg-4 col-xs-12">
                        <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
                            <div class="icon">
                                <i class="lni-briefcase"></i>
                            </div>
                            <div class="services-content">
                                <h3><a href="#">Declaracion de impuestos</a></h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <!-- Services item -->
                    <div class="col-md-6 col-lg-4 col-xs-12">
                        <div class="services-item wow fadeInRight" data-wow-delay="0.9s">
                            <div class="icon">
                                <i class="lni-cog"></i>
                            </div>
                            <div class="services-content">
                                <h3><a href="#">Declaracion de iva</a></h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <!-- Services item -->
                    <div class="col-md-6 col-lg-4 col-xs-12">
                        <div class="services-item wow fadeInRight" data-wow-delay="1.2s">
                            <div class="icon">
                                <i class="lni-mobile"></i>
                            </div>
                            <div class="services-content">
                                <h3><a href="#">Impuesto del ICA </a></h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <!-- Services item -->
                    <div class="col-md-6 col-lg-4 col-xs-12">
                        <div class="services-item wow fadeInRight" data-wow-delay="1.5s">
                            <div class="icon">
                                <i class="lni-layers"></i>
                            </div>
                            <div class="services-content">
                                <h3><a href="#">Informes</a></h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <!-- Services item -->
                    <div class="col-md-6 col-lg-4 col-xs-12">
                        <div class="services-item wow fadeInRight" data-wow-delay="1.8s">
                            <div class="icon">
                                <i class="lni-rocket"></i>
                            </div>
                            <div class="services-content">
                                <h3><a href="#">Auditoria fiscal</a></h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Section End -->

        <!-- Team Section Start -->
        <section id="team" class="section-padding text-center">
            <div class="container">
                <div class="section-header text-center">
                    <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Nuestro Equipo</h2>
                    <p>A desire to help and empower others between community contributors in technology <br> began to grow in 2020.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <!-- Team Item Starts -->
                        <div class="team-item text-center wow fadeInRight" data-wow-delay="0.3s">
                            <div class="team-img">
                                <img class="img-fluid" src="assets/img/team/team-01.png" alt="">
                                <div class="team-overlay">
                                    <div class="overlay-social-icon text-center">
                                        <ul class="social-icons">
                                            <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info-text">
                                <h3><a href="#">Alejandro Jiménez</a></h3>
                                <p>socio fundador de cmc Solutions groups SAS </p>
                            </div>
                        </div>
                        <!-- Team Item Ends -->
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <!-- Team Item Starts -->
                        <div class="team-item text-center wow fadeInRight" data-wow-delay="0.6s">
                            <div class="team-img">
                                <img class="img-fluid" src="assets/img/team/team-02.png" alt="">
                                <div class="team-overlay">
                                    <div class="overlay-social-icon text-center">
                                        <ul class="social-icons">
                                            <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info-text">
                                <h3><a href="#">Carolina Santana</a></h3>
                                <p>contadora publica. Con especialización en revisoría fiscal y auditoría.</p>
                            </div>
                        </div>
                        <!-- Team Item Ends -->
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <!-- Team Item Starts -->
                        <div class="team-item text-center wow fadeInRight" data-wow-delay="0.9s">
                            <div class="team-img">
                                <img class="img-fluid" src="assets/img/team/team-03.png" alt="">
                                <div class="team-overlay">
                                    <div class="overlay-social-icon text-center">
                                        <ul class="social-icons">
                                            <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info-text">
                                <h3><a href="#">Paola Camargo</a></h3>
                                <p>Contadora Pública, especialista en Gerencia Financiera</p>
                            </div>
                        </div>
                        <!-- Team Item Ends -->
                    </div>



                </div>
            </div>
        </section>
        <!-- Team Section End -->
        <!-- Contact Section Start -->
        <section id="contact" class="section-padding">
            <div class="container">
                <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <div class="contact-block" id="cuadradito">
                            <form id="contactForm" >
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Nombre">Nombre:</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" required data-error="Entre Nombre">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label for="email">email:</label>
                                            <input type="text" placeholder="Correo" id="email" class="form-control" name="email" required data-error="Entre Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="Asunto">Asunto:</label>
                                            <input type="text" placeholder="Descripcion" id="msg_subject" class="form-control" required data-error="Entre Asunto">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="Mensaje">Mensaje:</label>
                                            <textarea class="form-control" id="mensaje" placeholder="tu mensaje" rows="5" data-error="Escribe tu mensaje" required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="submit-button">
                                            <button class="btn btn-common" id="form-submit" type="submit">Enviar mensaje</button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12" >

                        <div class="contact-right-area wow fadeIn" id="cuadradito">
                            <div class="contact-title">
                                <h1>Contactenos</h1>
                            </div>

                            <div class="contact-right">
                                <div class="single-contact">
                                    <div class="contact-icon">
                                        <i class="lni-map-marker"></i>
                                    </div>
                                    <p>Luna Park casa amarilla</p>
                                </div>
                                <div class="single-contact">
                                    <div class="contact-icon">
                                        <i class="lni-envelope"></i>
                                    </div>
                                    <p><a href="#">Email:  clientecmc@gmail.com</a></p>
                                </div>
                                <div class="single-contact">
                                    <div class="contact-icon">
                                        <i class="lni-phone-handset"></i>
                                    </div>
                                    <p><a href="#">Telefono:  +54 3196327288</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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