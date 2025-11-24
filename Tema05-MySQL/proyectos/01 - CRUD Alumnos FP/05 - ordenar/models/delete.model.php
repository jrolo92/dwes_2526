<?php
    /*
        modelo: delete.model.php
        descripción: elimina un alumno de la tabla a partir de su id
    */
    
    // 1. Obtenemos el id por el método get:
    $alumno_id = $_GET['id'] ?? null;

    // 2. Conectamos con la base de datos:
    $conexion = new Class_tabla_alumnos('localhost', 'root', '', 'fp');

    // 3. Usamos nuestra función de eliminar:
    $conexion->delete($alumno_id);

    // 4. Cargamos la vista actualizada y los cursos:
    $cursos = $conexion->get_cursos();
    $alumnos = $conexion->get_alumnos();
?>