<?php

class Estudiante {
private $id_estudiante;
private $nombres;
private $apellidos;
private $codigo;
private $fechaNac;
private $edad;
private $institucion;
private $facebook;
private $nombref;
private $sexo;
private $telefono;
private $email;
private $carnet;
private $nacionalidad;
private $direccion;
private $depto;
private $zona;
private $vive;
private $economia;
private $Nacademico;

function __construct($id_estudiante,$nombres,$apellidos,$codigo,$fechaNac,$edad,$institucion,
 $facebook,$nombref,$sexo,$telefono,$email,$carnet,$nacionalidad,$direccion,$depto,$zona,$vive,$economia,$Nacademico){
       
    $this->id_estudiante=$id_estudiante;
    $this->nombres=$nombres;
    $this->apellidos=$apellidos;
    $this->codigo=$codigo;
    $this->fechaNac=$fechaNac;
    $this->edad=$edad;
    $this->institucion=$institucion;
    $this->facebook=$facebook;
    $this->nombref=$nombref;
    $this->sexo=$sexo;
    $this->telefono=$telefono;
    $this->email=$email;
    $this->carnet=$carnet;
    $this->nacionalidad=$nacionalidad;
    $this->direccion=$direccion;
    $this->depto=$depto;
    $this->zona=$zona;
    $this->vive=$vive;
    $this->economia=$economia;
    $this->Nacademico=$Nacademico;

    
}

function getId_estudiante(){
    return $this->id_estudiante;
}

function getnombres(){
    return  $this->nombres;
}

function getapellidos(){
    return $this->apellidos;
}

function getcodigo(){
    return $this->codigo;
}

function getfechaNac(){
    return $this->fechaNac;
}

function getedad(){
    return $this->edad;
}

function getinstitucion(){
    return $this->institucion;
}

function getfacebook(){
    return $this->facebook;
}
function getnombref(){
    return $this->nombref;
}

function getsexo(){
    return $this->sexo;
}
function gettelefono(){
    return $this->telefono;
}

function getemail(){
    return $this->email;
}
function getcarnet(){
    return $this->carnet;
}
function getnacionalidad(){
    return $this->nacionalidad;
}

function getdireccion(){
    return $this->direccion;
}

function getdepto(){
    return $this->depto;
}
function getzona(){
    return $this->zona;
}

function getvive(){
    return $this->vive;
}

function geteconomia(){
    return $this->economia;
}

function getNacademico(){
    return $this->Nacademico;
}
}
?>