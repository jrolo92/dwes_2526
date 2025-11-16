<?php 
    /*
        modelo: edit.model.php 
        descripción: carga los datos necesarios para mostrar en un formulario editable la información de un alumno.
                    Recibe los parámetros (GET) : id del alumno a editar.
                    (SIN ENCAPSULAMIENTO)
    */
    
    // 1. Obtengo el id del alumno:
    $id_editar = $_GET['id'] ?? null;

    // 2. Creamos un objeto de la clase tabla_alumnos vacío:
    $tabla_alumnos = new Class_tabla_alumnos();

    // 3. Cargamos los datos en nuestro objeto:
    $tabla_alumnos->getDatos();

    // 4. Obtener los detalles del alumno mediante un objeto de la clase alumno:
    // 4.1 Obtener el índice del array en el que se encuentra el objeto de la clase alumno:
    $indice = $tabla_alumnos->get_indice_from_id($id_editar);

    // 4.2 Obtener el objeto de la clase alumno:
    $alumno = $tabla_alumnos->get_alumno_por_indice($indice);

    // 5. Cargamos los cursos y las asignaturas:
    $cursos = Class_tabla_alumnos::getCursos();
    $asignaturas = Class_tabla_alumnos::getAsignaturas();
?>
