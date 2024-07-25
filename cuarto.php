<?php
function sumaDigitos($numeros) {
    $suma = 0;
    $numeros = abs($numeros); 
    while ($numeros > 0) {
        $suma += $numeros % 10; 
        $numeros = intval($numeros / 10); 
    }
    return $suma;
}


$numero = 212323;
$resultado = sumaDigitos($numero);
echo "La suma de los dígitos de $numero es: $resultado";
?>