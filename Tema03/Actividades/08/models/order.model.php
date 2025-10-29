<?php
    /*
    Modelo: order.model.php
    Descripción: Recibe el criterio de ordenación desde el menú y los ordena por ese criterio usando la función ordenar().
    Autor: Javier Rodríguez López
    Fecha 28/10/25
    */

    // 1. Obtenemos el criterio de ordenación por el método GET:
    $criterio = $_GET['criterio'] ?? null;

    // 2. Cargamos el array libros con nuestra funcion:
    $libros = get_tabla_libros();

    // 3. Ordenamos la tabla en función del criterio usando nuestra funcion ordenar:
    if ($criterio){
        $columna = array_column($libros, $criterio);               // Extraemos la columna por la que vamos a ordenar en función del criterio.
        array_multisort($columna, SORT_ASC, $libros);              // Y lo ordenamos usando la funcion para arrays multidimensionales. 
    }

?>