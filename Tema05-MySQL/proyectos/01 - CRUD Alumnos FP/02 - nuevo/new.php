<?php
    /*
        controlador:new.php 
        descripción: controlador para añadir un nuevo alumno al proyecto CRUD alumnos FP
    */

    // Incluir las clases
    require_once ('class/alumno.class.php');
    require_once ('class/conexion.class.php');
    require_once ('class/tabla_alumnos.class.php');

    //Incluir modelo
    require_once ('models/new.model.php');

    // Incluir vista
    require_once ('views/new.view.php');
?>