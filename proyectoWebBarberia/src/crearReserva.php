<?php
    session_start();
    include_once ('baseDatos.php'); 
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $estilo = $_POST['especificar'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];

    $sql = "insert into reserva values(null,'$nombre','$apellido','$correo','$estilo','$fecha','$hora');";
    $reg = $bd->query($sql);
    header("Location:reservas.php");

  

?>