<?php 
$Tripulantes = ["Alex Rider", 
"Mia Kovalik", 
"Raj Patel", 
"Elena Vega", 
"Jules Bergman"];

 function agregar($nuevoNombre, & $array){
$array[]=$nuevoNombre;
 }
agregar("coso",$Tripulantes);


function eliminar(&$array){
    $cantidad= count($array);
    $posicion= $cantidad  -1;
unset($array[$posicion]);
}

function verificar($verificarLista, & $array){

} 

eliminar($Tripulantes);
var_dump($Tripulantes);
echo '<br> <br>Se elimino la ultima posicion.';
?>