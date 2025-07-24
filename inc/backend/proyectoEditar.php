<?php

include("../../inc/conexion/conexion.php");
include("../../inc/consultas/proyectosX.php");


if(isset($_POST['id'])){


    $id = $_POST['id'];
}

if(isset($_POST['nombre'])){


    $nombre = $_POST['nombre'];
}
if(isset($_POST['descripcion'])){


    $descripcion = $_POST['descripcion'];
}
if(isset($_POST['link'])){


    $link = $_POST['link'];
}
if(isset($_POST['nombreImagen'])){


    $nombreFoto = $_POST['nombreImagen'];
}else {

    $nombreFoto = "";

}
if(isset($_POST['ruta'])){


    $ruta = $_POST['ruta'];
}


if(isset($_FILES['imagen']) && $_FILES['imagen']['error']== 0){


    $img = $_FILES['imagen'];
}


//Separando por los casos donde se envian una imagen
//O el caso donde no se actualiza la imagen


if($nombreFoto == ""){

//Sin actualizar la foto

$actualizar = new Proyectos();

$editar = $actualizar->editarProyectos($id, $nombre, $descripcion, $nombreFoto,$link);

echo "0";


}else {

//obteniendo la ruta de la imagen 

if(file_exists($ruta)){

unlink($ruta);

//imagen subida 

$imagenSubida  = $img['tmp_name'];

$directorio = "../../img/proyectos/";

$rutaImagen = $directorio.basename($nombreFoto);

if(move_uploaded_file($imagenSubida,$rutaImagen)){

$editar = new Proyectos();

$editarX = $editar->editarProyectos($id, $nombre, $descripcion, $rutaImagen,$link);

echo "1";

}

}else{




    //No existe la foto por alguna razon 
$imagenSubida  = $img['tmp_name'];

//echo "La imagen subida es ".$imagenSubida;

$directorio = "../../img/proyectos/";

$rutaImagen = $directorio.basename($nombreFoto);

if(move_uploaded_file($imagenSubida,$rutaImagen)){

$editar = new Proyectos();

$editarX = $editar->editarProyectos($id, $nombre, $descripcion, $rutaImagen,$link);



    echo "2";
}



}


}









?>