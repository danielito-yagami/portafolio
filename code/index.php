
<?php 

//Parte de la seguridad 
//Siempre se iniciar con el session start y luego las variables de session 
session_start();


include("../inc/conexion/conexion.php");
include("../inc/consultas/proyectosX.php");
include("../inc/consultas/tecnologiasX.php");
include("../inc/consultas/mensaje.php");


if($_SESSION['control'] != 1){


header("Location: ./login.php");


}else {




}



?>







<!doctype html>
<html lang="en">
    <head>
        <title>Administrador</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

    <link rel="stylesheet" href="/css/styles2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="/css/fontawesome/css/all.css">
     
    </head>

    <body>
    
    <!---Boton del sidebar-->

    <button id="BSidebar" class="btn btn-secondary sombra position-fixed m-2 z-3">
    <i id="icono" class="fa-solid fa-times p-2"></i>
    </button>

    <!---Cuerpo de la aplicacion-->
    <div class="d-flex min-vh-100">

<!---Parte del side bar-->
    <div id="sidebar" class="sidebar fondoStyleIII p-0 m-1">
<!------Inicio---->
    <?php include("../templates/menuLateral.php");?>
<!------Fin de acordeon --->   
    </div>
<!----Parte de la administracion --->
    <div id="cuerpo"class="contenido fondoStyle">
<?php include("../templates/admin/invitado.php"); ?>
<?php include("../templates/admin/proyectos.php"); ?> 
<?php include("../templates/admin/tecnologias.php"); ?> 
<?php include("../templates/admin/about.php"); ?> 
    </div>

   


    </div>
<!----Parte de la administracion --->

    <!----Fin de cuerpo--->



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
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="../js/menus.js"></script>
        <script src="../js/aProyecto.js"></script>
        <script src="../js/proyectos.js"></script>
        <script src="../js/tecnologias.js"></script>
        <script src="../js/mensajes.js"></script>
        <script>


        //Poniendo el document on ready 

        //El objeto que tiene la clase .ver link y que se va a pulsar 
        //La solucion moderna es usar funcion flecha pero con eventos target
        $(document).on('click','.verlink',(e)=>{


            const linkX = $(e.currentTarget).data('link')

            //Para visitar otra pagina
            ver(linkX)



        })




        let botonSidebar = $("#BSidebar");
        let sidebar = $("#sidebar");
        let cuerpo = $("#cuerpo");
        let icono = $("#icono")
        botonSidebar.on('click',()=>{

            sidebar.toggleClass('collapsed');
           // cuerpo.toggleClass('col-11 col-lg-12')

           //Cambiando el icono 

           if(icono.hasClass('fa-bars')){

           icono.removeClass("fa-bars");
           icono.addClass("fa-times");


           }else{

            icono.removeClass("fa-times");
            icono.addClass("fa-bars");
           
           }



        });


        //Funcion para mostrar la descripcion 

        function des(id){

            let idDescripcion = "#des-"+id
            let btonid = "#btonDes-"+id
            console.log(idDescripcion)

            if($(idDescripcion).hasClass("d-none")){

            $(idDescripcion).attr("class","d-flex")
            $(btonid).text("ocultar")
            }else {

                $(idDescripcion).attr("class","d-none")
                $(btonid).text("ver descripcion")

            }

        }


        //Funcion para ver los links de los proyectos 
        function ver(lin){

            let link = lin

            //Para abrir una pestana web

            console.log(link)
            window.open(link,'_blank')
            

        }

        $("#cerrarInvitado").on('click',(e)=>{

            e.preventDefault()

            $("#invitado-texto").css("display","none")

        })

        </script>
    </body>
</html>
