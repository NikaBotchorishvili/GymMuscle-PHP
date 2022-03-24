<?php

require_once "../config/Config.php";
require_once "../helpers/Session.php";
require_once "../config/Database.php";
require_once "../config/Model.php";
require_once "../models/admin/User.php";

Session::start();

$user = new User();
$id = $user->getUser($_POST['username'], $_POST['password']);

if($id){
    Session::set("user_id" , $id);

    header("Location: " . HOST . "/admin");
}