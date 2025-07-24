<?php 

/**
 * Definiendo la clase conexion y sus propiedades
 * 
 */

 class Conexion{

//Atributos de la clase


public $dbhost, $dbuser, $dbpass, $dbname, $dbport;

//Metodo constructor

function __construct()
{
    
}

function Conect(){

$this->dbhost = "localhost";
$this->dbuser = "root";
$this->dbpass = "1234";
$this->dbport = 3306;
$this->dbname="portafolio";
$conex = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname, $this->dbport);

//Para verificar si la base de datos esta vacia


if(!mysqli_connect_errno()){


//echo "Se conecto a la base de datos";

return $conex;

}else {

echo "No se conecto a la base de datos";
return null;
}



}




 }





?>