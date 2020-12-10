<?php

include_once 'db.php';

class Cuenta extends basedatos{

    function obtenerCuenta(){
        $query = $this->connect()->query('SELECT * FROM banco.cuenta');

        return $query;
    }
}

?>