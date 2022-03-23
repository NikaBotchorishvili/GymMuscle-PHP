<?php

use config\Model;

class About extends Model{
    public function getAboutData(){
        return $this->getSingleData("about");
    }
}