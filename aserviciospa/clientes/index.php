<?php
require_once ('./../Basedatos.php');
require_once ('./Cliente.php');

$cliente = new Cliente();

@header("Content-type: application/json");


// Para llamar a los metodos primero necesito crear el ClienteView para saber como voy a llamar a las variables

// Insertar cliente
if($_SERVER['REQUEST_METHOD']=='POST'){
    $cliente=new Cliente();

    $datos = array(
        "nombre" => $_POST['post_dni'],
        "nombre" => $_POST['post_nombre'],
        "apellido1" => $_POST['post_apellido1'],
        "apellido2" => $_POST['post_apellido2'],
        "direccion" => $_POST['post_direccion'],
        "telefono" => $_POST['post_telefono'],
    );

    $cliente->insertCliente($datos);
}

// Eliminar cliente
if($_SERVER['REQUEST_METHOD']=='POST' && isset($POST['DELETE'])){
    $cliente=new Cliente();

    $cliente->deleteCliente($_DELETE['delete_dni']);
}

// METODO NO PERMITIDO
echo json_encode(["error" => "Método no permitido"]);
exit();
?>