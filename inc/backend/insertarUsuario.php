<?php
include("../../inc/conexion/conexion.php");
include("../../inc/consultas/proyectosX.php");

//Validando los datos
/*
$nombre = "";
$descripcion = "";
$link = "";
$img = "";
*/
//echo "control".$_POST['link'];

if(isset($_POST['nombre'])){



$nombre = $_POST['nombre'];

}

if(isset($_POST['descripcion'])){

$descripcion = $_POST['descripcion'];

}

if(isset($_POST['link'])){

$link = $_POST['link'];

}

if(isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0){

$img = $_FILES['imagen'];

}

/*

Este codigo es para subir una imagen 
FILES['foto']['error'] == 0 para ver si no hubo error al subir archivo
if(isset($_FILES['foto']) && $_FILES['foto']['error'] == 0){
    $nombre = $_FILES['foto']['name'];
    $temporal = $_FILES['foto']['tmp_name'];
    $destino = "uploads/" . $nombre;

    move_uploaded_file($temporal, $destino);
    echo "Imagen subida con éxito.";
}

 */



if(isset($_POST['foto'])){

$foto = $_POST['foto'];

}

echo $foto;

//Para subir la imagen
//definiendo el directorio de la foto 

$directorio = "../../img/proyectos/";

//Para evitar ataques DDOS

$ruta = $directorio.basename($foto);

//Ahora se obtiene la ruta temporal del archivo para subirlo
//Se valida 

$imagenSubida = $img['tmp_name'];


if($imagenSubida != ""){

    if(move_uploaded_file($imagenSubida, $ruta)){

        $insertar = new Proyectos();

        $insertar->insertarProyectos($nombre, $descripcion, $ruta, $link);

        echo "1";

       

    }else {


        echo "No se pudo subir la foto";
    }

}


?>