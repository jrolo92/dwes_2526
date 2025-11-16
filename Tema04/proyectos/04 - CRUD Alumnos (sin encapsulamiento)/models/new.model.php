<?php 
    /*
        Modelo: new.model.php
        Descripción: Genera los datos necesarios para el formulario de creación de un nuevo alumno.
        (SIN ENCAPSULAMIENTO)
        
        Datos necesarios:
            - Array de cursos ($cursos): lista de cursos disponibles para asignar a un alumno.
            - Array de asignaturas ($asignaturas): lista de asignaturas disponibles para asignar a un alumno.
    */
        
    // Incluir el array de cursos:
    $cursos = Class_tabla_alumnos::getCursos();

    // Incluir el array de asignaturas:
    $asignaturas = Class_tabla_alumnos::getAsignaturas();
    
?>
