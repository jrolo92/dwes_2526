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

        // 4. Obtenemos el indice del array en el que se encuentra el objeto a mostrar:
        $indice = $tabla_articulos->get_indice_from_id($id_mostrar);

        // 5. Obtenemos el objeto a partir de su indice:
        $articulo = $tabla_articulos->get_articulo_from_indice($indice);

        // 5. Cargamos el array de categorias y de marcas:
        $categorias = Class_tabla_articulos::get_categorias();
        $marcas = Class_tabla_articulos::get_marcas();
?>