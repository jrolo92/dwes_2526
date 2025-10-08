<?php
    //Operadoresd comparativos de igualdad desigualdad.
    // Creamos dos variables de distinto tipo y del mismo valor
    $a = 3;
    $b ="3";

    // Comparamos las variables con el operador de igualdad
    if ($a == $b) { // Devuelve verdadero
        echo "Las variables son iguales en valor<br>";
    };

    // Comparamos las variables con el operador de identidad
    if ($a === $b) { // Devuelve falso
        echo "Las variables no son iguales en valor y tipo<br>";
    };

    // Comparamos las variables con el operador de desigualdad
    if ($a != $b) { // Devuelve falso
        echo "Las variables no son distintas en valor<br>";
    };
    // Comparamos las variables con el operador de no identidad
    if ($a !== $b) { // Devuelve verdadero
        echo "Las variables son distintas en valor o tipo<br>";
    };
?>