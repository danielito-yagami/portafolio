
<?php 

$proyectosX = new Proyectos();

$proyecto = $proyectosX->mostrar();

?>


<div class="row justify-content-center">

<div class="col-10">

<?php if(empty($proyecto)) :?>

<div class="card text-bg-dark">
    <div class="card-body border-warning">
        <h4 class="card-title">No hay proyectos para mostrar</h4>
        
    </div>
</div>

    
<?php else: ?>

<div id="carrusel" class="carousel slide" data-bs-ride="carousel">

<!--parte interna del carrusel-->

<div class="carousel-inner cuerpo-carrusel">
<?php $control = true;?>
<?php foreach($proyecto  as $p):?>
<!--- aqui usando un artimana solo se permite un active 
No importa el elemento  y despues se setea a false -->
<?php if($control):?>
<!----Carrusel primer ELEMENTO--->
<div class="carousel-item active">
<?php $control = false;?>
<?php else: ?>
<div class="carousel-item">
<?php endif;?>
<div class="card text-bg-dark border-success">
   
    <div class="card-body">
        <h4 class="card-title"><?php echo $p['nombreProyecto']; ?></h4>
        <p class="card-text"><?php echo $p['descripcionProyecto']; ?></p>
        <a href="<?php echo $p['link']?>"><button class="btn btn-outline-success">Probar proyecto</button></a>
        <img src="<?php echo $p['imagen'];?>" alt="" class=" card-img-top d-block w-90 imgCarrusel">

    </div>
</div>
</div>
<?php endforeach;?>

<!--
<img src="../img/carrusel/RostiZ.png" alt="" class="d-block w-100 imgCarrusel">
<div class="carousel-caption d-none d-md-block">
<div class="subtitulos">
<h6 class="blanco sombra-fuente text-center">RostiZ</h6>
<p>Pagina web de prueba de rosticeria usada en negocio</p>       
    </div>
</div>
-->

<!----------Carrusel fin primer elemento--->


<!------------------Carrusel ---->



</div>
</div>
<!--parte de los botones del carrusel-->

<button class="game" type="button" 
data-bs-target="#carrusel"
data-bs-slide="prev">
<i class="fa-solid fa-backward"></i>
Back</button>

<button class="game" type="button" 
data-bs-target="#carrusel"
data-bs-slide="next">
Next <i class="fa-solid fa-forward"></i>
</button>

<?php endif;?>

</div>



</div>



</div>





  
