<?php
function generarFibonacci($numero) {
    $fibonacci = [0, 1];
    
    if ($numero < 0) {
        return "El número debe ser mayor o igual a 0.";
    } elseif ($numero == 0) {
        return [0];
    } elseif ($numero == 1) {
        return [0, 1];
    }
    
    while (true) {
        $siguienteNumero = end($fibonacci) + prev($fibonacci);
        if ($siguienteNumero > $numero) {
            break;
        }
        $fibonacci[] = $siguienteNumero;
    }
    
    return $fibonacci;
}

$numero = 55;
$resultado = generarFibonacci($numero);
echo "La secuencia de Fibonacci hasta $numero es: ";
print_r($resultado);
?>