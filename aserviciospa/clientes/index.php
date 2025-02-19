<?php
require_once ('./../Basedatos.php');
require_once ('./Cliente.php');

$cliente = new Cliente();

@header("Content-type: application/json");

// Insertar cliente
if($_SERVER['REQUEST_METHOD']=='POST'){
    
}

// METODO NO PERMITIDO
echo json_encode(["error" => "Método no permitido"]);
exit();
?>