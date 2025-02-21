<?php

class WebController extends ControladorBase
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = []; // Puedes pasar datos a la vista si es necesario
        $this->view("index", $data);
    }

    public function register()
    {
        $data = []; // Puedes pasar datos a la vista si es necesario
        $this->view("index", $data);
    }

    public function Password()
    {
        $data = []; // Puedes pasar datos a la vista si es necesario
        $this->view("index", $data);
    }
}
