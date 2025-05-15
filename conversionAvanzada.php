<?php 
if ($_SERVER ["REQUEST_METHOD"] == "POST") {
    $cantidadPesos = floatval( $_POST["cantidad"]);
    $valorDolar = 40;
    $valorEuro = 43;
    $valorReal = 8;
    $moneda = $_POST["moneda"];
    switch ($moneda) {
        case "USD":
        $cantidadFinal = $cantidadPesos / $valorDolar; 
        echo "La canttidad es: $cantidadFinal"; 
        break;
        case "EUR":
        $cantidadFinal = $cantidadPesos / $valorEuro;
        echo "La cantidad es: $cantidadFinal";
        break;
        case "BRL":
        $cantidadFinal = $cantidadPesos / $valorReal;
        echo "La cantidad es: $cantidadFinal";
        break;
        default;
        echo "Error en la solicitud.";
    }

    }else{
        echo "error";
    }
?>