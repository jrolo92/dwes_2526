<?php
    // 1. Obtenemos el criterio de ordenación desde la URL
    $criterio = $_GET['criterio'] ?? null;

    // 2. Obtenemos el array de películas
    $peliculas = get_peliculas();

    // 3. Cargamos el array de generos
    $generos = get_generos();

    // 4. Ordenamos el array según el criterio
    if ($criterio) {
        $columna = array_column($peliculas, $criterio);
        array_multisort($columna, SORT_ASC, $peliculas);
    }
?>