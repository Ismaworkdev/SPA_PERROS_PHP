<?php
require_once ('./../Basedatos.php');
require_once ('./Cliente.php');

$cliente = new Cliente();

@header("Content-type: application/json");


// METODO NO PERMITIDO
echo json_encode(["error" => "Método no permitido"]);
exit();
?>