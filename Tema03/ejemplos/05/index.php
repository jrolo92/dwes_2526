<?php 

    /*
    Ejemplo 5.1.
    Descripción: item de calificación con estructura switch avanzada
    Autor: Javier Rodríguez
    */

    $calif= 7;

    switch(true){
        case ($calif >= 0 && $calif < 5):
            $item = "Insuficiente";
            break;
        case ($calif >= 5 && $calif < 6):
            $item = "Suficiente";
            break;
        case ($calif >= 6 && $calif < 7):
            $item = "Bien";
            break;
        case ($calif >= 7 && $calif < 9):
            $item = "Notable";
            break;
        case ($calif >= 9 && $calif <= 10):
            $item = "Sobresaliente";
            break;
        default:
            $item = "Calificación no válida";
    }

    echo $item;
?>