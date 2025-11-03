<?php


// Obtenemos id del libro a mostrar
$id_mostrar = $_GET['id'] ?? null;

// Cargar el array de libros
$articulos = get_tabla_articulos();

// Cargar el array categorias:
$categorias = get_tabla_categorias();

// Obtener el índice del libro a eliminar partiendo del id

$indice = get_indice_articulo_por_id($articulos, $id_mostrar);

if ($indice !== null) {
    $articulo = $articulos[$indice];
} else {
    // Manejar el caso en el que el libro no se encuentra
    echo "ERROR: Libro no encontrado.";
    exit();
}
?>