<?php

class AdminPage{

    public $pageName;

    public function __construct(){
        if(Session::get("user_id") == null){
            $this->pageName = "login";
            $this->getController();
        }
    }
    
    public function getController(){
        $controllerName = $this->getControllerName();
        $controllerPath = $this->getControllerPath();

        require_once $controllerPath;

        $controller = new $controllerName();
        $controller->renderView();
    }

    public function getModelPath(){
        return "./models/admin/" . $this->getModelName();
    }

    public function getModelName(){
        return ucfirst($this->pageName);
    }

    public function getControllerPath(){
        return "../controllers/admin/" . $this->getControllerName() . ".php";
    }

    public function getControllerName(){
        return ucfirst($this->pageName) . "Controller";
    }
}