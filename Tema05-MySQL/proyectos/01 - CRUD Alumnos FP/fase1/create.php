<?php
    /*
        controlador:create.php 
        descripción: crea un nuevo alumno en la tabla de la base de datos
    */

    // Incluir las clases
    require_once ('class/alumno.class.php');
    require_once ('class/conexion.class.php');
    require_once ('class/tabla_alumnos.class.php');

    //Incluir modelo
    require_once ('models/create.model.php');

    // Incluir vista
    require_once ('views/index.view.php');
?>