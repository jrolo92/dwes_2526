<?php 
    /*
        modelo:create.model.php 
        descripción: obtiene los detalles del formulario y añade nuevo alumno.
        (SIN ENCAPSULAMIENTO)
    */
    
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

    // 4. Crear un objeto o instancia de la clase tabla_alumnos
    $tabla_alumnos = new Class_tabla_alumnos();

    // 5. Cargar los datos en el objeto:
    $tabla_alumnos->getDatos();

    // 6. Añadimos el alumno nuevo a la tabla con nuestra función:
    $tabla_alumnos->create($alumno);

    // 7. Obtener array de objetos de la clase alumnos (acceso directo a la propiedad pública)
    $alumnos = $tabla_alumnos->tabla;

    // 8. Obtener el array de cursos y de asignaturas:
    $cursos = Class_tabla_alumnos::getCursos();
    $asignaturas = Class_tabla_alumnos::getAsignaturas();

?>
