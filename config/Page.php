<?php

class Page{
    public $pageName;

    public function __construct(){
        $this->pageName = isset($_GET['page']) && !empty($_GET['page'])? $_GET['page']: "home";
    }

    public function getModel(){
        $modelPath = $this->getModelPath();
        $modelName = $this->getModelName();

        require_once $modelPath;
    }

    public function getController(){
        $controllerPath = $this->getControllerPath();
        $controllerName = $this->getControllerName();

        require_once $controllerPath;

        $controller = new $controllerName();
        $controller->renderView();
    }

    public function getControllerPath(){
        return "./controllers/" . $this->getControllerName() . ".php";
    }

    public function getModelPath(){
        return "./models/" . $this->getModelName() . ".php";
    }

    public function getModelName(){
        return ucfirst($this->pageName);
    }

    public function getControllerName(){
        return ucfirst($this->pageName . "Controller");
    }
}