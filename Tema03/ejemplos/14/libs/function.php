<?php
/*
    Ejemplo 3.14
    Descripción: Librería con funciones reutilizables
    Autor: Javier Rodríguez
    Fecha: 21/10/2025
*/

    // funcion suma dos números
    function suma (int $a, int $b){
        return $a + $b;
    }

    function resta (int $a, int $b){
        return $a - $b;
    }

    function division (int $a, int $b){
        if ($b === 0){
            return "Error";
        }
        return $a / $b;
    }
?>