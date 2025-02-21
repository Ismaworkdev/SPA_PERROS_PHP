<?php

class ControladorBase
{

    public function __construct()
    {
        //  require_once 'Basedatos.php';
        //Incluir todos los modelos
        foreach (glob("modelo/*.php") as $file) {
            require_once $file;
        }
    }

    public function url($controlador = CONTROLADOR_DEFECTO, $accion = ACCION_DEFECTO, $num = "")
    {

        if ($num == "") {
            $urlString = "index.php?controller=" . $controlador . "&action=" . $accion;
        } else {
            $urlString = "index.php?controller=" . $controlador . "&action=" . $accion . "&num=" . $num;
        }

        return $urlString;
    }


    public function view($vista, $data)
    {
        foreach ($data as $id_assoc => $value) {
            ${$id_assoc} = $value;
        }
        //   require_once 'vista/comun/cabecera.php';
        require_once 'views/' . $vista . 'View.php';
        //  require_once 'vista/comun/pie.php';
    }

    public function redirect($controlador = CONTROLADOR_DEFECTO, $accion = ACCION_DEFECTO)
    {
        header("Location:index.php?controller=" . $controlador . "&action=" . $accion);
    }
}
