<?php

require MODS . "home.php";

require VIEWS . "home.view.php";

//require 'src/database.php';

$db = connectMysql($dsn,$dbuser,$dbpassword);

//dd($dbpassword);
//$sql = "SELECT * FROM books";
$users = query($db , "SELECT * FROM users");


/*$stmt = $db->prepare($sql);
$stmt -> execute();
$users = $stmt->fetchALL();
//var_dump($users);
//dd($books);*/


?>
