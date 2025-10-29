<?php
/*
        Archivo: update.model.php 
        Descripción: Modelo para la actualizacion de un registro en un array de libros


    */

// 1. Cargo el id del libro que voy a editar y almacenarlo en una vv:
$id_editar = $_GET['id'] ?? null;

// 2. Cargamos el array libros con nuestra función:
$libros = get_tabla_libros();

// 3. Obtener el índice (array) del libro que queremos editar con nuestra función:
$indice_libro = get_indice_libro_por_id($libros, $id_editar);

// 4. Creamos nuevo registro con los datos del formulario de edición:
$titulo_edit    = $_POST['titulo'] ?? null;
$autor_edit     = $_POST['autor'] ?? null;
$editorial_edit = $_POST['editorial'] ?? null;
$genero_edit    = $_POST['genero'] ?? null;
$precio_edit    = $_POST['precio'] ?? null;

// 5. Creamos un nuevo array asociativo con el nuevo registro (ya editado):
$libro_editado = [
    'id'        => $id_editar,
    'titulo'    => $titulo_edit,
    'autor'     => $autor_edit,
    'editorial' => $editorial_edit,
    'genero'    => $genero_edit,
    'precio'    => (float) $precio_edit,
];
// var_dump($libro_editado); // Los datos del formulario se guardan bien

// Usamos nuestra función update_libros_por_id para insertar datos en el array cuyo indice coincida con el que se ha actualizado:
// update_libros_por_id($libros, $id_editar, $libro_editado);
$libros[$indice_libro] = $libro_editado;


