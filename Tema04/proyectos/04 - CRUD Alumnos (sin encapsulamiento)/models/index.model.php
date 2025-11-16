<?php 
    /*
        Modelo: index.model.php
        Descripción: Modelo principal del proyecto CRUD de alumnos 
                    (SIN ENCAPSULAMIENTO).
    */
    
    // 1. Creamos un objeto de la clase tabla_alumnos:
    $tabla_alumnos = new Class_tabla_alumnos();

    // 2. Obtenemos los datos de los alumnos:
    $tabla_alumnos->getDatos();

    // 3. Obtener el array de objetos de la clase alumnos (acceso directo a la propiedad pública):
    $alumnos = $tabla_alumnos->tabla;

    // 4. Obtener los cursos disponibles:
    $cursos = Class_tabla_alumnos::getCursos();

    // 5. Obtener las asignaturas disponibles:
    $asignaturas = Class_tabla_alumnos::getAsignaturas();   
?>
