<?php
include_once ('baseDatos.php');
$correo = $_POST['ingresoCorreo'];
$clave = $_POST['ingresoClave'];


session_start();
$_SESSION['correo']=$correo;
$_SESSION['clave']=$clave;



$consulta= "SELECT*FROM cuenta where correo='$correo' and clave='$clave'";
$resultado=mysqli_query($bd,$consulta);
$filas=mysqli_num_rows($resultado);



if($filas){
    header("Location:perfil.php");    

}else{
    include("cuenta.php");
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>
