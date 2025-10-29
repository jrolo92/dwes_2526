<?php
    /*
    Modelo: search.model.php
    Descripción: Recibe la expresion de búsqueda desde el menú y muestra los libros con esa expresion
    Autor: Javier Rodríguez López
    Fecha 29/10/25
    */

    // 1. Obtenemos el criterio de búsquedan por el método GET:
    $expresion = $_GET['expresion'] ?? null;

    // 2. Cargamos el array libros con nuestra funcion:
    $libros = get_tabla_libros();

    // 3. Ordenamos la tabla en función del criterio usando nuestra funcion ordenar:
    if ($expresion){
        $aux = [];                                              // Creamos un array para almacenar los libros que coinciden con la búsqueda.
        foreach ($libros as $libro){                            // Recorre el array de libros (cada libro es un array asociativo con sus campos y valores)
            if (array_search($expresion, $libro) !== false){    // Comprueba si alguno de los campos del libro contiene la expresion
                $aux[]= $libro;                                 // Si la contiene se añade al array auxiliar
            }
        }
        $libros = $aux;                                             // Asigno el array auxiliar al array de libros que va a mostrar la vista
    }

?>