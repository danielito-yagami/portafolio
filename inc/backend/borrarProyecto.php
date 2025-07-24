<?php

include("../../inc/conexion/conexion.php");
include("../../inc/consultas/proyectosX.php");


if(isset($_POST['id'])){


$id = $_POST['id'];


}

//Buscando la imagen con una consulta

$direccion  = new Proyectos();

$img = $direccion->mostrarProyecto($id);

//Usando foreach para asignarlo

$imagenX = "";

foreach($img as $imagen){


$imagenX = $imagen['imagen'];


}

if(isset($imagenX)){



if(file_exists($imagenX)){

//borrando la imagen del servidor

unlink($imagenX);

$borrar = $direccion->borrarProyecto($id);

echo "1";
//Si no existe la imagen entonces borrando
}else {


    $borrar = $direccion->borrarProyecto($id);
    echo "2";
}


}


?>