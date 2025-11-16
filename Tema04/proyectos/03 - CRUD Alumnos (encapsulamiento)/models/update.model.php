<?php 
    /*
        modelo:update.model.php 
        decripción: obtiene la info del alumno ya editada
    */

    // 1. Cargo el id del alumno:
    $id_editar = $_GET['id'] ?? null;
    
    // 1. Cargar los detalles del formulario:
        $id = $_POST['id'] ?? null;
        $nombre = $_POST['nombre'] ?? null;
        $apellidos = $_POST['apellidos'] ?? null;
        $email = $_POST['email'] ?? null;
        $fechaNac = $_POST['fechaNac'] ?? null;
        $curso = $_POST['curso'] ?? null;
        $asignaturas = $_POST['asignaturas'] ?? null;

    // 2. Validación

    /* 
        3. Creo un objeto de la clase alumnos a partir de los valores del formulario 
        (IMPORTANTE que sigan el mismo orden que el constructor de la clase):
    */
        $alumno = new Class_alumno(
            $id,
            $nombre,
            $apellidos,
            $email,
            $fechaNac,
            $curso,
            $asignaturas,
        );

    // 4. Crear un objeto o instancia de la clase tabla_alumnos (Simula conexion con BD)
    $tabla_alumnos = new Class_tabla_alumnos();

    // 5. Cargar los datos en el objeto:
    $tabla_alumnos->getDatos();

    // Obtenemos el índice de dicho alumno en la tabla_alumnos :
    $indice = $tabla_alumnos->get_indice_from_id($id_editar);

    // 6. Añadimos el alumno creado a la tabla con nuestra función:
    $tabla_alumnos->update($alumno, $indice);

    // 7. Obtener array de objetos de la clase alumnos
    $alumnos = $tabla_alumnos->getTabla();

    // 8. Obtener el array de cursos y de asignaturas:
    $cursos = Class_tabla_alumnos::getCursos();
    $asignaturas = Class_tabla_alumnos::getAsignaturas();

?>