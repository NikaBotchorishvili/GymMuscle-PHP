<?php

use config\Model;

class User extends Model{

    public function getUser($username, $password){
        $pass = md5($password);

        $query = "SELECT * FROM users WHERE username='". $username . "' AND password='" . $pass . "'";

        $data = $this->execute($query);

        return $data['id'];
    }
}