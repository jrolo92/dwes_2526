<?php
    // 1. Obtenemos el id de la pelicula a eliminar (metodo GET):
    $id_eliminar = $_GET['id'] ?? null;

    // 2. Cargamos las peliculas:
    $peliculas = get_peliculas();

    // 3. Obtenemos el indice de la pelicula a eliminar:
    $indice = get_indice_pelicula_por_id($peliculas, $id_eliminar);

    // 4. Eliminamos la película:
    unset($peliculas[$indice]);
    // y reindexamos el array:
    $peliculas = array_values($peliculas);

?>