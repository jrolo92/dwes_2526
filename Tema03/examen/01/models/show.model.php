<?php
    // 1. Obtenemos el id de la pelicula a mostrar mediante GET:
    $id_mostrar = $_GET['id'] ?? null;

    // 2. Cargamos las peliculas:
    $peliculas = get_peliculas();

    // 3. Obtenemos el indice de la pelicula a mostrar:
    $indice = get_indice_pelicula_por_id($peliculas, $id_mostrar);

    // la mostramos en la vista
    $pelicula = $peliculas[$indice];
?>