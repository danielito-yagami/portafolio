<?php

ob_start();

include("../../inc/conexion/conexion.php");
include("../../inc/consultas/mensaje.php");

$id = $_POST['id'] ?? 0;

$query = new Mensajes();

$obtener = $query->mostrarMensaje($id);

if($obtener){

$datos = json_encode($obtener);

}else {

$datos = array("codigo"=>"2","titulo"=>"Error");

}

ob_clean();

echo $datos;

exit;

?>