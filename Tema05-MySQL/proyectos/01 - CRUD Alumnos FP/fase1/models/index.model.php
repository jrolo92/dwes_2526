<?php
    /*
        modelo: index.model.php
        descripción: obtiene los datos de alumnos necesarios para mostrarlo en la vista principal
    */
    
    // 1. Creamos un objeto de la clase tabla_alumnos (hereda de conexión)
    $tabla_alumnos = new Class_tabla_alumnos('localhost', 'root', '', 'fp');

    $alumnos = $tabla_alumnos->get_alumnos();

    while($alumno = $alumnos->fetch()){
        echo $alumno->id . ' ' . $alumno->alumno . '<br>';
    }
?>