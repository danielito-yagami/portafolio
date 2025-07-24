<!doctype html>
<html lang="en">
    <head>
        <title>Login</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="/css/styles2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="/css/fontawesome/css/all.css">
    </head>

    <body class="fondo">
    
    <br>



        <?php include("../templates/videoFondo.php");?>

        <div class="row justify-content-center">
        <div class="col-7">


        <div class="card border-warning text-bg-dark sombra">

        <div class="card-header">
        <img class="redondo sombra"src="../img/icon/apple-icon-144x144.png" alt="" >
        <h5 class="card-title">

        </h5>
        </div>
        <div class="card-body">
        <p class="text-center text-success">Cuenta de Invitado<br>usuario: <b class="blanco">correo@prueba.com</b><br>password: <b class="blanco">1234</b> </p>

        <form action="../inc/backend/inicio.php" method="post">
        

        <div class="row justify-content-center p-2">

        <div class="col-10">

        <label for="" class="form-label">Correo electronico:</label>
        <input type="text" class="form-control" placeholder="Correo electronico" name="correo" required>
        <label for="" class="form-label">Contraseña:</label>
        <input type="password" class="form-control" placeholder="Contraseña" name="pass" required>
        <hr>
        <button class="btn btn-outline-danger sombra">inicio</button>
        <hr>
        <button id="regresar" class="btn btn-outline-secondary blanco">regresar</button>

        </div>

        </div>

       
        </form>
       

        </div>
        </div>

        </div>
        </div>

        <br><br><br><br><br><br>
       

        <footer>
            <?php include("../templates/footer.php");?>
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
        <script src="../js/Jquery3.17.js"></script>
        <script>

        $("#regresar").on('click', function(e){


            e.preventDefault()

            location.replace("../index.php")


        })



        </script>
    </body>
</html>






