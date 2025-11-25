<?php
    /*
        controlador: edit.php
        descripción: obtiene los detalles de un alumno y permite editarlos
    */

    // Cargamos las clase:
    require_once ('class/alumno.class.php');
    require_once ('class/conexion.class.php');
    require_once ('class/tabla_alumnos.class.php');

    // Incluye modelo:
    require_once ('models/edit.model.php');

    // Incluye vista:
    require_once ('views/edit.view.php');
?>