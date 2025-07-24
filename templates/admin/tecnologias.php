<?php

$query = new TecnologiasX();

$consulta = $query->mostrar();

?>
<div id="techX" class="row justify-content-center">

<div class="col-11 col-sm-11 col-lg-8">

<div class="card border-warning text-bg-dark sombra">
    <div class="card-header">
 <h4 class="card-title text-center">Tecnologias</h4>

    </div>
    <div class="card-body">
       
  <button type="button" data-bs-toggle="modal" data-bs-target="#modalTech"class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
       
<?php if(empty($proyectos)):?>
          <br><br>
          <h5 class="text-center text-bg-warning redondo p-2">No hay tecnologias para mostrar</h5>

<!---------Tabla de Tecnologias ----------------->
<?php else: ?>
<div
    class="table-responsive"
>
    <table
        class="table table-secondary">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">imagen</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
           <?php foreach($consulta as $fila):?>
            <tr class="">
                <td scope="row"><?php echo $fila['id']?></td>
                <td><?php echo $fila['nombre']?></td>
                <td><?php echo $fila['descripcion']?></td>
                <td><img src="<?php echo $fila['img']?>" alt="imagen" width="100" height="100"></td>
                <td>
                 
                <button data-id="<?php echo $fila['id']?>" data-bs-toggle="modal" data-bs-target="#emodalTech" class="btn btn-primary editar"><i class="fa-solid fa-file-pen"></i></button>
                 <?php if($_SESSION['rol']=="administrador"):?>
                <button data-id= "<?php echo $fila['id']?>"class="btn btn-danger borrar"><i class="fa-solid fa-eraser"></i></button>
                <?php else:?>
                <button disabled class="btn btn-danger borrar"><i class="fa-solid fa-eraser"></i></button>
                <?php endif;?>  
                </td>
            </tr>
          <?php endforeach;?>
        </tbody>
    </table>
</div>
<?php endif;?>


<!---------------------------------------------->
    </div>
</div>


</div>


</div>


<!------------Modal de tecnologias----->

<div class="modal fade" id="modalTech" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel"><span class="badge bg-success p-2">Agregar tecnologia</span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <form id="aTecnologia" action="" method="post">

        <label for="" class="form-label">Nombre:</label>
        <input id="nombreT"type="text" class="form-control" placeholder="Escribe un nombre de la tecnologia" required>
        <label for="" class="form-label">Descripcion:</label>
        <textarea id="desT" class="form-control" rows="6" placeholder="Escribe una descripcion" style="resize:none;"></textarea>
        <label for="" class="form-label">Imagen:</label>
        <input id="imgT"type="file" class="form-control" required>
        <hr>
        <?php if($_SESSION['rol'] == 'administrador'):?>
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





<!------------Modal de Edicion tecnologias----->

<div class="modal fade" id="emodalTech" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel"><span class="badge bg-info p-2">Editar tecnologia</span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <form id="eTecnologia" action="" method="post">
        <p id="idET" class="d-none"></p>
       
        <img id="imagenT"class="fluid mx-auto d-block"src="" alt="imagen" width="140px" height="140px">
        <br>
        <label for="" class="form-label">Nombre:</label>
        <input id="enombreT"type="text" class="form-control" placeholder="Escribe un nombre de la tecnologia" required>
        <label for="" class="form-label">Descripcion:</label>
        <textarea id="edesT" class="form-control" rows="6" placeholder="Escribe una descripcion" style="resize:none;" required></textarea>
        <label for="" class="form-label">Imagen:</label>
        <input id="eimgT"type="file" class="form-control" >
        <hr>
        <?php if($_SESSION['rol'] == 'administrador'):?>
        <button class="btn btn-outline-success" type="submit">agregar</button>
        <?php else:?>
        <button disabled class="btn btn-outline-success">agregar</button>
        <?php endif;?>

      </form>
    </div>
    </div>
  </div>
</div>

