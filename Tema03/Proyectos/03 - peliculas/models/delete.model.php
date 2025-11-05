<?php
    // 1. Obtenemos el id de la pelicula a eliminar
    $id_eliminar = $_GET['id'] ?? null;

    // 2. Cargamos el array de peliculas
    $peliculas = get_peliculas();

    // 3. Cargamos el array de géneros
    $generos = get_generos();

    // 4. Eliminamos la pelicula del array:
    if ($id_eliminar !== null) {
        foreach ($peliculas as $index => $pelicula) {
            if ($pelicula['id'] == $id_eliminar) {
                unset($peliculas[$index]);
                // Reindexamos el array para evitar problemas posteriores
                $peliculas = array_values($peliculas);
                break;
            }
        }
    }
?>