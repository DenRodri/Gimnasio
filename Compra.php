<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Compra</title>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/styles3.css">
    </head>
    
    <body style="display: flex;padding: 0px;margin: 0px; justify-content: center; align-items: center; background-image: url(assets/images/reglog-bg.png); background-repeat: no-repeat; background-size: cover;">
        <div id="CompraBox" style="background-color: white;">
            <div id="TitleBox">
                <h1>Confirmacion de compra para <?php echo $_POST['Cuenta'];?></h1>

            </div>
            <div id="ItemsBox">
                <div id="ItemsMiniBox">
                    <h3>Producto: <?php echo $_POST['Producto'];?></h3>
                    <h3>Fecha de Compra: <?php echo $_POST['FechaCompra'];?></h3>
                    <h3>Descripcion: <?php echo $_POST['Descripcion'];?></h3>
                </div>
                <div id="ItemsMiniBox">
                    <h3>Profesor: <?php echo $_POST['Profesor'];?></h3>
                    <h3>Horarios: <?php echo $_POST['Horarios'];?></h3>
                    <h3>Costo: <?php echo $_POST['Costo'];?></h3>
                </div>
            </div>
            <div id="ChoiceBox">
                <form action="CompraPrueba.php" method="post">
                <input type="hidden" name="Producto" value="<?php echo htmlspecialchars($_POST['Producto']);?>">
                <input type="hidden" name="FechaCompra" value="<?php echo htmlspecialchars($_POST['FechaCompra']); ?>">
                <input type="hidden" name="Descripcion" value="<?php echo htmlspecialchars($_POST['Descripcion']);?>">
                <input type="hidden" name="Costo" value="<?php echo htmlspecialchars($_POST['Costo']);?>">
                <input type="hidden" name="Profesor" value="<?php echo htmlspecialchars($_POST['Profesor']);?>">
                <input type="hidden" name="Horarios" value="<?php echo htmlspecialchars($_POST['Horarios']);?>">
                <input type="hidden" name="Cuenta" value='<?php echo htmlspecialchars($_POST['Cuenta']);?>'>
                <input type="hidden" name="Contraseña" value='<?php echo htmlspecialchars($_POST['Contraseña']);?>'>
                <button type="submit">Con datos pre-establecidos</button>
                </form>
                <a href="https://www.paypal.com/do/home"><button>Por PayPal</button></a>
            </div>
        </div>
    
  </body>
</html>