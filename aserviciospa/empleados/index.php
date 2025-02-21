<?php
require_once('./../Basedatos.php');
require_once('./Empleado.php');

$empleado = new Empleado();

@header("Content-type: application/json");


if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $res = $empleado->getAll();
        echo json_encode($res);
        exit();
}

// COGER TODOS LOS EMPLEADOS (GET)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    // Llamar al método de inserción sin validar datos 
    // (Validación en el Front)
    $res = $empleado->insertEmpleado($data);
    // Devolver respuesta en JSON
    echo json_encode($res);
    exit();
}

// INSERTAR UN EMPLEADO (POST)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    $dni = isset($post['Dni']) ? $post['Dni'] : null;
    $email = isset($post['Email']) ? $post['Email'] : null;
    $password = isset($post['Password']) ? $post['Password'] : null;
    $rol = isset($post['Rol']) ? $post['Rol'] : null;
    $nombre = isset($post['Nombre']) ? $post['Nombre'] : null;
    $altura = isset($post['altura']) ? $post['altura'] : null;
    $apellido1 = isset($post['Apellido1']) ? $post['Apellido1'] : null;
    $apellido2 = isset($post['Apellido2']) ? $post['Apellido2'] : null;
    $calle = isset($post['Calle']) ? $post['Calle'] : null;
    $numero = isset($post['Numero']) ? $post['Numero'] : null;
    $cp = isset($post['Cp']) ? $post['Cp'] : null;
    $poblacion = isset($post['Poblacion']) ? $post['Poblacion'] : null;
    $provincia = isset($post['Provincia']) ? $post['Provincia'] : null;
    $tlfno = isset($post['Tlfno']) ? $post['Tlfno'] : null;
    $profesion = isset($post['Profesion']) ? $post['Profesion'] : null;
    $info = [$dni, $email, $password, $rol, $nombre, $altura, $apellido1, $apellido2, $calle, $numero, $cp, $poblacion, $provincia, $tlfno, $profesion];
    $res = $empleado->insertEmpleado($info);
    echo json_encode(["success" => $res]);
} else {
    echo json_encode(["error" => "Faltan datos"]);
    exit();
}

// METODO NO PERMITIDO
echo json_encode(["error" => "Método no permitido"]);
exit();
