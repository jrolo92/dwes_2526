<?php 
    /*
        modelo: delete.model.php 
        descripción: obtiene el id del articulo a mostrar y lo elimina
    */
    
        // 1. Obtenemos el id mediante el metodo get:
        $id_eliminar = $_GET['id'] ?? null;

        // 2. Creamos el objeto de la clase tabla_articulos:
        $tabla_articulos = new Class_tabla_articulos();

        // 3. Cargamos los articulos en el objeto:
        $tabla_articulos->get_datos();

        // 4. Obtenemos el indice del array en el que se encuentra el objeto:
        $indice = $tabla_articulos->get_indice_from_id($id_eliminar);

        // 5. Eliminamos el articulo con nuestro metodo personalizado delete().
        $tabla_articulos->delete($indice);

        // 6. Obtener la tabla articulos:
        $articulos = $tabla_articulos->get_articulos();

        // 7. Cargamos el array de categorias y marcas:
        $categorias = Class_tabla_articulos::get_categorias();
        $marcas = Class_tabla_articulos::get_marcas();
?>