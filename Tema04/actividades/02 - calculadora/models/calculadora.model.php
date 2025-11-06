<?php
    /*
        Proyecto 1: calculador básico.
        Descripción: Calculadora con operaciones básicas (suma, resta, multiplicación y división) utilizando POO.
        Autor: Javier Rodríguez
        Fecha: 06/11/25
    */

    // 1. Obtenemos los valores del formulario:
        $valor1 = isset($_GET['valor1']) ? floatval($_GET['valor1']) : 0;
        $valor2 = isset($_GET['valor2']) ? floatval($_GET['valor2']) : 0;
        $operacion = isset($_GET['operacion']) ? $_GET['operacion'] : null;

    // 2. Creamos una instancia de la clase calculadora:
        $calculadora = new Class_calculadora($valor1, $valor2, $operacion, null);

    // 3. Realizamos la operación solicitada:
        switch($operacion){
            case 'sumar':
                $calculadora->sumar();
                break;
            case 'restar':
                $calculadora->restar();
                break;
            case 'multiplicar':
                $calculadora->multiplicar();
                break;
            case 'dividir':
                $calculadora->dividir();
                break;
            default:
                echo "Operación no válida.";
                break;
        }
?>