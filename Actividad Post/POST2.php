<?php 
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

$input = json_decode(file_get_contents("php://input"), true);
if (isset($input[""]) && isset($input[""][  ""]) && isset($input[""][""])) {    
    echo json_encode(["estado" => "error", "mensaje" => "No se permiten campos vacios."]);
    exit;
}

if (!$input['nombre'] || !$input['razon'] || !$input['correo'] || !$input['telefono'] || !$input['producto']){
    echo json_encode(["estado" => "error", "mensaje" => "Faltan campos obligatorios."]);
    exit;
}

if (!filter_var($input["correo"], FILTER_VALIDATE_EMAIL)){
    echo json_encode(["estado" => "error", "mensaje" => "Correo invalido."]);
    exit;
}
echo json_encode(["estado"=> "ok", 
"mensaje" => "Usuario Registrado Correctamente.",
"usuario" => $input
]);