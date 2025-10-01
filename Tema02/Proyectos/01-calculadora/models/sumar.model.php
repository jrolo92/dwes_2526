<?php
    /*  
        Modelo: sumar.model.php
        Descripción: Realiza la suma de dos valores.
        Autor: Javier Rodríguez López  
        Fecha: 01/10/2025
    */

    // Recoger los valores del formulario (los vamos a guardar en la variable $valorX)
    $valor1 = $_POST['valor1']; // Este indice va a estar indicado en la etiqueta name del formulario (en la vista).
    $valor2 = $_POST['valor2'];

    //Realizar la suma de los dos valores
    $resultado = $valor1 + $valor2;

    //Operacion (Creo una vv para indicar el tipo de operacion que se va a realizar)
    $operacion = "Suma";


?>