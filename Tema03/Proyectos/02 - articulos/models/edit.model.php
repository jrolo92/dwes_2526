<?php

    // 1. Obtenemos el id del artículo que se quiere editar:
    $articulo_id = $_GET['id'] ?? null;

    // 2. Cargamos la tabla de artículos y la de categorias:
    $articulos = get_tabla_articulos();
    $categorias = get_tabla_categorias();

    // 3. Obtenemos el indice del array de artículos:
    $indice = get_indice_articulo_por_id($articulos, $articulo_id);

    // 4. Mostramos los valores de ese artículo:
    $articulo = $articulos[$indice];


?>