<?php 

        if (isset($_POST['Cuenta']) && isset($_POST['Password'])) {
                    
            $currAcc = $_POST['Cuenta'];
            $Psw = $_POST['Password'];
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
            echo "Esta cuenta no existe.";
        }else{
            echo "Esta cuenta ya existe. Entrando"."<br>";
            header('Location: index.php?Cuenta='.$currAcc.'&Password='.$Psw.'');
        }
        ?>
<!DOCTYPE HTML>
<html>
    <body>
        <<a name="" id="" class="btn btn-primary" href="Login.php" role="button">Devuelvase.</a>
    </body>
</html>