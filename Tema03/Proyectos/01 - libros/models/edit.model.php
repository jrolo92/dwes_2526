<?php
    /*
        Archivo: edit.model.php 
        Descripción: Modelo para la edición de un registro en un array de libros
        
        Método GET:
            - id del registro a editar
            - ejemplo: edit.php?id=5

    */

    // 1. Cargo el id del libro que voy a editar y almacenarlo en una vv:
    $id_editar = $_GET['id'] ?? null;

    // 2. Cargamos el array libros con nuestra función:
    $libros = get_tabla_libros();

    // 3. Obtener el índice (array) del libro que queremos editar con nuestra función:
    $indice_libro = get_indice_libro_por_id($libros, $id_editar);

    // 4. Obtener los datos el libro a editar:
    if ($indice_libro !== null) {                   // Si el índice NO es nulo
        $libro = $libros[$indice_libro];            // Guardamos los datos del libro con ese índice en una nueva vv
    } else {
        echo "ERROR: Libro no encontrado.";         // Si el indice es nulo -> Mostramos mensaje de error
        exit();
    }

?>