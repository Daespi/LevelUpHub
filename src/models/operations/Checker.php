<?php
class Checker{
    public static function passwordChecker($password):int{
        if ($password == null || $password == " "){
            return -1;
        }

        if (strlen(trim($password)) <= 8){
            return -2;
        }

        $numeros = array_map(function($char){
            return is_numeric($char) ? 1 :0;
        }, $password);

        $cantidadDeNums= array_sum($numeros);

        if ($cantidadDeNums > 4){
            return -3;
        }

        

    }
}

?>