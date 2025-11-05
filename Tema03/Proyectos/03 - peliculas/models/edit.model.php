<?php
    // 1. Obtenemos el id de la película a editar
    $id_editar = $_GET['id'] ?? null;

    // 2. Obtenemos el array de películas
    $peliculas = get_peliculas();

    // 3. Obtenemos el array de géneros
    $generos = get_generos();

    // 4. Obtenemos el indice de la película a editar
    $indice = get_indice_por_id($peliculas, $id_editar);

    // 5. Guardamos los valores de esa pelicula en otra variable
    $pelicula = $peliculas[$indice];
?>