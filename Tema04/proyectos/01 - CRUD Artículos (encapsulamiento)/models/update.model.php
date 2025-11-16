<?php 
    /*
        modelo:update.model.php 
        decripción: obtiene los detalles del artículo editado.
    */

    // 1. Cargo el id del artículo:
    $id_editar = $_GET['id'] ?? null;
    
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

    // 4. Crear un objeto o instancia de la clase tabla_articulos (Simula conexion con BD)
    $tabla_articulos = new Class_tabla_articulos();

    // 5. Cargar los datos en el objeto:
    $tabla_articulos->get_datos();

    // Obtenemos el índice de la tabla_articulos de dicho artículo:
    $indice = $tabla_articulos->get_indice_from_id($id_editar);

    // 6. Añadimos el articulo creado a la tabla con nuestra función:
    $tabla_articulos->update($articulo, $indice);

    // 7. Obtener array de objetos de la clase articulos
    $articulos = $tabla_articulos->get_articulos();

    // 8. Obtener el array de marcas y categorias:
    $marcas = Class_tabla_articulos::get_marcas();
    $categorias = Class_tabla_articulos::get_categorias();

?>