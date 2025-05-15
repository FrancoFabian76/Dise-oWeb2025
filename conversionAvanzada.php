<?php 
    //$valorDolar = 40;
    //$valorEuro = 43;
    //$valorReal = 8;

    $valorMoneda = [40, 43, 8, "Hola"];
    var_dump( $valorMoneda );

if ($_SERVER ["REQUEST_METHOD"] == "POST") {
    $cantidadPesos = floatval( $_POST["cantidad"]);
    $moneda = $_POST["moneda"];
    switch ($moneda) {
        case "USD":
        $cantidadFinal = $cantidadPesos / $valorMoneda[0]; 
        echo "La canttidad es: $cantidadFinal"; 
        break;
        case "EUR":
        $cantidadFinal = $cantidadPesos / $valorMoneda[1];
        echo "La cantidad es: $cantidadFinal";
        break;
        case "BRL":
        $cantidadFinal = $cantidadPesos / $valorMoneda[2];
        echo "La cantidad es: $cantidadFinal";
        break;
        default;
        echo "Error en la solicitud.";
    }

    }else{
        echo "error";
    }
?>