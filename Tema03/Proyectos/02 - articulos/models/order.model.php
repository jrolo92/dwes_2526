<?php

    // 1. Obtenemos el criterio de ordenación por el método GET:
    $criterio = $_GET['criterio'] ?? null;

    // 2. Cargamos la tabla artículos:
    $articulos = get_tabla_articulos();

    // 3. Cargamos la tabla categorias:
    $categorias = get_tabla_categorias();

    // 3. Ordenamos la tabla en función del criterio usando nuestra funcion ordenar:
    if ($criterio){
        $columna = array_column($articulos, $criterio);               
        array_multisort($columna, SORT_ASC, $articulos);              
    }

?>