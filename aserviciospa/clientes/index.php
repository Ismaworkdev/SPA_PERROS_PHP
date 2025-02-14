<?php
require_once ('./../Basedatos.php');
require_once ('./Cliente.php');

$cliente = new Cliente();

@header("Content-type: application/json");

// CONSULTAR CLIENTES (GET)
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['dni'])) {
        $res = $cliente->getUnCliente($_GET['dni']);
        echo json_encode($res);
        exit();
    } else {
        $res = $cliente->getAll();
        echo json_encode($res);
        exit();
    }
}

// INSERTAR CLIENTES (POST)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    if (isset($data['Dni'], $data['Nombre'], $data['Apellido1'], $data['Apellido2'], $data['Dirrecion'], $data['Tlfno'])) {
        $res = $cliente->insertCliente($data);
        echo json_encode(["success" => $res]);
    } else {
        echo json_encode(["error" => "Faltan datos"]);
    }
    exit();
}

// ACTUALIZAR CLIENTES (PUT)
if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    $data = json_decode(file_get_contents("php://input"), true);
    if (isset($data['Dni'], $data['Nombre'], $data['Apellido1'], $data['Apellido2'], $data['Dirrecion'], $data['Tlfno'])) {
        $res = $cliente->updateCliente($data);
        echo json_encode(["success" => $res]);
    } else {
        echo json_encode(["error" => "Faltan datos"]);
    }
    exit();
}

// ELIMINAR CLIENTES (DELETE)
if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    $data = json_decode(file_get_contents("php://input"), true);
    if (isset($data['Dni'])) {
        $res = $cliente->deleteCliente($data['Dni']);
        echo json_encode(["success" => $res]);
    } else {
        echo json_encode(["error" => "Falta DNI"]);
    }
    exit();
}

// METODO NO PERMITIDO
echo json_encode(["error" => "Método no permitido"]);
exit();
?>