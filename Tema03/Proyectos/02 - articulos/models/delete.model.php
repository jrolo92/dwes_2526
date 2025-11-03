<?php
    // 1. Obtenemos el id del articulo a borrar:
    $id_borrar = $_GET['id'] ?? null;

    // 2. Obtenemos la tabla de articulos:
    $articulos = get_tabla_articulos();

    // 3. Obtenemos la tabla de categorias:
    $categorias = get_tabla_categorias();

    // 4. Obtenemos el índice del articulo a eliminar mediante su id:
    $indice_eliminar = get_indice_articulo_por_id($articulos, $id_borrar);

    // 5. Eliminamos el indice del array artículos y reorganizamos el array:
    if($indice_eliminar !== null){
        unset($articulos[$indice_eliminar]);
        $articulos = array_values($articulos);
    }
?>