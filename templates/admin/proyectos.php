
<?php 

$consulta = new Proyectos();

$proyectos = $consulta->mostrar();

?>
<div id="proyectosX" class="row justify-content-center">

<div class="col-12 col-sm-11 col-lg-8">

<div class="card border-warning text-bg-dark sombra">
    <div class="card-header">
 <h4 class="card-title text-center">Proyectos</h4>

    </div>
    <div class="card-body">
    <!---- Boton de modal------->
  <button type="button" data-bs-toggle="modal" data-bs-target="#modalProyectos"class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
       
 <?php if(empty($proyectos)):?>
          <br><br>
          <h5 class="text-center text-bg-warning redondo p-2">No hay proyectos para mostrar</h5>
<!-----Tabla----->
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
                <th scope="col">link</th>
                <th scope="col">imagen</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody id="aProyectos">

       
      
          <?php foreach($proyectos as $proyecto):?>
            <tr class="">
                <td scope="row"><?php echo $proyecto['idProyecto']?></td>
                <td><?php echo $proyecto['nombreProyecto'];?></td>
                <td><button id="<?php echo 'btonDes-'.$proyecto['idProyecto']?>" class="btn btn-secondary" onclick="des(<?php echo $proyecto['idProyecto'] ;?>)">ver descripcion</button>
                <br>
                  <p class="d-none"id="<?php echo 'des-'.$proyecto['idProyecto']?>"><?php echo $proyecto['descripcionProyecto'];?></p></td>
                <td><button class="btn btn-outline-info verlink" data-link="<?php echo htmlspecialchars( $proyecto['link'],ENT_QUOTES);?>">Ir al proyecto</button></td>
                <td><img src="<?php echo $proyecto['imagen']?>" alt="imagen" width="100" height="100"></td>
                <td><button id="<?php echo 'editar-'.$proyecto['idProyecto']?>"data-bs-toggle="modal" data-bs-target="#modalEdicion"class="btn btn-primary"><i id="<?php echo 'editar-'.$proyecto['idProyecto']?>" class="fa-solid fa-file-pen"></i></button><br>
                <?php if($_SESSION['rol'] == 'administrador'):?>
                <button id="<?php echo 'borrar-'.$proyecto['idProyecto']?>" class="btn btn-danger"><i id="<?php echo 'borrar-'.$proyecto['idProyecto']?>"class="fa-solid fa-eraser"></i></button>
                <?php else:?>
                <button disabled class="btn btn-danger"><i class="fa-solid fa-eraser"></i></button>
                <?php endif;?>
                </td>
            </tr>
          <?php endforeach;?>
       
        </tbody>
    </table>
</div>
   <?php endif;?>



<!------------------------------>

    </div>
</div>


</div>


</div>



<!------------Modal de proyectos----->

<div class="modal fade" id="modalProyectos" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel"><span class="badge bg-success p-2">Agregar proyecto</span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <form id="aProyectoX"action="" method="post">

        <label for="" class="form-label">Nombre:</label>
        <input id="nombre" type="text" class="form-control" placeholder="Escribe un nombre del proyecto">
        <label for="" class="form-label">Descripcion:</label>
        <textarea id="descripcion" class="form-control" rows="6" placeholder="Escribe una descripcion del proyecto" style="resize:none;"></textarea>
        <label for="" class="form-label">Link:</label>
        <input  id="link"type="text" class="form-control" placeholder="Ingresa la url del proyecto">
        <label for="" class="form-label">Imagen:</label>
        <input id="imagen"type="file" class="form-control" required>
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




<!------------Modal de edicion proyectos----->

<div class="modal fade" id="modalEdicion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel"><span class="badge bg-info p-2">Editar proyecto</span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <form id="eProyectoX"action="" method="post">
        <p id="idProyecto" style="display:none"></p>
        <label for="" class="form-label">Nombre:</label>
        <img class="border-primary" id="imagenE"src="" alt="img" height="100px" width="100px">
        <input id="nombreE" type="text" class="form-control" placeholder="Escribe un nombre del proyecto" required>
        <label for="" class="form-label">Descripcion:</label>
        <textarea id="descripcionE" class="form-control" rows="6" placeholder="Escribe una descripcion del proyecto" style="resize:none;" required></textarea>
        <label for="" class="form-label">Link:</label>
        <input  id="linkE"type="text" class="form-control" placeholder="Ingresa la url del proyecto" required>
        <label for="" class="form-label">Imagen:</label>
        <input id="imagenEX"type="file" class="form-control">
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



<!-------------Fin de modal edicion-------------->
