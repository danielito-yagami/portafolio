<?php


class Proyectos extends Conexion{


public $sql;
public $conexion;


//constructor

public function __construct(){




}

// INSERTAR

public function insertarProyectos($nombre, $descripcion,$imagen, $link){

    $this->conexion = parent::Conect();

    $this->sql  = "CALL insertarP('".$nombre."','".$descripcion."','".$imagen."','".$link."')";

    $query = mysqli_query($this->conexion,$this->sql);

    //echo "Registro insertado";

    $this->conexion->close();

    $this->sql = "";

}

//EDITAR


public function editarProyectos($id, $nombre, $descripcion,$imagen, $link){

    $this->conexion = parent::Conect();

    $this->sql  = "CALL editarP(".$id.",'".$nombre."','".$descripcion."','".$imagen."','".$link."')";

    $query = mysqli_query($this->conexion,$this->sql);

    //echo "Registro insertado";

    $this->conexion->close();

    $this->sql = "";

}

//QUERY

public function mostrar(){

$this->conexion = parent::Conect();

$this->sql = "CALL mostrarProyectos()";

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
public function mostrarProyecto($id){

$this->conexion = parent::Conect();

$this->sql = "CALL mostrarProyecto(".$id.")";

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


public function borrarProyecto($id){

$this->conexion = parent::Conect();

$this->sql = "CALL borrarProyecto(".$id.")";

$query = mysqli_query($this->conexion, $this->sql);


//Cerrando la conexion

$this->conexion->close();

$this->sql = "";

return "Proyecto borrado";

}



}




?>