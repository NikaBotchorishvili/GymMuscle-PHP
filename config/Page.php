<?php

class Page{
    public $pageName;

    public function __construct($request){
        $this->pageName = isset($request['page']) && !empty($request['page'])? $request['page']: "home";
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