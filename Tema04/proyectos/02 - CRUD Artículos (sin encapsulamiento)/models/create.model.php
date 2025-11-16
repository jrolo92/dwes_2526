<?php 
    /*
        modelo:create.model.php 
        decripción: obtiene los detalles del formulario y añade nuevo artículo.
    */
    
    // 1. Cargar los detalles del formulario:
        $id = $_POST['id'] ?? null;
        $descripcion = $_POST['descripcion'] ?? null;
        $modelo = $_POST['modelo'] ?? null;
        $marca = $_POST['marca'] ?? null;
        $categorias = $_POST['categorias'] ?? null;
        $unidades = $_POST['unidades'] ?? null;
        $precio = $_POST['precio'] ?? null;

    // 2. Validación

    // 3. Creo un objeto de la clase articulo a partir de los valores del formulario (IMPORTANTE que sigan el mismo orden que el constructor de la clase Articulo):
        $articulo = new Class_articulo(
            $id,
            $descripcion,
            $modelo,
            $marca,
            $categorias,
            $unidades,
            $precio,
        );

    // 4. Crear un objeto o instancia de la clase tabla_articulos
    $tabla_articulos = new Class_tabla_articulos();

    // 5. Cargar los datos en el objeto:
    $tabla_articulos->get_datos();

    // 6. Añadimos el articulo creado a la tabla con nuestra función:
    $tabla_articulos->create($articulo);

    // 7. Obtener array de objetos de la clase articulos
    $articulos = $tabla_articulos->articulos;

    // 8. Obtener el array de marcas:
    $marcas = Class_tabla_articulos::get_marcas();

?>