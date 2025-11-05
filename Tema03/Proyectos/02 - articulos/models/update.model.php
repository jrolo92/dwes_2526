<?php
    // 1. Obtenemos el id del articulo que vamos a actualizar:
    $id_actualizar= $_GET['id'] ?? null;

    // 2. Obtenemos la tabla de articulos
    $articulos = get_tabla_articulos();

    // 3. Obtenemos la tabla de categorías:
    $categorias = get_tabla_categorias();

    // 4. Obtenemos el indice del artículo que vamos a actualizar:
    $indice = get_indice_articulo_por_id($articulos, $id_actualizar);

    // 5. Obtenemos los datos del formulario de edicion:
        $id = $id_actualizar;
        $descripcion = $_POST['descripcion'] ?? null;
        $modelo = $_POST['modelo'] ?? null;
        $categoria = $_POST['categoria'] ?? null;
        $unidades = $_POST['unidades'] ?? null;
        $precio = $_POST['precio'] ?? null;

    // 6. Creamos un nuevo array con los nuevos valores del artículo:
        $articulo_editado = 
        [
            'id' => $id,
            'descripcion' => $descripcion,
            'modelo' => $modelo,
            'categoria_id' => $categoria,
            'unidades' => $unidades,
            'precio' => $precio
        ];

    // Añadimos el articulo editado al array adicional en su indice:
    $articulos[$indice] = $articulo_editado;


?>