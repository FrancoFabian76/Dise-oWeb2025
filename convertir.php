<?php 
if ($_SERVER ["REQUEST_METHOD"] == "POST") {
$cantidadPesos = floatval( $_POST["pesos"]);
$valorDolar = 40;
$cantidadTotalDolares = $cantidadPesos / $valorDolar;
echo "El resultado de la conversion es ";
echo "$cantidadPesos pesos uruguayos equivalen a " . $cantidadTotalDolares . " dolares.";
} else {
    echo "Error en la solicitud.";
}
?>