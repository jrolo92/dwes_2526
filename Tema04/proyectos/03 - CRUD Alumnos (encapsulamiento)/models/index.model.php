<?php 
    /*
            Modelo: index.model.php
            Descripción: Modelo principal del proyecto CRUD de alumnos (CON ENCAPSULAMIENTO).
    */
    

    // 1. Creamos un objeto de la clase tabla_alumnos:
    $tabla_alumnos = new Class_tabla_alumnos();

    // 2. Obtenemos los datos de los alumnos:
    $tabla_alumnos->getDatos();

    // 3. Obtener el array de objetos de la clase alumnos:
    $alumnos = $tabla_alumnos->getTabla();

    // 4. Obtener los cursos disponibles:
    $cursos = Class_tabla_alumnos::getCursos();

    // 5. Obtener las asignaturas disponibles:
    $asignaturas = Class_tabla_alumnos::getAsignaturas();   
?>