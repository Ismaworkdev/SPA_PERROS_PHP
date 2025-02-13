<?php
require_once ('./../Basedatos.php');
require_once ('./Empleado.php');

$empleado = new Empleado();

@header("Content-type: application/json");

// CONSULTAR EMPLEADOS (GET)
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['id'])) {
        $res = $empleado->getUnEmpleado($_GET['id']);
        echo json_encode($res);
        exit();
    } else {
        $res = $empleado->getAll();
        echo json_encode($res);
        exit();
    }
}

// INSERTAR EMPLEADOS (POST)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    if (isset($data['nombre'], $data['cargo'], $data['salario'])) {
        $res = $empleado->insertEmpleado($data['nombre'], $data['cargo'], $data['salario']);
        echo json_encode(["success" => $res]);
    } else {
        echo json_encode(["error" => "Faltan datos"]);
    }
    exit();
}

// ACTUALIZAR EMPLEADO (PUT)
if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    $data = json_decode(file_get_contents("php://input"), true);
    if (isset($data['id'], $data['nombre'], $data['cargo'], $data['salario'])) {
        $res = $empleado->updateEmpleado($data['id'], $data['nombre'], $data['cargo'], $data['salario']);
        echo json_encode(["success" => $res]);
    } else {
        echo json_encode(["error" => "Faltan datos"]);
    }
    exit();
}

// ELIMINAR EMPLEADO (DELETE)
if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    $data = json_decode(file_get_contents("php://input"), true);
    if (isset($data['id'])) {
        $res = $empleado->deleteEmpleado($data['id']);
        echo json_encode(["success" => $res]);
    } else {
        echo json_encode(["error" => "Falta ID"]);
    }
    exit();
}

// METODO NO PERMITIDO
echo json_encode(["error" => "Método no permitido"]);
exit();
?>
