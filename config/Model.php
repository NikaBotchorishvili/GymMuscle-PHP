<?php

namespace config;

use config\Database;

class Model extends Database{

    public function getMenu(){
        return $this->getData("menu");
    }
}