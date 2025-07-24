<?php

include("../../inc/conexion/conexion.php");
include("../../inc/consultas/proyectosX.php");


if(isset($_POST['id'])){

$id = $_POST['id'];


}

$editar = new Proyectos();
$query = $editar->mostrarProyecto($id);

//$datos = json_encode($query);

//Creando un foreach 

foreach ($query as $obj) {


    $arreglo[]= [

        'id' => $obj['idProyecto'],
        'nombre' => $obj['nombreProyecto'],
        'descripcion' => $obj['descripcionProyecto'],
        'imagen' => $obj['imagen'],
        'link'=> $obj['link']



    ];

}
header('Content-Type: application/json');
echo json_encode($arreglo);

?>