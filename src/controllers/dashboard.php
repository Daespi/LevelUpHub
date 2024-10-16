<?php
session_start();
require MODS . "dashboard.php";

require VIEWS . "dashboard.view.php";


// $userData = $_SESSION["userData"];
$userData = [
    "id"=>1,
    "username"=>"saeru",
    "password"=>"password",
];
var_dump($userData);
