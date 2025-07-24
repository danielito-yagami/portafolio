<?php 
//Trae todas las variables de session 
session_start();

//Session unset destruye las variables de session 
session_unset();
//Destruye la session del servidor
session_destroy();

header("Location: ../../code/login.php");


?>