<!doctype html>
<html lang="es">
  <head>
    
    <title>Reservas</title>
    <link rel="icon" href="../img/favicon.gif">  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/hacerReserva.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS v5.0.2 -->


       
  
  </head>
  <body>
  <?php
  session_start();
  if(!isset($_SESSION["correo"])){

    header("location:cuenta.php");
  }
  ?>




<!-- ENCABEZADO PAG -->
<header>
<div  style="background-color: rgb(255, 255, 255);"   class="container">
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
                                 
                <a class= "d-none d-lg-block"href="inicio.php"> <img style = " margin-left: 12%; width: 80%;" src="../img/Labarberia1.png" alt=""></a>
             <ul class="navbar-nav ms-auto">
               <li class="nav-item">
                 <a style="font-size: 28px; font-family:  Lato,sans-serif; border-radius: 15px;" id= "text-nav" class="nav-link" href="reservas.php"> Reservas</a>
               </li>
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
</header>
  <br>
 </div>
  
</div>
<br>
<!--Hacer Reservas-->
<div class="container">
  <div class="row">
    <div class="col">
    <div class="poste">
        <img src="../img/poste.gif" alt="">
      </div>
    </div>

    <div class="col" style="background-color: black">
    <div class="formulario">
    <main>
  <section class="cabecera-formulario text-center">
    <div class="container">
      <div class="row">
        <div class="col_12">
          <br>
          <h1 >¡Realiza tu reserva aquí! </h1>
        </div>
      </div>
    </div>
  </section>
  <section class="container" >
    <div class="row my-5">
    <div class="col-sm-12 col-md-12 col-lg-12">
      <form action="crearReserva.php" method="post">

        <div class="form-group">
          <label>Nombre:</label>
          <input type="text" placeholder="Ingrese su nombre" maxlength="25" id="nombre" name="nombre" class="form-control" required>
       </div>
       <div class="form-group">
          <label>Apellido:</label>
          <input type="text" placeholder="Ingrese su apellido" maxlength="25" id="apellido" name="apellido" class="form-control" required>
       </div>
       <div class="form-group">
          <label>Ingrese su Correo:</label>
          <input type="text" placeholder="Ingrese su correo" maxlength="25" id="correo" name="correo" class="form-control" value="<?php echo $_SESSION["correo"]; ?>" >
       </div>
       <!--FECHA-->
       <div class="form-group">
        <label>Fecha:</label>
         <input type="date" class="form-control" min="2022-06-27" max="2022-12-30"   id="fecha" name="fecha" class="form-control" required>
        </div>
        <!--FECHA-->
        
        <div class="form-group">
        <label>Hora:</label>
         <input type="time" class="form-control" max="21:00:00" min="10:00:00" id="hora" name="hora" class="form-control" required>
        </div>
        <!--hora-->
        
       <div class="form-group">
        <label for="especificar" class="form-label">Especificaciones de corte</label>
        <textarea class="form-control" id="especificar" name="especificar" placeholder="Especificacion de corte" rows="6" required></textarea>
        
       </div>
       <br>
       <div class="form-group">
        <button type="submit" class="btn btn-primary">Reservar</button>
        <a href="" class="btn btn-danger">Limpiar todo (Cancelar Reserva)</a>
       </div>
      </form>
    </div>
    </div>
  </section>

 
</main>
</div>
    </div>
  <br>
    <div class="col">
      <div class="poste1">
        <img src="../img/poste.gif" alt="">
      </div>
    
    </div>
  </div>
</div>
<br>
</body>
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
 