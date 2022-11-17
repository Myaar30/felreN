<?php
    session_start();
    include_once ('baseDatos.php'); 
    $nombre = $_POST['nombres'];
    $correo = $_POST['correos'];
    $motivo = $_POST['motivo'];



    $sql = "insert into contacto values(null,'$nombre','$correo','$motivo');";
    


   

    $reg = $bd->query($sql);
    header("Location:contacto.php");

  

?>