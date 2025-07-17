<?php 

function esPalindromo($texto) 
{
    $limpio = strtolower(str_replace(' ', '', $texto)); //limpiar los espacios 

    $invertido = strrev($limpio);

    return $limpio === $invertido;
}

$frase = "reconocer";
$resultado = esPalindromo($frase) ? "Es un palíndromo" : "No es un palíndromo";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 3 - Palíndromos</title>
</head>
<body>

    <h2>Verificador de Palíndromos</h2>
    <p>
        <strong>Frase Evaluada: </strong>
        <?= $frase ?>
    </p>
    <p>
        <strong>Resultado: </strong>
        <?= $resultado ?>
    </p>
    
</body>
</html>