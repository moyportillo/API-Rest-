<?php

include_once 'cuenta.php';

class ApiCuentas{

    function getAll(){

        $cuenta  = new Cuenta();
        $cuentas = array();
        $cuentas["items"] = array();

        $res = $cuenta -> obtenerCuenta();

        if($res->rowCount()){
            while($row = $res->fetch(PDO::FETCH_ASSOC)){
                    $item = array(
                        'id' => $row['cuenta_id'],
                        'usuario' => $row['usercod'],
                        'tipo_cuenta' => $row['cod_tipo_cuenta'],
                        'estado' => $row['cuenta_status']
                    );
                    array_push($cuentas['items'], $item);
                }

            echo json_encode($cuentas);
        }else{
            echo json_encode(array('mensaje'=>'No hay elemento registrados'));
        }

    }
}

?>