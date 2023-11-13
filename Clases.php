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
                            <li class="scroll-to-section"><a href="index.php#top" class="active">Inicio</a></li>
                            <?php else:?>
                                    <form action="index.php#top" method="post">
                                    <input type="hidden" name="Cuenta" value='<?php echo htmlspecialchars($currAcc); ?>'>
                                    <input type="hidden" name="Contraseña" value='<?php echo htmlspecialchars($Psw); ?>'>
                                    <li class="scroll-to-section"> <button type="submit">Inicio</button> </li>
                                    </form>
                            <?php endif; ?>
                            <?php if($currAcc == "") : ?> 
                            <li class="scroll-to-section"><a href="index.php#trainers">Acerca</a></li>
                            <?php else:?>
                                    <form action="index.php#trainers" method="post">
                                    <input type="hidden" name="Cuenta" value='<?php echo htmlspecialchars($currAcc); ?>'>
                                    <input type="hidden" name="Contraseña" value='<?php echo htmlspecialchars($Psw); ?>'>
                                    <li class="scroll-to-section"> <button type="submit">Acerca</button> </li>
                                    </form>
                            <?php endif; ?>
                            <?php if($currAcc == "") : ?> 
                            <li class="scroll-to-section"><a href="index.php#contact-us">Contactar</a></li>
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
<!-- ***** Our Classes Start ***** -->
<section class="section" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Nuestras <em>Clases</em></h2>
                        <p>Las clases son tiempos en donde los profesores estan en el gimnasio para dar y repartir esas rutinas segun la persona. Como siguen los niveles sube la intensidad. Vienen con ser miembro.</p>
                        <img src="assets/images/line-dec.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'><img src="assets/images/tabs-first-icon.png" alt="">Entrenamiento de primera clase</a></li>
                  <li><a href='#tabs-2'><img src="assets/images/tabs-first-icon.png" alt="">Entrenamiento de segunda clase</a></a></li>
                  <li><a href='#tabs-3'><img src="assets/images/tabs-first-icon.png" alt="">Entrenamiento de tercera clase</a></a></li>
                  <li><a href='#tabs-4'><img src="assets/images/tabs-first-icon.png" alt="">Entrenamiento de cuarta clase</a></a></li>
                  <div class="main-rounded-button"><a href="#modal1">Mira todos los horarios</a>
                    <div id="modal1"><a href="#our-classes">Close</a><img src="assets/images/Horario.PNG"></div></div>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <img src="assets/images/training-image-01.jpg" alt="First Class">
                    <h4>Entrenamiento de primera clase</h4>
                    <p>Duracion: 30 minutos<br>Ejercicios: Sentadillas, Pechadas, Marineros, Caminata, Abdominales <br>Profesor: Bret D. Bowers</p>
                    <div class="main-button">
                        <a href="#modal2">Mirar horario</a>
                        <div id="modal2"><a href="#our-classes">Close</a><img src="assets/images/Clase1.PNG"></div>
                    </div>
                  </article>
                  <article id='tabs-2'>
                    <img src="assets/images/training-image-02.jpg" alt="Second Training">
                    <h4>Entrenamiento de segunda clase</h4>
                    <p><p>Duracion: 1 hora<br>Ejercicios: Plancha, Zancadas, Flexiones, Dominadas, Salto de cuerda <br>Profesor: Hector T.Daigli</p></p>
                    <div class="main-button">
                        <a href="#modal3">Mirar horario</a>
                        <div id="modal3"><a href="#our-classes">Close</a><img src="assets/images/Clase2.PNG"></div>
                    </div>
                  </article>
                  <article id='tabs-3'>
                    <img src="assets/images/training-image-03.jpg" alt="Third Class">
                    <h4>Entrenamiento de tercera clase</h4>
                    <p><p>Duracion: 1 hora y 30 minutos<br>Ejercicios: Superman, patadas en libre, Elevacion del pelvis, Pechadas de delfin <br>Profesor: Paul D. Newman </p></p>
                    <div class="main-button">
                        <a href="#modal4">Mirar horario</a>
                        <div id="modal4"><a href="#our-classes">Close</a><img src="assets/images/Clase3.PNG"></div>
                    </div>
                  </article>
                  <article id='tabs-4'>
                    <img src="assets/images/training-image-04.jpg" alt="Fourth Training">
                    <h4>Entrenamiento de cuarta clase</h4>
                    <p><p>Duracion: 2 horas<br>Ejercicios: Mountain Climbers, Saltos del patinador, zancas con salto, sprawl<br>Profesor: Boyd C. Harris</p></p>
                    <div class="main-button">
                        <a href="#modal5">Mirar horario</a>
                        <div id="modal5"><a href="#our-classes">Close</a><img src="assets/images/Clase4.PNG"></div>
                    </div>
                  </article>
                </section>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Classes End ***** -->
    
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