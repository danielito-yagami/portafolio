<?php


ob_start();

include("../../inc/conexion/conexion.php");
include("../../inc/consultas/mensaje.php");

$mensaje = $_POST['mensaje'] ?? '';
$id = $_POST['id'] ?? '';
$query = new Mensajes();

$editar = $query->editarM($id,$mensaje);

$respuesta = array("codigo"=>"","titulo"=>"");

$respuesta['codigo'] = "1";
$respuesta['titulo'] = "Mensaje editado correctamente";

ob_clean();

echo json_encode($respuesta);

exit;






?>