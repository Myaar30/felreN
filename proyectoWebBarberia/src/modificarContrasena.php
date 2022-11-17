<?php
include('baseDatos.php');

$claveActual = $_POST['claveActual'];
$nuevaClave = $_POST['nuevaClave'];
$confirmacionClave = $_POST['confirmacionClave'];

session_start();

$update ="UPDATE cuenta SET clave = '$nuevaClave',cclave = '$confirmacionClave' WHERE correo = '".$_SESSION['correo']."'";


if (isset($_POST['guardar'])){
    if ($claveActual == $_SESSION["clave"]){
        //echo "Clave Actual ingresada es igual a clave de base de datos";
        //include("perfil.php");
        if ($nuevaClave == $confirmacionClave){
            echo "<script>alert('Contraseña cambiada con exito!');</script>";
            include("perfil.php");
            //include('baseDatos.php');
            
            $res = mysqli_query($bd,$update);
            
            
        
        }else{
            //NUEVA CLAVE Y CONFIRMACION CLAVE NO SON IDENTICAS
        }

    }else{
        //CLAVE ACTUAL INGRESADA ES ERRONEA
    }
}
       








?>



