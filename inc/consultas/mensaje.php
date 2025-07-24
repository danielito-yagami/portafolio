<?php


class Mensajes extends Conexion{


public $conexion;
public $sql;

//constructor

public function __construct()
{
    
}

//Metodos para las operaciones


public function mostrarMensajes(){

$this->conexion = parent::Conect();

$this->sql = "CALL mostrarSaludos()";

$query = mysqli_query($this->conexion, $this->sql);

//Si hay resultados
if(mysqli_num_rows($query)>0){

$res = mysqli_fetch_all($query, MYSQLI_ASSOC);

//Cerrando la conexion

$this->conexion->close();

$this->sql = "";

return $res;

 }
}

//Consultas de mensajes


// QUERY ID
public function mostrarMensaje($id){

$this->conexion = parent::Conect();

$this->sql = "CALL mostrarSaludo(".$id.")";

$query = mysqli_query($this->conexion, $this->sql);

//Si hay resultados
if(mysqli_num_rows($query)>0){

$res = mysqli_fetch_all($query, MYSQLI_ASSOC);

//Cerrando la conexion

$this->conexion->close();

$this->sql = "";

return $res;

 }
}

//Metodo de editar 


public function editarM($id, $mensaje){

    $this->conexion = parent::Conect();

    $this->sql  = "CALL editarM(".$id.",'".$mensaje."')";

    $query = mysqli_query($this->conexion,$this->sql);

    //echo "Registro insertado";

    $this->conexion->close();

    $this->sql = "";

}


//Insertar mensajes


public function insertarM($mensaje){

    $this->conexion = parent::Conect();

    $this->sql  = "CALL insertarM('".$mensaje."')";

    $query = mysqli_query($this->conexion,$this->sql);

    //echo "Registro insertado";

    $this->conexion->close();

    $this->sql = "";

}


public function borrarMensaje($id){

$this->conexion = parent::Conect();

$this->sql = "CALL borrarMensaje(".$id.")";

$query = mysqli_query($this->conexion, $this->sql);


//Cerrando la conexion

$this->conexion->close();

$this->sql = "";

return "Proyecto borrado";

}

public function mostrarMensajeL(){

$this->conexion = parent::Conect();

$this->sql = "CALL mostrarL()";

$query = mysqli_query($this->conexion, $this->sql);

//Si hay resultados
if(mysqli_num_rows($query)>0){

$res = mysqli_fetch_all($query, MYSQLI_ASSOC);

//Cerrando la conexion

$this->conexion->close();

$this->sql = "";

return $res;

 }
}




}






?>