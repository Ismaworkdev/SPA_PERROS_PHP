<?php
require_once('./../Basedatos.php');
require_once('./Empleado.php');

$empleado = new Empleado();

@header("Content-type: application/json");

// CONSULTAR EMPLEADOS (GET)
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['dni'])) {
        $res = $empleado->getUnEmpleado($_GET['dni']);
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
    if (isset($data['Dni'], $data['Email'], $data['Password'], $data['Rol'], $data['Nombre'], $data['Apellido1'], $data['Apellido2'], $data['Calle'], $data['Numero'], $data['Cp'], $data['Poblacion'], $data['Provincia'], $data['Tlfno'], $data['Profesion'])) {
        $res = $empleado->insertEmpleado($data);
        echo json_encode(["success" => $res]);
    } else {
        echo json_encode(["error" => "Faltan datos"]);
    }
    exit();
}

// ACTUALIZAR EMPLEADO (PUT)
if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    $data = json_decode(file_get_contents("php://input"), true);
    if (isset($data['Dni'], $data['Email'], $data['Password'], $data['Rol'], $data['Nombre'], $data['Apellido1'], $data['Apellido2'], $data['Calle'], $data['Numero'], $data['Cp'], $data['Poblacion'], $data['Provincia'], $data['Tlfno'], $data['Profesion'])) {
        $res = $empleado->updateEmpleado($data);
        echo json_encode(["success" => $res]);
    } else {
        echo json_encode(["error" => "Faltan datos"]);
    }
    exit();
}

// ELIMINAR EMPLEADO (DELETE)
if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    $data = json_decode(file_get_contents("php://input"), true);
    if (isset($data['Dni'])) {
        $res = $empleado->deleteEmpleado($data['Dni']);
        echo json_encode(["success" => $res]);
    } else {
        echo json_encode(["error" => "Falta DNI"]);
    }
    exit();
}

// METODO NO PERMITIDO
echo json_encode(["error" => "Método no permitido"]);
exit();
