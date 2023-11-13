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
<!-- ***** Features Item Start ***** -->
<section class="section" id="Programas">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Elige un <em>Programa</em></h2>
                        <p>Los programas son horarios unicos para actividades fisicas especificas a una zona o disciplina de fitness</p>
                        <img src="assets/images/line-dec.png" alt="waves">
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/Pesas.png" style="min-height: 100px; max-height: 101px; min-width: 100px; max-width: 101px;" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Fitness Basico</h4>
                                <p>Combina el ejercicio aeróbico y anaeróbico. aportando buenos resultados tras un tiempo de entrenamiento.</p>
                                <?php if($currAcc == "") : ?>
                                    <a href="#" class="text-button">$1000</a>
                                    <?php else:?>
                                    <form action="Compra.php" method="post">
                                    <input type="hidden" name="Producto" value="Fitness Basico">
                                    <input type="hidden" name="FechaCompra" value="<?php echo htmlspecialchars($date); ?>">
                                    <input type="hidden" name="Descripcion" value="Combina el ejercicio aerobico y anaerobico">
                                    <input type="hidden" name="Costo" value="$1000">
                                    <input type="hidden" name="Profesor" value="William G.Stewart">
                                    <input type="hidden" name="Horarios" value="Jueves 10:00AM - 11:30AM | Martes 2:00PM - 3:30PM ">
                                    <input type="hidden" name="Cuenta" value='<?php echo htmlspecialchars($currAcc); ?>'>
                                    <input type="hidden" name="Contraseña" value='<?php echo htmlspecialchars($Psw); ?>'>
                                    <button type="submit">$1000</button>
                            </form>
                            <?php endif; ?>
                            </div>
                        </li>
                        
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/Pesas.png" style="min-height: 100px; max-height: 101px; min-width: 100px; max-width: 101px;"  alt="second one">
                            </div>
                            <div class="right-content">
                                <h4>Entrenamiento Novato en Gimnasio</h4>
                                <p>Introduce a ejercicios tipicos, mejorando la forma para asi mejorar la efectividad al trabajar musculos.</p>
                                <?php if($currAcc == "") : ?>
                                    <a href="#" class="text-button">$600</a>
                                    <?php else:?>
                                    <form action="Compra.php" method="post">
                                    <input type="hidden" name="Producto" value="New Gym Training">
                                    <input type="hidden" name="FechaCompra" value="<?php echo htmlspecialchars($date); ?>">
                                    <input type="hidden" name="Descripcion" value="Introduce a ejercicios tipicos">
                                    <input type="hidden" name="Costo" value="$600">
                                    <input type="hidden" name="Profesor" value="Boyd C. Harris">
                                    <input type="hidden" name="Horarios" value="Martes 10:00AM - 11:30AM | Lunes 2:00PM - 3:30PM ">
                                    <input type="hidden" name="Cuenta" value='<?php echo htmlspecialchars($currAcc); ?>'>
                                    <input type="hidden" name="Contraseña" value='<?php echo htmlspecialchars($Psw); ?>'>
                                    <button type="submit">$600</button>
                            </form>
                            <?php endif; ?>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/Muscle.png" style="min-height: 100px; max-height: 101px; min-width: 100px; max-width: 101px;" alt="third gym training">
                            </div>
                            <div class="right-content">
                                <h4>Curso basico de musculo</h4>
                                <p>Entrenamiento de fuerza en el que se trabajan distintas zonas musculares al ritmo de la música.</p>
                                <?php if($currAcc == "") : ?>
                                    <a href="#" class="text-button">$1200</a>
                                    <?php else:?>
                                    <form action="Compra.php" method="post">
                                    <input type="hidden" name="Producto" value="Basic Muscle Course">
                                    <input type="hidden" name="FechaCompra" value="<?php echo htmlspecialchars($date); ?>">
                                    <input type="hidden" name="Descripcion" value="Entrenamiento de fuerza con musica">
                                    <input type="hidden" name="Costo" value="$1200">
                                    <input type="hidden" name="Profesor" value="Bret D. Bowers">
                                    <input type="hidden" name="Horarios" value="Jueves 10:00AM - 11:30AM | Miercoles 2:00PM - 3:30PM ">
                                    <input type="hidden" name="Cuenta" value='<?php echo htmlspecialchars($currAcc); ?>'>
                                    <input type="hidden" name="Contraseña" value='<?php echo htmlspecialchars($Psw); ?>'>
                                    <button type="submit">$1200</button>
                            </form>
                            <?php endif; ?>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/Muscle.png" style="min-height: 100px; max-height: 101px; min-width: 100px; max-width: 101px;" alt="fourth muscle">
                            </div>
                            <div class="right-content">
                                <h4>Curso avanzado de musculo</h4>
                                <p>Calistenia ya avanzada. Con mucho mas esfuerzo y mucho mas peso. Ejercicios nuevos de otro nivel</p>
                                <?php if($currAcc == "") : ?>
                                    <a href="#" class="text-button">$1500</a>
                                    <?php else:?>
                                    <form action="Compra.php" method="post">
                                    <input type="hidden" name="Producto" value="Advanced Muscle Course">
                                    <input type="hidden" name="FechaCompra" value="<?php echo htmlspecialchars($date); ?>">
                                    <input type="hidden" name="Descripcion" value="Calistenia avanzada">
                                    <input type="hidden" name="Costo" value="$1500">
                                    <input type="hidden" name="Profesor" value="Paul D. Newman">
                                    <input type="hidden" name="Horarios" value="Viernes 10:00AM - 11:30AM | Jueves 2:00PM - 3:30PM ">
                                    <input type="hidden" name="Cuenta" value='<?php echo htmlspecialchars($currAcc); ?>'>
                                    <input type="hidden" name="Contraseña" value='<?php echo htmlspecialchars($Psw); ?>'>
                                    <button type="submit">$1500</button>
                            </form>
                            <?php endif; ?>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/Yoga.png" style="min-height: 100px; max-height: 101px; min-width: 100px; max-width: 101px;" alt="training fifth">
                            </div>
                            <div class="right-content">
                                <h4>Entrenamiento de Yoga</h4>
                                <p>Mejora la estabilidad, la flexibilidad, la fuerza corporal y promete una relajación extrema.</p>
                                <?php if($currAcc == "") : ?>
                                    <a href="#" class="text-button">$1000</a>
                                    <?php else:?>
                                    <form action="Compra.php" method="post">
                                    <input type="hidden" name="Producto" value="Yoga Training">
                                    <input type="hidden" name="FechaCompra" value="<?php echo htmlspecialchars($date); ?>">
                                    <input type="hidden" name="Descripcion" value="Estabilidad. flexibilidad y fuerza corporal.">
                                    <input type="hidden" name="Costo" value="$1000">
                                    <input type="hidden" name="Profesor" value="Hector T. Daigle">
                                    <input type="hidden" name="Horarios" value="Miercoles 10:00AM - 11:30AM | Viernes 2:00PM - 3:30PM ">
                                    <input type="hidden" name="Cuenta" value='<?php echo htmlspecialchars($currAcc); ?>'>
                                    <input type="hidden" name="Contraseña" value='<?php echo htmlspecialchars($Psw); ?>'>
                                    <button type="submit">$600</button>
                            </form>
                            <?php endif; ?>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/Body3.png" style="min-height: 125px; max-height: 130px; min-width: 100px; max-width: 101px;" alt="gym training">
                            </div>
                            <div class="right-content">
                                <h4>Curso de Culturismo</h4>
                                <p>Esta clase combina ejercicios típicos de los deportes de contacto para la mejora de la musculatura.</p>
                                <?php if($currAcc == "") : ?>
                                    <a href="#" class="text-button">$1200</a>
                                    <?php else:?>
                                    <form action="Compra.php" method="post">
                                    <input type="hidden" name="Producto" value="Body Building Course">
                                    <input type="hidden" name="FechaCompra" value="<?php echo htmlspecialchars($date); ?>">
                                    <input type="hidden" name="Descripcion" value="Combina ejercicios tipicos y artes marciales.">
                                    <input type="hidden" name="Costo" value="$1200">
                                    <input type="hidden" name="Profesor" value="Michael P. Martin">
                                    <input type="hidden" name="Horarios" value="Jueves 9:00AM - 10:00AM | Miercoles 1:00PM - 2:30PM ">
                                    <input type="hidden" name="Cuenta" value='<?php echo htmlspecialchars($currAcc); ?>'>
                                    <input type="hidden" name="Contraseña" value='<?php echo htmlspecialchars($Psw); ?>'>
                                    <button type="submit">$1200</button>
                            </form>
                            <?php endif; ?>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->
    <!-- ***** Features Item End ***** -->
    <section class="section" id="schedule">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Horario de <em>Programas</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="filters">
                        <ul class="schedule-filter">
                            <li class="active" data-tsfilter="monday">Lunes</li>
                            <li data-tsfilter="tuesday">Martes</li>
                            <li data-tsfilter="wednesday">Miercoles</li>
                            <li data-tsfilter="thursday">Jueves</li>
                            <li data-tsfilter="friday">Viernes</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <div class="schedule-table filtering">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="day-time">Basic Fitness</td>
                                    <td class="monday ts-item show" data-tsmeta="monday">10:00AM - 11:30AM</td>
                                    <td class="tuesday ts-item" data-tsmeta="tuesday">2:00PM - 3:30PM</td>
                                    <td>William G. Stewart</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Advanced Muscle Course</td>
                                    <td class="friday ts-item" data-tsmeta="friday">10:00AM - 11:30AM</td>
                                    <td class="thursday friday ts-item" data-tsmeta="thursday" data-tsmeta="friday">2:00PM - 3:30PM</td>
                                    <td>Paul D. Newman</td>
                                </tr>
                                <tr>
                                    <td class="day-time">New Gym Training</td>
                                    <td class="tuesday ts-item" data-tsmeta="tuesday">10:00AM - 11:30AM</td>
                                    <td class="monday ts-item show" data-tsmeta="monday">2:00PM - 3:30PM</td>
                                    <td>Boyd C. Harris</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Yoga Training</td>
                                    <td class="wednesday ts-item" data-tsmeta="wednesday">10:00AM - 11:30AM</td>
                                    <td class="friday ts-item" data-tsmeta="friday">2:00PM - 3:30PM</td>
                                    <td>Hector T. Daigle</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Basic Muscle Course</td>
                                    <td class="thursday ts-item" data-tsmeta="thursday">10:00AM - 11:30AM</td>
                                    <td class="wednesday ts-item" data-tsmeta="wednesday">2:00PM - 3:30PM</td>
                                    <td>Bret D. Bowers</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Body Building Course</td>
                                    <td class="thursday ts-item" data-tsmeta="thursday">9:00AM - 10:00AM</td>
                                    <td class="wednesday ts-item" data-tsmeta="wednesday">1:00PM - 2:30PM</td>
                                    <td>Michael P. Martin</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>                          

    
    
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