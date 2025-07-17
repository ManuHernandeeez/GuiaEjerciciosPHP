<?php

/*
El costo de las llamadas telefónicas internacionales depende de la zona geográfica en la que se encuentre el país destino y del número de minutos hablados. En la siguiente tabla se presenta el costo del minuto por zona. A cada zona se le ha asociado una clave.
    
    **Nota:** Para llamadas con duración menor a 30 minutos se hace descuento del 10%.

*/


echo "<h1>Ejercicio 5</h1>";

   $clave = 0;
    $zona = "";
    $precio = 0.0;
    $minutos = 0;
    $total = 0.0;
 

function calcularCosto($clave, $minutos){

 
    if($minutos<30){
        $descuento = 0.10;
    }else{
        $descuento = 0; 
    }

    switch ($clave) {
        case 12:
           $total = $minutos * 2;
           $total = $total - ($total*$descuento);           
           break;
        case 15:
           $total = $minutos * 2.20;
           $total = $total - ($total*$descuento);           
           break;
        case 18:
           $total = $minutos * 4.50;
           $total = $total - ($total*$descuento);           
           break;
        case 19:
           $total = $minutos * 3.50;
           $total = $total - ($total*$descuento);           
           break;
        case 23:
           $total = $minutos * 6.00;
           $total = $total - ($total*$descuento);           
           break;
        case 25:
           $total = $minutos * 6.00;
           $total = $total - ($total*$descuento);           
           break;
        case 29:
           $total = $minutos * 5.00;
           $total = $total - ($total*$descuento);           
           break;          
           
    }

    echo "El total es: $" . $total;



}
calcularCosto(12, 29);
