<?php

class Usuarios extends Conexion{


    public $sql;
    public $conexion;


    public function __construct(){

    }

    public function Login($correo, $pass){

        $this->conexion = parent::Conect();

        $this->sql = "CALL usuarios('".$correo."','".$pass."')";

        $query = mysqli_query($this->conexion, $this->sql);

        if(mysqli_num_rows($query)>0){


            $respuesta = mysqli_fetch_all($query, MYSQLI_ASSOC);

            $this->conexion->close();

            $this->sql = "";


            return $respuesta;


        }

        else {


            echo "No hay resultados";
        }




    }

    //Funcion asignar roles de usuario 

    function Rol($correo){


        $this->conexion = parent::Conect();
        $this->sql = "CALL asignar('".$correo."')";

        $query = mysqli_query($this->conexion,$this->sql);

        if(mysqli_num_rows($query)>0){

            $res = mysqli_fetch_all($query,MYSQLI_ASSOC);

            $this->conexion->close();

            $this->sql = "";

            return $res;

        }else {


            echo "No hay resultados";
        }

    }



}



?>