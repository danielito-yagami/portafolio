
    
<br><br>
    <h6 class="text-center p-3 blanco redondo sombra m-2">
        <img class="redondo m-0 p-0"src="../img/icon/apple-icon-72x72.png" alt="dax" height="70px" width="70px"><br>    
    Menu de <?php echo $_SESSION['rol'];?></h6>
    <hr>
    <p class="blanco p-2 m-2">Bienvenido <span class="badge text-bg-warning"><?php echo $_SESSION['correo']; ?></span></p>


<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button id="proyectos"class="accordion-button text-bg-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Seccion de Proyectos
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p class="">En esta seccion se agregan los proyectos que he hecho, tambien se pueden editar y borrar</p>
             </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button id="tech" class="accordion-button collapsed text-bg-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Seccion de Tecnologias
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p class="">En esta seccion se agregan los tecnologias que he utilizado, tambien se pueden editar y borrar</p>
        
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button id="about" class="accordion-button collapsed text-bg-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Seccion About me
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p class="">En esta seccion se muestra el mensaje de bienvenida del portafolio</p>
         
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed text-bg-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#session" aria-expanded="false" aria-controls="collapseThree">
        Cerrar Sesion
      </button>
    </h2>
    <div id="session" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
 
        <a href="../inc/backend/cerrar.php"><button class="btn btn-outline-dark">Salir de sesion</button></a>  
    </div>
    </div>
  </div>
</div>
    