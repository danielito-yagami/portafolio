<?php 

include("../../inc/conexion/conexion.php");
include("../../inc/consultas/usuarios.php");

//Revisando si del lado de php llega la info bien 

$password = "";
$user = "";


if(isset($_POST['pass'])){


$password = $_POST['pass'];

}

if(isset($_POST['correo'])){

$user = $_POST['correo'];

}



//Terminando de validar los datos 


$usuarioX = new Usuarios();

//Para obtener la respuesta
$respuesta = $usuarioX->Login($user, $password);

$validacion = $usuarioX->Rol($user);

//Respuesta del metodo Login
$respX =  $respuesta[0]['respuesta'];

//Respuesta del metodo Rol para roles
$rol = $validacion[0]['rol'];

//echo $respX;




if($respX == "si"){

//Creando la session para evitar que se ingrese sin seguridad
session_start();

$_SESSION['correo'] = $user;
$_SESSION['control'] = 1;
$_SESSION['rol'] = $rol;

//echo $rol;
header("Location: ../../code/index.php");

//echo "Logueado";

}else {


header("Location: ../../code/login.php");


}



?>