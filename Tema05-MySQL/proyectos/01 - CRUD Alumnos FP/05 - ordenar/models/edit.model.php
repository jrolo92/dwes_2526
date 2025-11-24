<?php
    /*
        modelo: edit.model.php 
        descripción: muestra los detalles de un alumno en un formulario editable
        recibe: id del alumno por el método get
    */
    
    // 1. Obtenemos el id del alumno a editar:
    $alumno_id = $_GET['id'] ?? null;

    // 2. Realizamos la conexión con la bd:
    $conexion = new Class_tabla_alumnos('localhost', 'root', '', 'fp');

    // 3. Obtenemos los datos del alumno
    $alumno = $conexion->read($alumno_id);

    // 4. Obtenemos el array de cursos:
    $cursos = $conexion->get_cursos();

?>