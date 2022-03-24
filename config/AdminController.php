<?php

namespace config;

abstract class AdminController{

    public $tpl;
    public $data;


    abstract public function index();

    public function renderView(){
        $this->index();

        $data = $this->data;
        $tpl = $this->tpl;

        require_once "../views/admin/layout.php";
    }
}