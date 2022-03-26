<?php

namespace config;

abstract class AdminController{

    public $tpl;
    public $data;

    public $action;

    public function construct($request){
        $this->action = isset($request['action']) && !empty($request['action'])? $request['action']: "index";
    }

    abstract public function index();

    public function renderView(){
        $this->index();

        $data = $this->data;
        $tpl = $this->tpl;

        require_once "../views/admin/layout.php";
    }
}