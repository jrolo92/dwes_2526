<?php
    /*
        modelo: index.model.php
        descripción: obtiene los datos de alumnos necesarios para mostrarlo en la vista principal
    */
    
    // 1. Creamos un objeto de la clase tabla_alumnos (hereda de conexión)
    $tabla_alumnos = new Class_tabla_alumnos('localhost', 'root', '', 'fp');

    // Obtenemos un objeto de la clase mysqli_result con los detalles de los alumnos
    $alumnos = $tabla_alumnos->get_alumnos();

    // Recorremos el objeto y vamos mostrando sus filas con el fetch_assoc(). Podría servir para mostrar los resultados en la vista
    // while($alumno = $alumnos->fetch_assoc()){
    //     echo $alumno['id'] . ' ' . $alumno['alumno'] . '<br>';
    // }
?>