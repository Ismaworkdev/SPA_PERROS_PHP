<?php
require_once ('./../Basedatos.php');

class Cliente extends Basedatos {

    private $table;
    private $conexion;

    public function __construct() {
        $this->table = "CLIENTES";
        $this->conexion = $this->getConexion();
    }

    
}
?>