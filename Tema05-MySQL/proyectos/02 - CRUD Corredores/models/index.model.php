<?php
    /*
        modelo: index.model.php
        descripción: obtiene los datos necesarios de los corredores
        para mostrar en la vista principal
    */

    // 1. Conectamos con la bd
    $conexion = new Class_tabla_corredores();

    // 2. Obtenemos el objeto (clase mysqli_result) con los detalles de los corredores
    $corredores = $conexion->get_corredores();
?>