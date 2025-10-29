<?php
    // 1. Obtenemos la tabla de artículos con nuestra función:
    $articulos = get_tabla_articulos();

    // 2. Obtenemos la tabla de categorías
    $categorias = get_tabla_categorias();

    // 3. Obtenemos los datos del formulario:
    $id = $_POST['id'] ?? null;
    $descripcion = $_POST['descripcion'] ?? null;
    $modelo = $_POST['modelo'] ?? null;
    $categoria = $_POST['categoria_id'] ?? null;
    $unidades = $_POST['unidades'] ?? null;
    $precio = $_POST['precio'] ?? null;

    // 4. Guardamos los datos del nuevo artículo en un array:
    $nuevo_articulo = 
    [
        'id' => $id,
        'descripcion' => $descripcion,
        'modelo' => $modelo,
        'categoria_id' => $categoria,
        'unidades' => $unidades,
        'precio' => (float)$precio
    ];

    // 5. Añadimos el array nuevo al anterior:
    $articulos[] = $nuevo_articulo;
?>