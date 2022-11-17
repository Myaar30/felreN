<?php
   //host del servidor
   $host = 'localhost';
   $usu = '';
   $pass = '';
   $bbdd = '';
   //conector a la base de datos 
   $bd = new mysqli();
   // se genera la conexion
   $bd ->connect($host,$usu,$pass,$bbdd);
 //  $conexion=mysqli_connect("cs.ilab.cl","2_BD_47","9Cu37fQU1Zj3qDao","2_BD_47");
        
?>
