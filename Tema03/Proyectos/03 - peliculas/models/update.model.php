<?php
    // 1. Obtener el id de la película a actualizar
    $id_actualizar = $_GET['id'] ?? null;

    // 2. Obtener el array de películas
    $peliculas = get_peliculas();

    // 3. Obtener el arrat de generos
    $generos = get_generos();

    // 4. Obtener el índice de la película a actualizar
    $indice = get_indice_por_id($peliculas, $id_actualizar);

    // 5. Recogemos los datos del formulario
    $id = $_POST['id'] ?? null;
    $titulo = $_POST['titulo'] ?? null;
    $genero_id = $_POST['genero_id'] ?? null;
    $director = $_POST['director'] ?? null;
    $anio = $_POST['anio'] ?? null;

    // 6. Guardamos la nueva pelicula en un nuevo array
    $nueva_pelicula = [
        'id' => $id,
        'titulo' => $titulo,
        'genero_id' => $genero_id,
        'director' => $director,
        'anio' => $anio
    ];

    // 7. Actualizamos la película en el array de películas
    if($indice !== null) {
        $peliculas[$indice] = $nueva_pelicula;
    }

?>