<?php
    /*
        controlador: delete.php
        descripción: elimina un alumno de la tabla alumnos a partir de su id
    */
    
    //Incluimos las clases:
    require_once('class/alumno.class.php');
    require_once('class/conexion.class.php');
    require_once('class/tabla_alumnos.class.php');

    // Incluimos el modelo:
    require_once('models/delete.model.php');

    // Incluimos la vista:
    require_once('views/index.view.php');
?>