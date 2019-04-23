<?php

/**

Crear una función que determine si una palabra contiene las 5 vocales sin repetir ninguna. Presentar un mensaje que indique si la palabra contiene las 5 vocales y cuantas letras tiene la palabra.

Ejemplos:
Murciélago
aceituno
acuífero
http://buscapalabras.com.ar/palabras-con-las-cinco-vocales.html
 */

$palabra  =  "murcielagoas" ;


$longitud  =  strlen ( $palabra );

$Letra_a = substr_count($palabra,"a");
$Letra_e = substr_count($palabra,"e");
$Letra_i = substr_count($palabra,"i");
$Letra_o = substr_count($palabra,"o");
$Letra_u = substr_count($palabra,"u");

if($Letra_a == 1 and $Letra_e == 1 and $Letra_i == 1
   and $Letra_o == 1 and $Letra_u){
       echo "La palabra tiene todas las vocales";
   }
else {
    echo "La palabra tiene vocales repetidas";
}

echo "<br>";  
echo "Y la longitud de la plabra es: $longitud";
?>