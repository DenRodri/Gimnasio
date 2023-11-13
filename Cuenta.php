<!DOCTYPE html>
<html lang="en">

  <head>
    <?php 
        $f = fopen(''.$_POST['Cuenta'].$_POST['Contraseña'].'.txt', 'r+');
        $array = (explode(",",fgets($f)));
        $Email = $array[2];
        $Edad = $array[3];
        $Sexo = $array[4];
        $Nacionalidad = $array[5];
        $Direccion = $array[6];
        $NumCard = $array[7];
        $SecNum = $array[8];
        $MesExp = $array[9];
        $YearExp = $array[10];
        $NumAcceso = $array[11];
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

<link rel="stylesheet" href="assets/css/templatemo-training-studio.css">
    <title>Cuenta</title>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/styles3.css">
    </head>
    
    <body style="display: flex;padding: 0px;margin: 0px; justify-content: center; align-items: center; background-image: url(assets/images/reglog-bg.png); background-repeat: no-repeat; background-size: cover;">
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a class="logo">Gym<em> StudioX</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav" >
                        <form action="index.php#top" method="post"  style="Flex-direction: row; display: flex;">
                            <input type="hidden" name="Cuenta" value='<?php echo htmlspecialchars($_POST['Cuenta']); ?>'>
                            <input type="hidden" name="Contraseña" value='<?php echo htmlspecialchars($_POST['Contraseña']); ?>'>
                            <li class="scroll-to-section"><a href="#top" class="active"><button type="submit">Inicio</button></a></li>
                        </form>
                        <form action="index.php#trainers" method="post"  style="Flex-direction: row; display: flex;">
                            <input type="hidden" name="Cuenta" value='<?php echo htmlspecialchars($_POST['Cuenta']); ?>'>
                            <input type="hidden" name="Contraseña" value='<?php echo htmlspecialchars($_POST['Contraseña']); ?>'>
                            <li class="scroll-to-section"><a href="#trainers"><button type="submit">Acerca</button></a></li>
                        </form>
                        <form action="index.php#contact-us" method="post"  style="Flex-direction: row; display: flex;">
                            <input type="hidden" name="Cuenta" value='<?php echo htmlspecialchars($_POST['Cuenta']); ?>'>
                            <input type="hidden" name="Contraseña" value='<?php echo htmlspecialchars($_POST['Contraseña']); ?>'>
                            <li class="scroll-to-section"><a href="#contact-us"><button type="submit">Contactar</button></a></li> 
                        </form>
                        <form action="Programas.php" method="post"  style="Flex-direction: row; display: flex;">
                            <input type="hidden" name="Cuenta" value='<?php echo htmlspecialchars($_POST['Cuenta']); ?>'>
                            <input type="hidden" name="Contraseña" value='<?php echo htmlspecialchars($_POST['Contraseña']); ?>'>
                            <li class="scroll-to-section"><a href="Programas.php"><button type="submit">Programas</button></a></li>
                        </form>
                        <form action="Clases.php" method="post"  style="Flex-direction: row; display: flex;">
                            <input type="hidden" name="Cuenta" value='<?php echo htmlspecialchars($_POST['Cuenta']); ?>'>
                            <input type="hidden" name="Contraseña" value='<?php echo htmlspecialchars($_POST['Contraseña']); ?>'>
                            <li class="scroll-to-section"><a href="Clases.php"><button type="submit">Clases</button></a></li>
                        </form>
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
    
        <div id="CompraBox" style="background-color: white; margin-top: 12.5vh; width: 75vw; height: 87.5vh">
            <div style="display: flex; height: 25vh; width: 75vw; justify-content: center; align-items: center;">
                <div style="display: flex; height: 25vh; width: 25vw; justify-content: center; align-items: center;">
                <?php if($Sexo == "Masculino") : ?>
                    <img src="assets/images/Boy.png" style="min-height: 100px; max-height: 101px; min-width: 100px; max-width: 101px;">
                <?php else:?>
                    <img src="assets/images/Girl.png" style="min-height: 100px; max-height: 101px; min-width: 100px; max-width: 101px;">
                <?php endif; ?>    
                </div>
                <div style="display: flex; height: 25vh; width: 50vw; justify-content: center; align-items: center; flex-Direction: row; ">
                    <div style="background-color: white; display: flex; height: 25vh; width: 30vw; justify-content: center; flex-Direction: column; ">
                        <h4 style="margin-left: 2.5vw; margin-top: 1vh; color: rgb(237,86,59);"><?php echo $_POST['Cuenta'];?></h4>
                        <h5 style="margin-left: 2.5vw; margin-top: 1vh;">Email: <?php echo $Email;?></h5>
                        <h5 style="margin-left: 2.5vw; margin-top: 1vh;">Edad: <?php echo $Edad;?></h5>
                        <h5 style="margin-left: 2.5vw; margin-top: 1vh;">Sexo: <?php echo $Sexo;?></h5>
                    </div>
                    <div style=" display: flex; height: 25vh; width: 20vw; justify-content: center; flex-Direction: column; ">
                        <h5 style="margin-left: 2.5vw; margin-top: 1.5vh;">Nacionalidad: <?php echo $Nacionalidad;?></h5>
                        <h5 style="margin-left: 2.5vw; margin-top: 1vh;">Direccion: <?php echo $Direccion;?></h5>
                        <h5 style="margin-left: 2.5vw; margin-top: 1vh;">Numero de Acceso: <?php echo $NumAcceso;?></h5>
                    </div>
                </div>
            </div>
            <hr style="width: 75vw; height: 1vh; background-color:black;">
            <div style="display: flex; height: 62.5vh; width: 75vw; justify-content: center; align-items: center;">
            <?php
                echo "<table border='1'>";
                echo "<tr><th>Producto</th><th>Fecha de Compra</th><th>Descripcion</th><th>Costo</th><th>Profesor</th><th>Horarios</th></tr>";
                while (!feof($f)){   
                    $data = fgets($f); 
                    echo "<tr><td>" . str_replace(',',"</td><td>",$data) . "</td></tr>";
                }
                echo "</table>";
                fclose($f);
                ?>
            </div>
        </div>
         
  </body>
</html>