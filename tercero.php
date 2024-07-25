<?php


function ordenarArray($array) {
    $num = count($array);
    for ($i = 0; $i < $num - 1; $i++) {
        for ($j = 0; $j < $num - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    return $array;
}


$numero = array(5, 5, 6, 56, 100 );
$resultado = ordenarArray($numero);
echo "Array correcto: ";
print_r($resultado);
?>



?>