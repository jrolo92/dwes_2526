<?php
    /*
    Archivo: delete.model.php 
    Modelo: Elimina un libro del array
    Descripción: Este archivo recibe un parámetro 'id' a través de la URL y lo elimina del array.
    Autor: Javier Rodríguez
    */

        // Obtener el id del libro a eliminar desde la URL:
        $id_eliminar = $_GET['id'] ?? null;

        // Cargar tabla de libros
        $libros = get_tabla_libros();

        /* 
        Obtener el índice del libro que quiero eliminar en el array a partir del id 
        (si el libro tiene el id = 2 en el array tendrá el indice 1)
        Lo vamos a hacer mediante una función
        */
        
        $indice = get_indice_libro_por_id($libros, $id_eliminar);
        if ($indice !== null)  {
            unset($libros[$indice]); // Elimina ese libro
            // con ese libro ya borrado habría que reorganizar el array para que vuelva a tener los indices ordenados y no se salte el indice del que hemos borrado
            $libros = array_values($libros);
        }
        

?>