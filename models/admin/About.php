<?php

use config\Model;

class About extends Model{
    public function getAboutData(){
        return $this->getSingleData("about");
    }

    public function updateAboutData($data){
        $title = $data['about-title'];
        $text = $data['about-text'];
        
        $query = "UPDATE about set title='" . $title . "', text='" . $text . "'";
        $this->execute($query);

        
    }
}