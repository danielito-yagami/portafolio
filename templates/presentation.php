<?php


$query = new Mensajes();
$mensaje = $query->mostrarMensajeL(); 


 ?>


<div id="presentation"class="row">

</div>
<br><br><br>

<div class="row justify-content-center p-3">


<div class="col-8">



<h1 id="press"class="text-center blanco sombra-fuente animate__animated animate__flip animate__infinite infinite animate__slower">Welcome!!</h1>
<br>
<div class="card border-dark text-bg-dark sombra">

<div class="body-card p-3">
<?php if(empty($mensaje)):?>
<p>Without message!!</p>
<?php else:?>
<?php foreach($mensaje as $row) :?>
<p><?php echo $row['presentacion']?></p>
<?php endforeach;?>
<?php endif;?>
</div>
</div>



</div>


</div>