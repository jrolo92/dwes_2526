<?php
    /*
        modelo: index.model.php
        descripción: obtiene los datos de alumnos necesarios para mostrarlo en la vista principal
    */
    
    // 1. Creamos un objeto de la clase tabla_alumnos (hereda de conexión)
    //    Conectamos con la base de datos.
    $conexion = new Class_tabla_alumnos('localhost', 'root', '', 'fp');

    // 2. Obtenemos un objeto de la clase mysqli_result con los detalles de los alumnos
    $alumnos = $conexion->get_alumnos();


?>