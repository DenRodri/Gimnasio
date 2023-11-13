<?php 
        $f = fopen(''.$_POST['Cuenta'].$_POST['Contraseña'].'.txt', 'a+');
        fwrite($f, $_POST['Producto'].','.$_POST['FechaCompra'].','.$_POST['Descripcion'].','.$_POST['Costo'].','.$_POST['Profesor'].','.$_POST['Horarios'].PHP_EOL);
        echo "Se termino de añadir los datos al fichero.";
        header('Location: index.php?Cuenta='.$_POST['Cuenta'].'&Password='.$_POST['Contraseña'].'');
?>