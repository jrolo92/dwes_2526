<?php 
    /*
        modelo: show.model.php 
        descripción: obtiene el id del alumno a mostrar y lo muestra en un formulario
                    (SIN ENCAPSULAMIENTO)
    */
    
    // 1. Obtenemos el id mediante el método GET:
    $id_mostrar = $_GET['id'] ?? null;

    // 2. Creamos el objeto de la clase tabla_alumnos:
    $tabla_alumnos = new Class_tabla_alumnos();

    // 3. Cargamos los alumnos en la tabla:
    $tabla_alumnos->getDatos();

    // 4. Obtenemos el índice del array en el que se encuentra el objeto a mostrar:
    $indice = $tabla_alumnos->get_indice_from_id($id_mostrar);

    // 5. Obtenemos el objeto a partir de su índice:
    $alumno = $tabla_alumnos->get_alumno_por_indice($indice);

    // 6. Obtener el array de cursos y de asignaturas:
    $cursos = Class_tabla_alumnos::getCursos();
    $asignaturas = Class_tabla_alumnos::getAsignaturas();
?>
