<?php
require 'param.php';
//conexion de la bbd
class Conexion{
    protected $con;

    function __construct(){
        $this->con=new mysqli(SERVER,USER,PASS,BDD);
        $this->con->set_charset("CHAR");
    }
}

?>