<?php

ob_start();

include("../../inc/conexion/conexion.php");
include("../../inc/consultas/tecnologiasX.php");

if(isset($_POST['id'])){

$id = $_POST['id'];


}


//llamando para hacer la consulta en la base de datos
$query = new TecnologiasX();

$datos = $query->mostrarTecnologia($id);
ob_clean();
echo json_encode($datos);
exit;
?>