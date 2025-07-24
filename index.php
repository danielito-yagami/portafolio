<?php 

include("./inc/conexion/conexion.php");
include("./inc/consultas/proyectosX.php");
include("./inc/consultas/tecnologiasX.php");
include("./inc/consultas/mensaje.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="/css/fontawesome/css/all.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Portafolio</title>
</head>
<body>
    <main class="fondoStyleIII">
   
    
    <!--Seccion navbar-->
        <?php include("templates/barra.php");?>


        <br><br><br>
        



    <!-------Seccion Presentation -->  
    
    <?php include("./templates/presentation.php");?>



    <!--Seccion work -->
          <br><br><br><br>
          <div class="row justify-content-center" id="work">

          <div class="col-11">

        <h2 class="blanco sombra-fuente text-center">Projects</h2>
        <br>
     <p class="text-center sombra-fuente sombra blanco">
These are some of my projects, they are functional demos, using pure php, mysql, sqlserver, jquery and laravel, in addition to jsp java EE.</p>
            

          </div>


       
         <?php include("templates/carrusel.php");?>   
        </div>
        <br><br>      
    <!--seccion del video -->
   <?php include("templates/video.php");?>
         
   <br><br>
         <?php include("templates/about.php");?> 
        <hr>
      


          <br><br><br><br><br><br><br>
         
    <!---Footer-->
        <?php include("templates/footer.php");?>  
        </main>
</body>
<script src="/js/Jquery3.17.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="/css/fontawesome/js/all.js"></script>
<script src="/js/carrusel.js"></script>
</html>