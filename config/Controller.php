<?php

namespace config;

abstract class Controller{

    public $pageName;
    public $tpl;
    public $data;
    
    public abstract function index();

    public function renderView(){
        $this->index();
        $tpl = $this->tpl;
        require_once "views/layout.php";
    }
}