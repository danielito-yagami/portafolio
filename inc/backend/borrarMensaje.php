<?php

ob_start();

include("../../inc/conexion/conexion.php");
include("../../inc/consultas/mensaje.php");

$id = $_POST['id'] ?? '';

$query = new Mensajes();

$agregar = $query->borrarMensaje($id);
$respuesta = array("codigo"=>"","titulo"=>"");
if($agregar){



$respuesta['codigo'] = "1";
$respuesta['titulo'] = "Mensaje borrado correctamente";
}
else{



$respuesta['codigo'] = "2";
$respuesta['titulo'] = "No se puede borrar el mensaje";

}
ob_clean();

echo json_encode($respuesta);

exit;

?>