<?php 
if ($_SERVER ["REQUEST_METHOD"] == "POST") {
    $edad = intval( $_POST["edad"]);
    if ($edad >= 11 && $edad <=19) {
    echo "Tiene descuento.";
    }else{
        echo "No tiene descuento";
    }
    } else {
        echo "Error en la solicitud.";
}
?>