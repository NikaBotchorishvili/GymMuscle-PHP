<?php

require_once "../helpers/Session.php";
require_once "../config/Config.php";
Session::start();
Session::end();

header("Location: " . HOST . "/admin");