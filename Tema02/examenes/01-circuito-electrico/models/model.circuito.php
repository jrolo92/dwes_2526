<?php
    /*
        Modelo: model.circuito.php
        Descripción: Modelo para la realización de cálculos necesarios
        Exámen Práctico: Tema 2. Inserción de código PHP en HTML
        Autor Javier Rodríguez
    */

        // Creamos dos variables y les asignamos el valor que se recoge en la vista principal 
        $voltaje = $_POST["voltaje"];
        $resistencia = $_POST["resistencia"];

        // Creamos variables para cada calculo a mostrar en la vista de resultados 
        $corriente = $voltaje / $resistencia;
        $potencia = $voltaje * $corriente;
        $energia = $potencia * 3600;
        $resistencia_paralelo = $resistencia / 2;



?>