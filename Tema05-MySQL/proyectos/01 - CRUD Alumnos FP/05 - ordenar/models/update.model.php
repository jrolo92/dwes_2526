<?php
    /*
        modelo: update.model.php 
        descripción: recoge los datos del formulario de edición y los actualiza en la bd
    */

    // 1. Obtenemos el id del alumno a actualizar:
    $alumno_id = $_POST['id'] ?? null;

    // 2. Obtenemos los datos del formulario:
    $nombre = $_POST['nombre'] ?? null;
    $apellidos = $_POST['apellidos'] ?? null;
    $email = $_POST['email'] ?? null;
    $dni = $_POST['dni'] ?? null;
    $telefono = $_POST['telefono'] ?? null;
    $nacionalidad = $_POST['nacionalidad'] ?? null;
    $fecha_nac = $_POST['fecha_nac'] ?? null;
    $curso_id = $_POST['curso_id'] ?? null;

    // 4. Guardamos los datos en un nuevo objeto de la clase alumno:
    $nuevo_alumno = new Class_alumno($alumno_id,$nombre,$apellidos,$email,$telefono,$nacionalidad,$dni,$fecha_nac,$curso_id);

    // 5. Creamos conexión con bd:
    $conexion = new Class_tabla_alumnos('localhost', 'root', '', 'fp');

    // 6. Actualizamos la bd con nuestra función:
    $conexion->update($nuevo_alumno, $alumno_id);

    // 7. Cargamos la tabla de alumnos ya actualizada para la vista
    $alumnos = $conexion->get_alumnos();
?>