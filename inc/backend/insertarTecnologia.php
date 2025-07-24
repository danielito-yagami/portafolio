<?php

//Ob_start para limpiar la respuesta del servidor

ob_start();

include("../../inc/conexion/conexion.php");
include("../../inc/consultas/tecnologiasX.php");

if(isset($_POST['nombre'])){

$nombre = $_POST['nombre'];


}
if(isset($_POST['des'])){


$descripcion = $_POST['des'];
    
}
if(isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0){


$imagen = $_FILES['imagen'];
    
}

if(isset($_POST['nombreFoto'])){

$nombreFoto = $_POST['nombreFoto'];
    
}

//respuesta del servidor 

$respuesta = array("codigo"=>"","titulo"=>"");

//Caso para subir la imagen

$directorio = "../../img/tecnologias/";

$ruta = $directorio.basename($nombreFoto);

//ruta temporal de la imagen

$imagenSubida = $imagen['tmp_name'];

if($nombreFoto == ""){

    //Aqui va el controlador

    $insertar = new TecnologiasX();
    $agregar = $insertar->insertarTecnologias($nombre, $descripcion, $ruta);

    $respuesta['codigo'] = "0";
    $respuesta['titulo'] = "Tecnologia agregada con exito";

}else {

if(move_uploaded_file($imagenSubida, $ruta)){

    //Aqui va el controlador
     $insertar = new TecnologiasX();
     $agregar = $insertar->insertarTecnologias($nombre, $descripcion, $ruta);


     $respuesta['codigo'] = "1";
     $respuesta['titulo'] = "Tecnologia agregada con exito";

}else {

    $respuesta['codigo'] = "3";
    $respuesta['titulo'] = "No se pudo agregar la tecnologia";

}

}
//Borrando el buffer
ob_clean();
//Enviando la respuesta

echo json_encode($respuesta);

exit;

?>