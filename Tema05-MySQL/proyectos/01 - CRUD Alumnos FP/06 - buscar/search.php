<?php
    /*
        controlador: search.php
        descripción: realiza una búsqueda a partir de una expresión
    */
    
    // Incluimos las clases:
    require_once ('class/alumno.class.php');
    require_once ('class/conexion.class.php');
    require_once ('class/tabla_alumnos.class.php');

    //Incluir modelo
    require_once ('models/search.model.php');

    // Incluir vista
    require_once ('views/index.view.php');
?>