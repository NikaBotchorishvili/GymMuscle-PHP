<?php

use config\AdminController;

class AboutController extends AdminController{
    public function index(){
        $this->tpl = "about";
    }
}