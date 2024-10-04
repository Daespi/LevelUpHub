<?php


function connectMysql($dsn,$dbuser,$dbpassword){
    try {
        $db= new PDO($dsn,$dbuser,$dbpassword);
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die($e->getMessage());
    }
    return $db;
}


//$db = new PDO($dsn,$dbuser,$dbpassword);
//function de consulta
function query($db,$query){
    $stmt = $db->prepare($query);
    if($stmt->execute()){
        $items= $stmt->fetchAll();
    }
    return $items;
}
?>
