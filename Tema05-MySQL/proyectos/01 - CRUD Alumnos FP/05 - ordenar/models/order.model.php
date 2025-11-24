<?php
    /*
        controlador: order.php
        descripción: ordena la tabla de alumnos en función de un criterio escogido
    */

    // 1. Obtenemos el criterio de ordenación:
    $criterio = $_GET['criterio'] ?? null;

    // 2. Conectamos a la bd:
    $conexion = new Class_tabla_alumnos('localhost', 'root', '', 'fp');

    // 3. Usamos nuestra función de ordenar:
    $alumnos = $conexion->order($criterio);
?>