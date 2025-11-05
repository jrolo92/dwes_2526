<?php
    // 1. Obtenemos la expresion de busqueda
    $expresion = $_GET['expresion'] ?? null;

    // 2. Cargamos el array de peliculas
    $peliculas = get_peliculas();

    // 3. Cargamos el array de generos
    $generos = get_generos();

    // 4. Hacemos l abúsqueda usando la expresion
    if ($expresion) {
        $resultado = [];
        foreach ($peliculas as $pelicula) {
            if (array_search($expresion, $pelicula) !== false) {
                $resultado[] = $pelicula;
            }
        }
        $peliculas = $resultado;
    }  
?>
