<?php 
    /*
        Modelo: new.model.php.
        Descripción: Genera los datos necesarios para el formulario de creación de un nuevo artículo.
        Datos necesarios:
            - Array de marcas ($categorias): lista de categorias disponibles para asignar a un artículo.
            - Array de categorías ($marcas): lista de marcas disponibles para asignar a un artículo.
    */
        
    // Incluir el arra de marcas:
    $marcas = Class_tabla_articulos::get_marcas();

    // Incluir el array de categorías:
    $categorias = Class_tabla_articulos::get_categorias();

    

?>