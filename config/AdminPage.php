<?php

class AdminPage{

    public $pageName;

    public function __construct($request){
        if(Session::get("user_id") == null){
            $this->pageName = "login";
            $this->getController();
        }else{
            $this->pageName = isset($request) && !empty($request{"page"})? $request['page']: "home";
            $this->getModel();
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                print_r($_SERVER["REQUEST_METHOD"]);
            }else{
                $this->getController();
            }
        }
    }
    
    public function getController(){
        $controllerName = $this->getControllerName();
        $controllerPath = $this->getControllerPath();

        require_once $controllerPath;

        $controller = new $controllerName();
        $controller->renderView();
    }

    public function getModel(){
        $modelPath = $this->getModelPath();

        require_once $modelPath;
    }
    public function getModelPath(){
        return "../models/admin/" . $this->getModelName();
    }

    public function getModelName(){
        return ucfirst($this->pageName) . ".php";
    }

    public function getControllerPath(){
        return "../controllers/admin/" . $this->getControllerName() . ".php";
    }

    public function getControllerName(){
        return ucfirst($this->pageName) . "Controller";
    }
}