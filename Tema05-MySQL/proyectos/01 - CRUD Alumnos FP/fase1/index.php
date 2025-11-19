<?php
    /*
        controlador:index.php 
        descripción: controlador principal del proyecto CRUD alumnos FP
    */

    // Incluir las clases
    require_once ('class/alumno.class.php');
    require_once ('class/conexion.class.php');
    require_once ('class/tabla_alumnos.class.php');

    //Incluir modelo
    require_once ('models/index.model.php');

    // Incluir vista
    require_once ('views/index.view.php');
?>