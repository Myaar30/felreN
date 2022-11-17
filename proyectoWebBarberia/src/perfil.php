<?php
  session_start();
  if(!isset($_SESSION["correo"])){

    header("location:cuenta.php");
  }
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="icon" href="../img/favicon.gif"> 
    <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/perfil.css">
    <script src="../js/verContrasena.js"></script>
   <!--====  BORRAR CUANDO SEA NECESARIO LO DE ABAJO  ====-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    
</head>
  


<body>


    <section class="seccion-perfil-usuario">
        <div class="perfil-usuario-header">
            <div class="perfil-usuario-portada">
                <div class="perfil-usuario-avatar">
                    <img src="../img/Avatar-PNG.png" alt="img-avatar">
                </div>
            </div>
        </div>
        <div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">
                <h3 class="titulo"> <?php echo $_SESSION["correo"]; ?></h3>
                <br><p  class="texto">Gracias por registrarte en LaBarberia, ¡Aquí puedes cambiar tu contraseña cuando lo necesites!</p>
            </div>

            <div class="perfil-usuario-footer">
            <ul class="lista-datos">
                <h4 class = "subtitle">Cambiar Contraseña </h4><br>
                <form action="modificarContrasena.php" method="post">
                    <li><i class="icono fas fa-lock"></i> Contraseña actual:</li>              
                    <input  type="password" name="claveActual"   id="claveActual" >
                    <i class="icono fas fa-eye" name="wf" onclick="mostrar()"></i>

                    <li><i class="icono fas fa-key"></i> Nueva contraseña:</li>
                    <input  type="password" name="nuevaClave" id="nuevaClave"  >
                    <i class="icono fas fa-eye" name="wf2" onclick="mostrar2()"></i>

                    <li><i class="icono fas fa-key"></i> Confirmar contraseña:</li>
                    <input  type="password" name="confirmacionClave" id="confirmacionClave" >
                    <i   class="icono fas fa-eye" name="wf3" onclick="mostrar3()"></i><br><br>
                        
                    <input type="submit" value="Guardar Cambios" name="guardar" id="guardar"> 
                    </ul>

                    <a href="cerrarSesion.php" ><img name="cerrarSesion" id="cerrarSesion" src="../img/cerrarSesion.png" alt=""></a> 
                    <h4  id="cerrarSesionT"> Cerrar Sesión</h4>
                </form>
                    
            </div>

            </div><br>
            <div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">

                <a  style="text-align: center; font-size: 25px;font-family: Playfair Display; " class="titulo" href="../src/reservas.php">Realiza tu reserva aquí!</a>
                
            </div>
            </div>
            
        </div>
    </section>
    <!--====  End of html  ====-->


<br><br><br>
</body>
<footer class="pie-pagina">
            <div class="grupo1">
            <hr>
               <p style="font-family: Square Peg;">Desde 1982. La Barbería &copy; Todos los Derechos Reservados.</p> 
            </div>          
                         
 </footer>

</html>