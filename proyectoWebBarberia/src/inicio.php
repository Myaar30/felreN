<?php
    // iniciar la sesion
    session_start();
    //el incluide trae todos los registros del archivo especificado y los deja como parte de este
    include ('baseDatos.php');
    $res = $bd -> query($sql);
?>

<!doctype html>
<html lang="es">
  <head>
    
    <title>LaBarberia</title>
    <link rel="icon" href="../img/favicon.gif">  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
  
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
                       <a  style="font-size: 28px; font-family:  Lato,sans-serif; border-radius: 15px;"  id= "text-nav" class="nav-link" href="inicio.php" > Inicio</a>
                   </li>
                 <li class="nav-item">
                   <a style="font-size: 28px; font-family:  Lato,sans-serif; border-radius: 15px;" id= "text-nav" class="nav-link" href="../src/nosotros.html"> Nosotros</a>
                   </li>
                 <li class="nav-item">
                   <a style="font-size: 28px; font-family:  Lato,sans-serif; border-radius: 15px;" id= "text-nav" class="nav-link" href="../src/servicios.html"> Servicios</a>
                   </li> 
               </ul>  
                                   
                  <a class= "d-none d-lg-block"href="inicio.php"> <img style = " margin-left: 12%; width: 80%;" src="../img/Labarberia1.png"  alt=""></a>
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
  
    
    
         <br>
        </div>
         
        </div>
        <img style="width: 100%;"   src="../img/LaBarberia.gif" alt="">
        
        

        
          
      <div style="background-color: rgb(255, 255, 255);"   class="container">
        <div class="row">     
         <hr>
         <br>
         <P style="text-align: center; font-style: italic;" id="conocenos">
           Conócenos
         </P>
         <p style="text-align: center; font-size: 25px;font-family: Playfair Display;color: #2f4778;">
          LaBarberia es un lugar diseñado para que te sientas cómodo y puedas potenciar aún más tu belleza 
          dejándolo en manos de expertos, nuestra misión es potenciar y fortalecer la belleza e imagen
          de las personas.
         </p>


        
        
        
        
      </div>
    </div>

      <hr  style="color: transparent;"  >
      <div  style="background-color: rgb(255, 255, 255);border-radius: 5px;" class="container">
        <div class="row">
          
          <p style="text-align: center; font-style: italic;" id="nuestrosClientes">
            Nuestros Clientes
          </p> 

          <div  style="width: 60%;text-align: center;margin-left: 20%;"  id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../img/personaBarberia1.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img  src="../img/personaBarberia2.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img  src="../img/personaBarberia3.png" class="d-block w-100" alt="...">
              </div>
             
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Siguiente</span>
            </button>
          </div>
            
         
        </div>
      </div>
        
   
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