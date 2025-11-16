<?php 
    /*
        modelo: delete.model.php 
        descripción: obtiene el id del alumno y lo elimina
        (SIN ENCAPSULAMIENTO)
    */
    
    // 1. Obtenemos el id mediante el método GET:
    $id_eliminar = $_GET['id'] ?? null;

    // 2. Creamos el objeto de la clase tabla_alumnos:
    $tabla_alumnos = new Class_tabla_alumnos();

    // 3. Cargamos los alumnos en el objeto:
    $tabla_alumnos->getDatos();

    // 4. Obtenemos el índice del array en el que se encuentra el objeto:
    $indice = $tabla_alumnos->get_indice_from_id($id_eliminar);

    // 5. Eliminamos el alumno con nuestro método personalizado delete().
    $tabla_alumnos->delete($indice);

    // 6. Obtener la tabla alumnos (acceso directo a la propiedad pública):
    $alumnos = $tabla_alumnos->tabla;

    // 7. Cargamos el array de cursos y asignaturas:
    $cursos = Class_tabla_alumnos::getCursos();
    $asignaturas = Class_tabla_alumnos::getAsignaturas();
?>
