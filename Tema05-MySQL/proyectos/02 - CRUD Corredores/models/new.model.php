<?php
    /*
        modelo: new.model.php
        descripción: permite añadir un nuevo corredor a la bd
    */
    
    // 1. Conectamos con la bd
    $conexion = new Class_tabla_corredores();

    // 2. Obtenemos las categorías:
    $categorias = $conexion->get_categorias();

    // 3. Obtenemos los clubs:
    $clubs = $conexion->get_clubs();
?>