<?php
class PerroController
{



    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new Perro();
        $this->view = new PerroView();
    }


    //GET 
    public function getOnePerro() {


        


    }
}
