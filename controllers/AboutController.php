<?php

use config\Controller;

class AboutController extends Controller{
    public function index(){

        $about = new About();
        
        $this->data['menu'] = $about->getMenu();
        $this->data['about'] = $about->getAboutData();
        $this->tpl = "about";
    }
}