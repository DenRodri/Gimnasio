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
            echo "Esta cuenta no existe aun. Se esta creando.";
            header('Location: index.php?Cuenta='.$currAcc.'&Password='.$Psw.'&Email='.$_POST['Email'].'&Edad='.$_POST['Edad'].'&Sexo='.$_POST['Sexo'].'&Nacionalidad='.$_POST['Nacionalidad'].'&Direccion='.$_POST['Direccion'].'&NumCard='.$_POST['NumCard'].'&SecNum='.$_POST['SecNum'].'&MesExp='.$_POST['MesExp'].'&YearExp='.$_POST['YearExp'].'');
        }else{
            echo "Esta cuenta ya existe."."<br>";
        }
        ?>
<!DOCTYPE HTML>
<html>
    <body>
        <<a name="" id="" class="btn btn-primary" href="Registro.php" role="button">Devuelvase.</a>
    </body>
</html>