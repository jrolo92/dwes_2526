<?php
    /*
        modelo: new.model.php 
        descripción: modelo para crear un nuevo alumno
    */

    // 1. Conectamos con la base de datos:
    $conexion = new Class_tabla_alumnos('localhost', 'root', '', 'fp');

    // 2. Obtener array asociativo con los cursos:
    $cursos = $conexion->get_cursos();
?>