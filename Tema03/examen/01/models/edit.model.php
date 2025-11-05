<?php
    // Obtenemos el id de la película a editar (recibido por el método GET):
    $id_editar = $_GET['id'];

    // 2. Cargamos tabla peliculas:
    $peliculas = get_peliculas();

    // 3. Obtenemos el indice de la película a editar:
    $indice = get_indice_pelicula_por_id($peliculas, $id_editar);

    // 4. Mostramos los valores de esa película:
    $pelicula = $peliculas[$indice];
?>