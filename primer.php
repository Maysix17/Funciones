<?php

//preg_replace = para eliminar los espacios y signos de la cadena -strtolower = convertir letras minusculas - strrev= para revertir la cadena 
function esPalindromo($palabra){
    $palabra = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $palabra));
    
    
    return $palabra === strrev($palabra);
}

$palabra1 = "MADAM";
$palabra2 = "hola";

echo esPalindromo($palabra1) ? "true" : "false"; 
echo "\n";
echo esPalindromo($palabra2) ? "true" : "false"; 
?>
