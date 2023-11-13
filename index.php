<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Home</title>
<!--

TemplateMo 548 Training Studio

https://templatemo.com/tm-548-training-studio

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-training-studio.css">

    <link rel="stylesheet" href="assets/css/styles2.css">
    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->

    <?php 
        $date = date("Y/m/d");
        if (isset($_GET['Cuenta']) && isset($_GET['Password'])) {
                    
            $currAcc = $_GET['Cuenta'];
            $Psw = $_GET['Password'];
        }else if(isset($_POST['Cuenta']) && isset($_POST['Contraseña'])){
            $currAcc = $_POST['Cuenta'];
            $Psw = $_POST['Contraseña']; 
        }else{
            $currAcc = "";
            $Psw = "";
        }
        $cuentas = fopen("Cuentas.txt", "r");
        while(!feof($cuentas)){
            $nombre = trim(fgets($cuentas));
            $contraseña = trim(fgets($cuentas));
            if(strcmp($nombre,$currAcc) === 0 && strcmp($contraseña,$Psw) === 0){
                break;
            }
            else{
                unset($nombre);
                unset($contraseña);
            }
        }
        fclose($cuentas);
        if((!isset($nombre)) && (!isset($contraseña))){
            $fp = fopen('Cuentas.txt', 'a');//Opens file in append mode
            fwrite($fp, $currAcc.PHP_EOL);  
            fwrite($fp, $Psw.PHP_EOL);  
            fclose($fp);  
            $nc = fopen(''.$currAcc.$Psw.'.txt', 'w+');
            fwrite($nc,$currAcc.','.$Psw.','.$_GET['Email'].','.$_GET['Edad'].','.$_GET['Sexo'].','.$_GET['Nacionalidad'].','.$_GET['Direccion'].','.$_GET['NumCard'].','.$_GET['SecNum'].','.$_GET['MesExp'].','.$_GET['YearExp'].','.rand(0,99999).PHP_EOL);
        }
        ?>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a class="logo">Gym<em> StudioX</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <?php if($currAcc == "") : ?> 
                            <li class="scroll-to-section"><a href="#top" class="active">Inicio</a></li>
                            <?php else:?>
                                    <form action="index.php#top" method="post">
                                    <input type="hidden" name="Cuenta" value='<?php echo htmlspecialchars($currAcc); ?>'>
                                    <input type="hidden" name="Contraseña" value='<?php echo htmlspecialchars($Psw); ?>'>
                                    <li class="scroll-to-section"> <button type="submit">Inicio</button> </li>
                                    </form>
                            <?php endif; ?>
                            <?php if($currAcc == "") : ?> 
                            <li class="scroll-to-section"><a href="#trainers">Acerca</a></li>
                            <?php else:?>
                                    <form action="index.php#trainers" method="post">
                                    <input type="hidden" name="Cuenta" value='<?php echo htmlspecialchars($currAcc); ?>'>
                                    <input type="hidden" name="Contraseña" value='<?php echo htmlspecialchars($Psw); ?>'>
                                    <li class="scroll-to-section"> <button type="submit">Acerca</button> </li>
                                    </form>
                            <?php endif; ?>
                            <?php if($currAcc == "") : ?> 
                            <li class="scroll-to-section"><a href="#contact-us">Contactar</a></li>
                            <?php else:?>
                                    <form action="index.php#contact-us" method="post">
                                    <input type="hidden" name="Cuenta" value='<?php echo htmlspecialchars($currAcc); ?>'>
                                    <input type="hidden" name="Contraseña" value='<?php echo htmlspecialchars($Psw); ?>'>
                                    <li class="scroll-to-section"> <button type="submit">Contactar</button> </li>
                                    </form>
                            <?php endif; ?>
                            <?php if($currAcc == "") : ?> 
                            <li class="scroll-to-section"><a href="Programas.php">Programas</a></li>
                            <?php else:?>
                                    <form action="Programas.php" method="post">
                                    <input type="hidden" name="Cuenta" value='<?php echo htmlspecialchars($currAcc); ?>'>
                                    <input type="hidden" name="Contraseña" value='<?php echo htmlspecialchars($Psw); ?>'>
                                    <li class="scroll-to-section"> <button type="submit">Programas</button> </li>
                                    </form>
                            <?php endif; ?>
                            <?php if($currAcc == "") : ?>
                            <li class="scroll-to-section"><a href="Clases.php">Clases</a></li>
                            <?php else:?>
                                    <form action="Clases.php" method="post">
                                    <input type="hidden" name="Cuenta" value='<?php echo htmlspecialchars($currAcc); ?>'>
                                    <input type="hidden" name="Contraseña" value='<?php echo htmlspecialchars($Psw); ?>'>
                                    <li class="scroll-to-section"> <button type="submit">Clases</button> </li>
                                    </form>
                            <?php endif; ?>
                            <?php if($currAcc == "") : ?>
                                <li class="main-button"><a href="Registro.php">Registrarse</a></li>
                                <li class="main-button"><a href="Login.php">Acceder</a></li>
                            <?php else:?>
                                <li class="main-button2"><div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php echo $currAcc;?>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <form action="Cuenta.php" method="post">
                                    <input type="hidden" name="Cuenta" value='<?php echo htmlspecialchars($currAcc); ?>'>
                                    <input type="hidden" name="Contraseña" value='<?php echo htmlspecialchars($Psw); ?>'>
                                    <button class="dropdown-item" type="submit">Cuenta</button>
                                    </form>
                                        <a class="dropdown-item" href="index.php"><button>Salir</button></a>
                                    </div>
                                    </div>
                        </li>
                            <?php endif; ?>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/gymvid.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>Trabaja mas duro, se mas fuerte</h6>
                <h2>facil con nuestro <em>gimnasio</em></h2>
                <div class="main-button scroll-to-section">
                    <a href="#">Vuelvete un miembro</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->
<!-- ***** Testimonials Starts ***** -->
<section class="section" id="trainers">
    
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Entrenadores <em>expertos</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item" style="height: 80vh">
                        <div class="image-thumb">
                            <img src="assets/images/first-trainer.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>Entrenador de fuerza</span>
                            <h4>Bret D. Bowers</h4>
                            <p>Completo su certificacion Master Fitness Training a traves de la Universidad de Hofstra en Nueva York y tiene muchas certificaciones de educacion continua en temas relacionados con el fitness.</p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item" style="height: 80vh">
                        <div class="image-thumb">
                            <img src="assets/images/second-trainer.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>Entrenador de musculo</span>
                            <h4>Hector T. Daigl</h4>
                            <p>Entrenador personal certificado por la ISSA, especialista en nutrición de rendimiento de la ISSA, especialista en acondicionamiento deportivo de la ISSA, terapeuta físico certificado.</p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item" style="height: 80vh;margin-bottom: 5vh">
                        <div class="image-thumb">
                            <img src="assets/images/third-trainer.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>Entrenador de poder</span>
                            <h4>Paul D. Newman</h4>
                            <p>Ganador del titulo de Mr. Olympia en 2017.</p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->
    <!-- ***** Call to Action Start ***** -->
    <section class="section" id="call-to-action" style="opacity: 0.9; background-image: url(assets/images/cta-bg3.webp); ">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content" style="margin-left: 30vw;">
                        <h2>No lo <em>pienses</em>, empieza <em>hoy</em>!</h2>
                        <p>Con la ayuda de nuestros programas y clases, podra conseguir sus nuevas metas, especialmente con los profesores. Este gimnasio tradicional se adaptara a todas sus necesidades atleticas con las maquinas.</p>
                        <div class="main-button scroll-to-section">
                            <a href="#top">Se un miembro</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->
    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us" style="margin-top: 15px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div id="map">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15136.748078235354!2d-69.89761660419276!3d18.47518601786275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf883c8807601b%3A0xea3f03fad77ca7b9!2sGimnasio%20Colonial!5e0!3m2!1ses-419!2sdo!4v1654086937103!5m2!1ses-419!2sdo" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="contact-form">
                        <form id="contact" action="https://formsubmit.co/1ad5c260d1ee48b6fc7888a2232617ab" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Tu nombre*" required>
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Tu email*" required>
                              </fieldset>
                            </div>
                            <input name="_replyto" type="hidden" id="email">
                            <div class="col-md-12 col-sm-12">
                              <fieldset>
                                <input name="subject" type="text" id="subject" placeholder="Tema*" required>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Mensaje*" required></textarea>
                              </fieldset>
                            </div>
                            <input type="hidden" name="_next" value="http://localhost/templatemo_548_training_studio/Gracias.php">
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Enviar mensaje</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer style="background-color: rgb(200,200,200)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Hecho por Denzel V. Rodriguez De la Rosa #18 4toE<br>
                    Telefono: +1 (809)-531-2642<br>
                    <!-- You shall support us a little via PayPal to info@templatemo.com -->
                    
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
  </body>
</html>