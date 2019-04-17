<?php
/**
 * Problema propuesto.
 * Mostrar la tabla de multiplicar del 2. Emplear el for, luego el while y por último el do/while.
 * La estructura for permite incrementar una variable de 2 en 2
 */

function Tabla_del_2(){

    // introducimos la variable 
    $numero= 2;

    // Titulo de la tabla
    echo "<h4>Tabla del $numero:</h4>";
    /*------------------------------------*/
    // Ciclo for de multiplicacion
    for($i = 1 ; $i <= 10 ; $i++){
        echo "$numero x $i = ".$numero*$i."<br/>";
    }
    // espacio 
    echo "<br>";
    /*----------------------------------------*/
    // Ciclo while de multiplicacion
    // Variable que va a multiplicar
    $i=1;
    while ($i<=10) {
        // Forma en la que multiplica
        echo "$numero x $i = ".$numero*$i."<br/>";
        // Contador para que la variable i suba hasta 10
        $i++;
    } 

    // espacio 
    echo "<br>";
    /*------------------------------------------*/
    // Ciclo do-while de multiplicacion
    // Variable que va a multiplicar
    $i = 1;
    do{
        // Forma en la que multiplica
        echo "$numero x $i = ".$numero*$i."<br/>";
        // Contador para que la variable i suba hasta 10
        $i++;
    }while($i <= 10);


}


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ambientes no propietarios - Tabla de multiplicar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
 

<?php  
echo Tabla_del_2();
?>

</body>
</html>
