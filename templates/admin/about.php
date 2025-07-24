
<?php 

$query = new Mensajes();

$mostrar = $query->mostrarMensajes();


?>


<div id="aboutX" class="row justify-content-center">

<div class="col-11 col-sm-11 col-lg-8">

<div class="card border-warning text-bg-dark sombra">
    <div class="card-header">
 <h4 class="card-title text-center">Mensaje de CV</h4>

    </div>
    <div class="card-body">
       
  <button type="button" data-bs-toggle="modal" data-bs-target="#modalAbout"class="btn btn-success"><i class="fa-solid fa-plus"></i></button>


  <!-----Tabla de About---->

  <!----Para mostrar si no hay mensajes -->
<?php if(empty($mostrar)):?>
 <br><br>
          <h5 class="text-center text-bg-warning redondo p-2">No hay mensajes para mostrar</h5>
<?php else: ?>
  <div
    class="table-responsive"
>
    <table
        class="table table-secondary">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Mensaje</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach($mostrar as $row):?>
            <tr class="">
                <td scope="row"><?php echo $row['id']; ?></td>
                <td><?php echo $row['presentacion'];?></td>
                <td>
                <button data-id = "<?php echo $row['id'];?>" data-bs-toggle="modal" data-bs-target="#emodalAbout" class="btn btn-primary eMensaje"><i class="fa-solid fa-file-pen"></i></button>
                <?php if($_SESSION['rol']=='administrador'):?>
                <button data-id="<?php echo $row['id'];?>" class="btn btn-danger bMsj"><i class="fa-solid fa-eraser"></i></button></td>
                <?php else:?>
                <button disabled class="btn btn-danger bMsj"><i class="fa-solid fa-eraser"></i></button></td>
                <?php endif;?>
              </tr>
          <?php endforeach;?>
        </tbody>
    </table>
</div>
<?php endif;?>

<!--------Fin de la tabla ---->       
    </div>
</div>


</div>


</div>




<!------------Modal de tecnologias----->

<div class="modal fade" id="modalAbout" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel"><span class="badge bg-success p-2">Agregar Mensaje de presentacion</span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <form id="form-About" action="" method="post">

       
        <label for="" class="form-label">Mensaje:</label>
        <textarea id="mensajeA"class="form-control" rows="6" placeholder="Escribe la presentacion como desarrollador" style="resize:none;" required></textarea>
        
        <hr>
        <?php if($_SESSION['rol']=="administrador"):?>
        <button class="btn btn-outline-success" type="submit">agregar</button>
        <?php else:?>
        <button disabled class="btn btn-outline-success">agregar</button>

        <?php endif;?>


      </form>
    </div>
    </div>
  </div>
</div>



<!-------------Fin de modal -------------->





<!------------Modal de editar mensajes----->

<div class="modal fade" id="emodalAbout" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel"><span class="badge bg-info p-2">Editar Mensaje de presentacion</span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <form id="form-eAbout" action="" method="post">

        <p id="mensaje-id" class="d-none"></p>
        <label for="" class="form-label">Mensaje:</label>
        <textarea id="mensajeE"class="form-control" rows="6" placeholder="Escribe la presentacion como desarrollador" style="resize:none;" required></textarea>
        
        <hr>
        <?php if($_SESSION['rol']=="administrador"):?>
        <button class="btn btn-outline-success" type="submit">agregar</button>
        <?php else:?>
        <button disabled class="btn btn-outline-success">agregar</button>

        <?php endif;?>


      </form>
    </div>
    </div>
  </div>
</div>



<!-------------Fin de modal -------------->