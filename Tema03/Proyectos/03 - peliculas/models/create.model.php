<?php
    // 1. Cargamos las peliculas
    $peliculas = get_peliculas();

    // 2. Cargamos los generos
    $generos = get_generos();

    // 3. Obtenemos los datos del formulario de new.view.php
    $id = $_POST['id'] ?? null;
    $titulo = $_POST['titulo'] ?? null;
    $genero_id = $_POST['genero_id'] ?? null;
    $director = $_POST['director'] ?? null;
    $anio = $_POST['anio'] ?? null;

    // 4. Creamos un array con la nueva pelicula
    $nueva_pelicula = [
        'id' => (int)$id,
        'titulo' => $titulo,
        'genero_id' => (int)$genero_id,
        'director' => $director,
        'anio' => (int)$anio
    ];

    // 5. Añadimos la nueva pelicula al array de peliculas
    $peliculas[] = $nueva_pelicula;


?>