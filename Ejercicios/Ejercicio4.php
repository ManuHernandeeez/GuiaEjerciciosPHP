Kevin

<?php
/**Problema de Suma de Números Pares: Crea un script que 
 * sume todos los números pares en un array de números enteros. */

echo "HOLAAAAAAAAAA<br><br>";

function sumaNumeroPares($num)
{
    $sum = 0;

    for ($i = 0; $i < count($num); $i++) {
        if ($num[$i] % 2 == 0) {
            $sum += $num[$i];
        }
    }
    return $sum;
}

$prueba = [1, 2, 3, 4, 5, 6, 7, 8];

echo "suma numeros de pares:" . sumaNumeroPares($prueba) . "<br><br>";

$prueba = [5, 14, 5, 8, 0, 2, 2, 8];

echo "suma numeros de pares: " . sumaNumeroPares($prueba) . "<br><br>";
?>