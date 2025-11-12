<?php 
    /*
        modelo: show.model.php 
        descripción: obtiene el id del articulo a mostrar y lo muestra en un formulario
    */
    
        // 1. Obtenemos el id mediante el metodo get:
        $id_mostrar = $_GET['id'] ?? null;

        // 2. Creamos el objeto de la clase tabla_articulos:
        $tabla_articulos = new Class_tabla_articulos();

        // 3. Cargamos los articulos en el objeto:
        $tabla_articulos->get_datos();

        // 4. Buscamos el articulo por id:
        $articulo = null;
        if ($id_mostrar !== null) {
            foreach ($tabla_articulos->get_articulos() as $item) {
                if ($item->get_id() == $id_mostrar) {
                    $articulo = $item;
                    break;
                }
            }
        }

        // 5. Cargamos el array de categorias:
        $categorias = Class_tabla_articulos::get_categorias();
?>