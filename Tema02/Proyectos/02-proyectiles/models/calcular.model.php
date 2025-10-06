<?php
    /*  
        Modelo: calcular.model.php
        Descripción: Dada la velocidad inicial y el ángulo de lanzamiento, calcula:
            - Distancia máxima alcanzada por un proyectil.
            - Altura máxima.
            - Velocidad inicial horizontal.
            - Velocidad inicial vertical.
        Autor: Javier Rodríguez López  
        Fecha: 01/10/2025
    */

    //Declaro constante gravedad
    $G = 9.81;
    
    // Recoger los valores del formulario (los vamos a guardar en la variable $valorX)
    $valor1 = $_POST['velocidad_inicial']; // Este indice va a estar indicado en la etiqueta name del formulario (en la vista).
    $valor2 = deg2rad($_POST['angulo_lanzamiento']); // Los vamos a pasar a radianes.
    $valor3 = $_POST['angulo_lanzamiento']; // Queremos conservar también el angulo en grados para mostrarlo.

    //Realizar la suma de los dos valores
    $vox = $valor1 * cos($valor2); // Velocidad inicial horizontal
    $voy = $valor1 * sin($valor2); // Velocidad inicial vertical
    $xmax = (pow($valor1, 2) * sin(2 * $valor2)) / $G; // Alcance máximo alcanzado por un proyectil
    $ymax = (pow($valor1, 2) * pow(sin($valor2), 2)) / (2 * $G); // Altura máxima
    $tiempo = (2 * $valor1 * sin($valor2)) / $G; // Tiempo total de vuelo

    //Operacion (Creo una vv para indicar el tipo de operacion que se va a realizar)
    $operacion = "Calculo de lanzamiento de proyectiles";


?>