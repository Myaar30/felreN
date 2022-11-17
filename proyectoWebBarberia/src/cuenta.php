<?php
  session_start();
  include ('baseDatos.php');
    // iniciar la sesion
  
    //el incluide trae todos los registros del archivo especificado y los deja como parte de este
  


   // $sql = 'select nombre, apellido,mail ,contraseña from 2_BD_47;';
    //$reg = $bd -> query($sql);



?>

<!doctype html>
<html lang="es">
  <head>
    
    <title>Cuenta</title>
    <link rel="icon" href="../img/favicon.gif">  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/registrarCuenta.css">
    <link rel="stylesheet" href="../css/inicioSesion.css">

       
  
  </head>
<body>

<!-- ENCABEZADO PAG -->
<div  style=""   class="container">
        <div class="row">
           <nav class="navbar navbar-expand-lg navbar-light ">
               <div class="container-fluid">
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav me-auto">
                     <li class="nav-item">
                           <a  style="font-size: 28px; font-family:  Lato,sans-serif; border-radius: 15px;"  id= "text-nav" class="nav-link" href="../index.php" > Inicio</a>
                       </li>
                     <li class="nav-item">
                       <a style="font-size: 28px; font-family:  Lato,sans-serif; border-radius: 15px;" id= "text-nav" class="nav-link" href="nosotros.html"> Nosotros</a>
                       </li>
                     <li class="nav-item">
                       <a style="font-size: 28px; font-family:  Lato,sans-serif; border-radius: 15px;" id= "text-nav" class="nav-link" href="servicios.html"> Servicios</a>
                       </li> 
                   </ul>  
                                       
                      <a class= "d-none d-lg-block"href="../index.php"> <img style = " margin-left: 12%; width: 80%; " src="../img/Labarberia1png.png" alt=""></a>
                   <ul class="navbar-nav ms-auto">
                     
                     <li class="nav-item ">
                       <a style="font-size: 28px; font-family:  Lato,sans-serif; border-radius: 15px;" id= "text-nav" class="nav-link" href="contacto.php"> Contacto</a>
                     </li>
                     <li class="nav-item ">
                       <a style="font-size: 28px; font-family:  Lato,sans-serif; border-radius: 15px;" id= "text-nav" class="nav-link" href="cuenta.php"> Cuenta</a>
                     </li>
                    
                   </ul>
                                   
                 </div>
                 
               </div>
               
             </nav>  
                <!-- ENCABEZADO PAG -->
        <br>
       </div>
        
</div>



<!--Registro de cuenta-->
<section class="form-register">
  <h4>Regístrate</h4>
  <form action="registro.php" method="post">
  <input class="controls" type="text" name="nombreApellido" id="nombreApellido"  placeholder="Nombre Completo (requerido)" maxlength="60" required>
  <input class="controls" type="text" name="direccion" id="direccion" placeholder="Direccion (requerido)" maxlength="70" required>
  <input class="controls" type="text" name="telefono" id="telefono" placeholder="Telefono (requerido)"  maxlength="9" required>
  <input class="controls" type="email" name="correo" id="correo" placeholder="Correo (requerido)"  maxlength="30" required >
  <input class="controls" type="password" name="clave" id="clave" placeholder="Contraseña (requerido)" maxlength="15" required>
  <input class="controls" type="password" name="cclave" id="cclave" placeholder="Confirmar contraseña (requerido)" maxlength="15" required>
  <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
  <input class="botons" type="submit" value="Registrar" >

  <p><a href="#" type="text" class="" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap" >¿Ya tienes una Cuenta?</a></p>
</form>
<!--Registro de cuenta-->


</section>
<!--Iniciar Sesion-->

<div>
<form action="logeo.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 id="iniciarText" class="modal-title" id="exampleModalLabel">Iniciar sesión</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="mb-3">
            <label  id="labelCorreo"  for="recipient-name" class="col-form-label">Correo:</label><br>
            <input class="logeoControles" type="email" name="ingresoCorreo" id="ingresoCorreo" placeholder="Ingrese su Correo" required>
          </div>
          <div class="mb-3">
            <label id="labelContraseña" for="message-text" class="col-form-label">Contraseña:</label><br>
            <input class="logeoControles" type="password" name="ingresoClave" id="ingresoClave" placeholder="Ingrese su Clave" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" value="Ingresar"  class="btn btn-primary">Iniciar sesión</button>
      </div>
    </div>
  </div>
</div>
</div>

 <br>
  <br>

  <!--Iniciar Sesion-->
 <!-- PIE DE PAGINA -->
            
<footer class="pie-pagina">
            <div class="grupo1">
              <div class="box">
                
                <img style="width: 100%;margin-right: 100%;"  src="../img/LaBarberiaB.png" alt=""> 
                <p style="text-align: left;margin-left: 5%;"> <img style="width: 18px;margin-right: 8px;"  src="../img/telefonoContacto.png" alt="">+56 9 12345678<br>
                <img  style="width: 18px;margin-right: 8px; " src="../img/ubicacion.png" alt=""> Local 9033, Barros Arana, Concepción <br>
                <img  style="width: 18px;margin-right: 8px; " src="../img/gmailVector.png" alt=""> LaBarberia@gmail.com           
                </p>  
                </div>
                
                 <div class="box">
                   <h2 style="margin-left: 90px;font-family: Ms Madi;">Siguenos en:</h2>
                   <div class="redessociales">
                     <div class="d-flex justify-content-start">
                        <img style="height: 40px;" src="../img/facebookVector.png" title="Facebook">
                        <a href="https://www.facebook.com" class="facebook text-decoration-none text-light">Facebook</a>
                     </div>
                     <div class="d-flex justify-content-start">
                      <img style="height: 40px;" src="../img/instagramVector.png" title="Instagram">
                      <a href="https://www.instagram.com" class="instagram text-decoration-none text-light">Instagram</a>
                    </div>
                    <div class="d-flex justify-content-start">
                      <img style="height: 40px;"   src="../img/twiterVector.png" title="Twitter">
                      <a href="https://twitter.com" class="twitter text-decoration-none text-light">Twitter</a>
                    </div>
                               
                   </div>
                </div>
                
              </div>  
              <hr>
               <p style="font-family: Square Peg;">Desde 1982. La Barbería &copy; Todos los Derechos Reservados.</p> 
             
 </footer>
 <!-- PIE DE PAGINA -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>