<?php
//DESBLOQUEAR
    session_start();
    include_once ('baseDatos.php');
    $nombreApellido = $_POST['nombreApellido'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];
    $cclave = $_POST['cclave'];




    //DESBLOQUEAR
    if($clave == $cclave){
        $sql = "insert into cuenta values('$nombreApellido','$direccion','$telefono','$correo','$clave','$cclave');";
        echo "<script>alert('Registro exitoso!');</script>";
        include("cuenta.php");

    }else{
        echo "<script>alert('Claves no coinciden, intente nuevamente');</script>";
        include("cuenta.php");
         
    }
    
    $reg = $bd->query($sql);

    header("Location:cuenta.php");

?>
