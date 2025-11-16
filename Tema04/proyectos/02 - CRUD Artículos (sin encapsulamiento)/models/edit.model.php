<?php 
    /*
        modelo: edit.model.php 
        descripción: carga los datos necesarios para mostrar en un formulario editable los detalles de un artículo.
                    Recibe los parámetros (GET) : id del artículo a editar.
    */
    // 1. Obtengo el id del artículo:
    $id_editar = $_GET['id'] ?? null;

    // 2. Creamos un objeto de la clase tabla_artículos vacío:
    $tabla_articulos = new Class_tabla_articulos();

    // 3. Cargamos los datos en nuestro objeto:
    $tabla_articulos->get_datos();

    // 4. Obtener los detalles del artículo mediante un objeto de la clase articulo:
    // 4.1 Obtener el índice del array en el que se encuentra el objeto de la clase artículo (funcion propia de la clase tabla_articulos):
    $indice = $tabla_articulos->get_indice_from_id($id_editar);

    // 4.2 Obtener el objeto de la clase artículo:
    $articulo = $tabla_articulos->get_articulo_from_indice($indice);

    // 5. Cargamos las marcas y las categorías:
    $marcas = Class_tabla_articulos::get_marcas();
    $categorias = Class_tabla_articulos::get_categorias();

?>