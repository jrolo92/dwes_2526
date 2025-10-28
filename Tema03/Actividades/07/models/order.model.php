<?php
    /*
    Modelo: order.model.php
    Descripción: Recibe el criterio de ordenación desde el menú y los ordena por ese criterio usando la función ordenar().
    Autor: Javier Rodríguez López
    Fecha 28/10/25
    */

    // 1. Obtenemos el criterio de ordenación por el método GET:
    $criterio = $_GET['criterio'];

    // 2. Cargamos el array libros con nuestra funcion:
    $libros = get_tabla_libros();

    // 3. Ordenamos la tabla en función del criterio usando nuestra funcion ordenar:
    $libros = ordenar($libros, $criterio);
?>