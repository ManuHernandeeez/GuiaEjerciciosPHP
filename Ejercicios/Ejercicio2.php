<!-- Marvin -->

<!-- Problema de números Primos: Crea una función llamada esPrimo que determine si un número 
dado es primo o no. Un número primo es aquel que solo es divisible por 1 y por sí mismo. -->

<?php
// Definir el número a evaluar
$numero = 24;

// Función para verificar si es primo
function esPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }

    return true;
}

// Determinar resultado
$resultado = esPrimo($numero)
    ? "Este es un número primo."
    : "No es un número primo.";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 - Verificador de Números Primos</title>
</head>
<body>

    <h2>Verificador de Números Primos:</h2>

    <p>
        <strong>El número a evaluar es: </strong>
        <?= $numero ?>
    </p>
    <p>
        <strong>El resultado es: </strong>
        <?= $resultado ?>
    </p>

</body>
</html>