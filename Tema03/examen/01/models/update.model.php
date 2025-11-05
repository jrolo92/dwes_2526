<?php
    // 1. Obtenemos el id de la pelicula que vamos a actualizar:
        $id_actualizar = $_GET['id'] ?? null;

    // 2. Cargamos la tabla de peliculas:
        $peliculas = get_peliculas();

    // 3. Obtenemos el índice de la película a actualizar:
        $indice_actualizar = get_indice_pelicula_por_id($peliculas, $id_actualizar);

    // 4. Recogemos los datos del formulario (método POST) y actualizamos la película:
        $id = $_POST['id'] ?? null;
        $titulo = $_POST['titulo'] ?? null;
        $anio = $_POST['anio'] ?? null;
        $idioma = $_POST['idioma'] ?? null;
        $director = $_POST['director'] ?? null;
        $generos = explode(',', $_POST['generos']) ?? null;
        $recaudacion = $_POST['recaudacion'] ?? null;

    // 5. Creamos un nuevo array con los datos actualizados:
    $pelicula_actualizada = [
        'id' => $id,
        'titulo' => $titulo,
        'anio' => $anio,
        'idioma' => $idioma,
        'director' => $director,
        'generos' => $generos,
        'recaudacion' => $recaudacion
    ];
    // 6. Actualizamos la película en la tabla de películas:
        $peliculas[$indice_actualizar] = $pelicula_actualizada;
 
?>