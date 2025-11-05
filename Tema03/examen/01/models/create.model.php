<?php
    //1. Cargamos peliculas:
    $peliculas = get_peliculas();

    // 2. Obtenemos los datos del formulario:
        $id= $_POST['id'] ?? null;
        $titulo= $_POST['titulo'] ?? null;
        $anio= $_POST['anio'] ?? null;
        $idioma= $_POST['idioma'] ?? null;
        $director= $_POST['director'] ?? null;
        $generos= $_POST['generos'] ?? null;
        $recaudacion= $_POST['recaudacion'] ?? null;

    // 3. Creamos un nuevo array con la pelicula nueva:
    $nueva_pelicula = [
        'id' => $id,
        'titulo' => $titulo,
        'anio' => $anio,
        'idioma' => $idioma,
        'director' => $director,
        'generos' => explode(',', $generos), // Convertimos la cadena en un array
        'recaudacion' => $recaudacion
    ];

    // 4. Añadimos la nueva pelicula al array de peliculas:
    $peliculas[] = $nueva_pelicula;
?>