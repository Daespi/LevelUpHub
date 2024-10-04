<?php

require_once "config.php";
require "helper.php";

$controller = router();
require CONTR . $controller . ".php";
