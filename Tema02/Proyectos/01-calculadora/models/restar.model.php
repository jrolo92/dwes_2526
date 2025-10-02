<?php
    /*
        Modelo: restar.model.php
        Descripción: realiza la resta de los dos valores que se introduzcan en el formulario.
        Autor: JAvier Rodríguez
        Fecha: 02/10/25
    */

    //Recogemos los valores introducidos en el formulario:
    $valor1 = $_POST['valor1']; // Este indice va a estar indicado en la etiqueta name del formulario (en la vista).
    $valor2 = $_POST['valor2'];

    // Realizamos los calculos:
    $resultado = $valor1 - $valor2;

    // Se crea una vv para indicar el tipo de operación que se va a realizar:
    $operacion = "Resta";

?>