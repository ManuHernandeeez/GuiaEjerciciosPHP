<?php
function fizzBuzz($n) {
    $resultado = [];
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            $resultado[] = "FizzBuzz";
        } elseif ($i % 3 == 0) {
            $resultado[] = "Fizz";
        } elseif ($i % 5 == 0) {
            $resultado[] = "Buzz";
        } else {
            $resultado[] = (string)$i; 
        }
    }
    return $resultado;
}

$n = 100;
$respuesta = fizzBuzz($n);

// Mostrar el resultado
echo "<pre>";
print_r($respuesta);
echo "</pre>";
?>