<?php

if ($_SERVER ["REQUEST_METHOD"] == "POST") {
    $Microrelato = ($_POST ["message"]);
    $palabras = explode(" ", $Microrelato); 
    if (count($palabras) <= 100 ){
        echo "Su microrelato fue aceptado";


    }else{



        echo "Su microrelato no fue aceptado porque tiene mas de 100 palabras";
}    

    if(strlen($Microrelato) <= 700){
    }else{
        echo "Su microrelato no fue aceptado porque tiene mas de 700 palabras";
    }



}else{
    echo "Conexion no establecida";
}



?>