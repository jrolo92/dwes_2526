<?php
    /*
        Ejemplo de uso array escalar
        Descripción: El indice esta formado por números enteros
    */

    $numeros = [1,2,3,4,5];

    foreach ($numeros as $numero){
        echo "Número: $numero <br>";
    }

    // Se puede ver el indice de un array mediante la vv $i incluyendola en el foreach de la siguiente manera:
        foreach ($numeros as $i => $numero){
        echo "Número [ $i ]: $numero <br>";
    }

    // También se puede imprimir el contenido de un array con la funcion print_r($miArray)
    print_r($numeros)
?>