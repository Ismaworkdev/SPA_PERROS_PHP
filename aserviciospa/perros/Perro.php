<?php
require_once ('./../Basedatos.php');

class Perro extends Basedatos {

    private $table;
    private $conexion;

    public function __construct() {
        $this->table = "PERROS";
        $this->conexion = $this->getConexion();
    }

    
}
?>