<!doctype html>
<html lang="es">
  <head>
    <title>Contacto</title>
    <link rel="icon" href="../img/favicon.gif">  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/modal.js"></script>
  </head>
<body>
  <!-- ENCABEZADO PAG -->
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
                   <a style="font-size: 28px; font-family:  Lato,sans-serif; border-radius: 15px;" id= "text-nav" class="nav-link" href="../src/nosotros.html"> Nosotros</a>
                   </li>
                 <li class="nav-item">
                   <a style="font-size: 28px; font-family:  Lato,sans-serif; border-radius: 15px;" id= "text-nav" class="nav-link" href="../src/servicios.html"> Servicios</a>
                   </li> 
               </ul>  
                                   
                  <a class= "d-none d-lg-block"href="../index.php"> <img style = " margin-left: 12%; width: 80%;" src="../img/Labarberia1.png"  alt=""></a>
               <ul class="navbar-nav ms-auto">
                 
                 <li class="nav-item ">
                   <a style="font-size: 28px; font-family:  Lato,sans-serif; border-radius: 15px;" id= "text-nav" class="nav-link" href="../src/contacto.php"> Contacto</a>
                 </li>
                 <li class="nav-item ">
                   <a style="font-size: 28px; font-family:  Lato,sans-serif; border-radius: 15px;" id= "text-nav" class="nav-link" href="../src/cuenta.php"> Cuenta</a>
                 </li>
               </ul>
                               
             </div>
             
           </div>
           
         </nav>  
            <!-- ENCABEZADO PAG -->
    <br>
   </div>
    
   </div>
  
   
   

     
 <div style="background-color: rgb(255, 255, 255);"   class="container">
   <div id="boxx" class="row">     
    <hr>
    
    <p style="text-align: center; font-style: italic;" id="contacto"> 
        Contacto
    </P>
    
     <div class="datosContacto">
         <div class="datosContacto">
            <p style="font-family: Tapestry;font-style: italic;font-size: 25px;" id="telefono">— Teléfono — <br> +56 9 12345678</p>
            <p  style="font-family: Tapestry;font-style: italic;font-size: 25px;">— Whatsapp — <br> +56 9 12345678</p>
            <p  style="font-family: Tapestry;font-style: italic;font-size: 25px;">— Email — <br> LaBarberia@gmail.com</p>
         </div>
        

        
         
    <section class="Formulario-contacto">
        <h4 style="text-align: center;color: rgb(0, 0, 0);">¡Comunícate con nosotros!</h4>
        <br>
        <form action="ingresoContacto.php" method="post">
       <input class = "barras" type="text" name="nombres" id="nombres" placeholder="Nombre" required>
       <input class = "barras" type="email" name="correos" id="correos" placeholder="Email" required>
       <textarea class="Motivocontacto" name="motivo" placeholder="Motivo de contacto" required></textarea>
   
       <input class = "boton1" type="submit" value="Enviar &#10132;" name="botonEnviar"  > 
       </form>
       
   </section>
  
</div>
   
<p style="text-align: left; font-style: italic;font-size: 35px;">
    Nos ubicamos en  <img style="width: 3%;"  src="../img/ubicacion_black.png" alt="">
  </p> 
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d798.4297319067242!2d-73.04759839464029!3d-36.82525467556435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9669b5d19369618d%3A0x30f5f9d2451464a2!2zQmFycm9zIEFyYW5hLCBDb25jZXBjacOzbiwgQsOtbyBCw61v!5e0!3m2!1ses!2scl!4v1650854606627!5m2!1ses!2scl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
 </div>
</div>


 <hr  style="color: transparent;"  >
   

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

   </div>

   
     
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
</html>