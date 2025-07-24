<?php
ob_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include("../../inc/conexion/conexion.php");
include("../../inc/consultas/tecnologiasX.php");

//Asignando el valor de imagen a null 

$imagen = null;

if(isset($_POST['id'])){

$id = $_POST['id'];

}

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
    
}else {

$nombreFoto = "";


}
if(isset($_POST['ruta'])){

    $rutaImagen = $_POST['ruta'];
}


//Creando respuesta general para enviar como JSON

$respuesta = array("codigo"=>"","titulo"=>"");
$res1 = "Tecnologia editada con exito";
$res2 = "No se pudo actualizar la tecnologia";

//Caso para actualizar sin subir foto



if($nombreFoto == ""){

    //Aqui va el controlador

    $editar = new TecnologiasX();
    $up = $editar->editarTecnologias($id, $nombre, $descripcion, $nombreFoto);
    
    $respuesta['codigo'] = "1";
    $respuesta['titulo'] = $res1;
    


}else {

    

//Caso para subir la imagen

//Validando que existe la imagen para subirla
$directorio = "../../img/tecnologias/";

$ruta = $directorio.basename($nombreFoto);

//ruta temporal de la imagen

$imagenSubida = $imagen['tmp_name'];


if(file_exists($rutaImagen)){

  echo "Depuracion si existe imagen";
    //borrando la imagen anterior 

    unlink($rutaImagen);

  


if(move_uploaded_file($imagenSubida, $ruta)){

    //Aqui va el controlador
     $editar2 = new TecnologiasX();
     $up2 = $editar2->editarTecnologias($id, $nombre, $descripcion, $ruta);
    

    $respuesta['codigo'] = "2";
    $respuesta['titulo'] = $res1;
 

}else {

    $respuesta['codigo'] = "3";
    $respuesta['titulo'] = $res2;
 
}

}else {

 //Cuando por alguna razon la imagen no existe en el servidor
 move_uploaded_file($imagenSubida,$ruta);

 $editar3 = new TecnologiasX();
 $up3 = $editar3->editarTecnologias($id, $nombre, $descripcion, $ruta);

 $respuesta['codigo'] = "4";
 $respuesta['titulo'] = $res1;


}



}

header('Content-Type: application/json');
ob_clean();
echo json_encode($respuesta);
exit;
?>