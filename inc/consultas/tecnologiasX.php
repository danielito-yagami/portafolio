<?php 

class TecnologiasX extends Conexion {

public $sql;

public $conexion;


public function __construct()
{
    
}

//------------------------Metodos de CRUD---------------- 


// INSERTAR

public function insertarTecnologias($nombre, $descripcion,$imagen){

    $this->conexion = parent::Conect();

    $this->sql  = "CALL insertarT('".$nombre."','".$descripcion."','".$imagen."')";

    $query = mysqli_query($this->conexion,$this->sql);

    //echo "Registro insertado";

    $this->conexion->close();

    $this->sql = "";

}

//EDITAR


public function editarTecnologias($id, $nombre, $descripcion,$imagen){

    $this->conexion = parent::Conect();

    $this->sql  = "CALL editarT(".$id.",'".$nombre."','".$descripcion."','".$imagen."')";

    $query = mysqli_query($this->conexion,$this->sql);

    //echo "Registro insertado";

    $this->conexion->close();

    $this->sql = "";

}

//QUERY

public function mostrar(){

$this->conexion = parent::Conect();

$this->sql = "CALL mostrarTecnologias()";

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

// QUERY ID
public function mostrarTecnologia($id){

$this->conexion = parent::Conect();

$this->sql = "CALL mostrarTecnologia(".$id.")";

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

//DELETE 


public function borrarTecnologia($id){

$this->conexion = parent::Conect();

$this->sql = "CALL borrarTecnologia(".$id.")";

$query = mysqli_query($this->conexion, $this->sql);


//Cerrando la conexion

$this->conexion->close();

$this->sql = "";

return "Proyecto borrado";

}



//-------------------------------------------------------
}




?>