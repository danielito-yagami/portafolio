<?php
ob_start();

include("../../inc/conexion/conexion.php");
include("../../inc/consultas/mensaje.php");

$mensaje = $_POST['mensaje'] ?? '';

$query = new Mensajes();

$agregar = $query->insertarM($mensaje);

$respuesta = array("codigo"=>"","titulo"=>"");

$respuesta['codigo'] = "1";
$respuesta['titulo'] = "Mensaje agregado correctamente";

ob_clean();

echo json_encode($respuesta);

exit;
?>