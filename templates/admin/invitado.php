<br>
<?php if($_SESSION['rol'] != 'administrador'):?>
<div id="invitado-texto" class="text-bg-dark m-2 position-relative">
<div class="row d-flex">
<div class="col-12 col-sm-11 col-lg-8">
<br>
<br>
<h2 class="text-center  border-warning text-warning">Cuenta invitado</h2>
<p class="border-danger p-2 m-2">
Panel de administrador como eres invitado solo puedes ver los elementos
ingresados pero no puedes borrar, editar o agregar proyectos, tecnologias o presentacion
Esta cuenta se hizo para que el reclutador viera el estilo de la plataforma 
es cuenta de invitado    
</p>
</div>

</div>
<!---para poner un boton de cerrar usando boostrap 5-->
<div class="position-absolute top-0 end-0">
<button id="cerrarInvitado" class="btn btn-danger">
<i class="fa-solid fa-times"></i>    
</button>    
</div>
<!---parte del boton ---->    
</div>

<?php else:?>
<?php endif;?>