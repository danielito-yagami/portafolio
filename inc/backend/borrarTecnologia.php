<?php

ob_start();

include("../../inc/conexion/conexion.php");
include("../../inc/consultas/tecnologiasX.php");


//Aplicando las ternarias en lugar del isset

$id = $_POST['id'] ?? '';

$query = new TecnologiasX();

$consulta =  $query->mostrarTecnologia($id);

foreach($consulta as $fila){

    $ruta = $fila['img'];


}

$resp = array("codigo"=>"","titulo"=>"");


if(file_exists($ruta)){

unlink($ruta);
//Controlador
$eliminar = $query->borrarTecnologia($id);


$resp["codigo"] = "0";
$resp["titulo"] = "Tecnologia borrada";
}else {

$eliminar2 = $query->borrarTecnologia($id);
$resp["codigo"] = "1";
$resp["titulo"] = "Tecnologia borrada";

}

ob_clean();

echo json_encode($resp);

exit;


?>