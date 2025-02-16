<?php
require_once "./../Basedatos.php";
require_once "./Perro.php";


$perro = new Perro();

@header("Content-type: application/json");

//get by id cliente dni_cliente

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['dni_cliente'])) {
        $res = $empleado->getperrosCliente($_GET['dni_cliente']);
        echo json_encode($res);
        exit();
    } else {
        $res = $empleado->getAll();
        echo json_encode($res);
        exit();
    }
}

//insert all data of perro . 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    $DNI_DUENIO = isset($post['DNI_DUENIO']) ? $post['DNI_DUENIO'] : null;
    $nombre = isset($post['nombre']) ? $post['nombre'] : null;
    $fecha_nto = isset($post['fecha_nto']) ? $post['fecha_nto'] : null;
    $raza = isset($post['raza']) ? $post['raza'] : null;
    $peso = isset($post['peso']) ? $post['peso'] : null;
    $altura = isset($post['altura']) ? $post['altura'] : null;
    $observaciones = isset($post['observaciones']) ? $post['observaciones'] : null;
    $n_chip = isset($post['n_chip']) ? $post['n_chip'] : null;
    $sexo = isset($post['sexo']) ? $post['sexo'] : null;

    $res = $empleado->insertPERRO($data);
    echo json_encode(["success" => $res]);
} else {
    echo json_encode(["error" => "Faltan datos"]);
    exit();  
}



if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    $CHIP = $_GET['CHIP'];
    $res = $servicio->deleteEmpleado($CHIP);
    $resul['resultado'] = $res;
    echo json_encode($resul);
    exit();
}
