<?php

require 'conexion.php';
require 'estudiante.php';

class DaoEstudiante extends Conexion{
   
    //creando nuevo constructor
    function __construct(){
       //inicializando el contructor $con de la bdd
        parent::__construct();

    }

    function insertarEstudiante($e){
        $para=$this->con->prepare("insert into estudiante(Nombres,Apellidos,CodigoEstudiante,FechaNacimiento,Edad,InstitucionProviene,PoseeFacebook,NombreCuentaFB,NombreRecomienda,Sexo,telefono,Email,carnet,nacionalidad,direccion,depto,zona,ViveCon,economia,)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    }
}


?>