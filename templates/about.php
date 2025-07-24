
<?php 

$tec = new TecnologiasX();
$tech = $tec->mostrar();


?>
<!-----------------------------------------------------------
<section class="row" id="about">
            <h2 class="text-center blanco 
            sombra-fuente">My Technologies</h2>
            <p class="text-center blanco sombra-fuente">This is the technologies
                with i develop
            </p>
            <br><br><br>
            <div class="row contenedor justify-content-center">
                <div class="col-10">
-->
                
                <!-----card tech---->

                <!-------
                <div class="row">
                <?php foreach($tech as $fila):?>
                <div class="col-6">
                <div class="card border-warning text-bg-dark">

                <div class="card-body">
                <div class="card-header">
                <h1 class="card-title"><?php echo $fila['nombre']; ?></h1>
                </div>
              
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores at vel aliquid accusantium quam quae iste. Eaque, fuga, distinctio quae at magni, architecto aspernatur quisquam adipisci consequatur neque doloribus esse!</p>
                </div>
                <div class="card-footer">
                </div>
                </div>
                </div>
                <?php endforeach?>
                </div>
                ----Card end-0--->
               <!-----
                </div>
            </div>
        </section>  

        ---->
<section id="about" class="py-5">
  <div class="container">
    <h2 class="text-center blanco sombra-fuente">My Technologies</h2>
    <p class="text-center blanco sombra-fuente">
      These are the technologies I develop with
    </p>

    <div class="row justify-content-center mt-4">
      <?php foreach ($tech as $fila): ?>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
          <div class="card border-warning text-bg-dark h-100">
            <div class="card-header">
              <h5 class="card-title"><?php echo $fila['nombre']; ?></h5>
              <img class="img-fluid mx-auto d-block redondo sombra"src="<?php echo $fila['img']?>" alt="imagen" width="100px" height="80px">
            </div>
            <div class="card-body">
              <p><?php echo $fila['descripcion']; ?></p>
            </div>
            <div class="card-footer text-end">
              <!-- puedes poner un botón, icono, etc -->
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>