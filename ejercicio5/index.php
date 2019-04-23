<?php

/**
 Sabiendo que la función rand nos retorna un valor aleatorio entre un rango de dos enteros:

$num=rand(1,100);
En la variable $num se almacena un valor entero que la computadora genera en forma aleatoria entre 1 y 100.

Hacer un programa que lo muestre por pantalla al valor generado. Mostrar además si es menor o igual a 50 o si es mayor.

Para imprimir el contenido de una variable también utilizamos el comando echo:

echo $num;
 */

$num  =  rand ( 1 , 100 );
$condicion  =  50 ;

if ($num< $condicion) {
    echo "$num es menor que $condicion";
} elseif ($num > $condicion) {
    echo "$num es mayor que $condicion";
} elseif ($num == $condicion) {
    echo "$num es igual que $condicion";
}


?>