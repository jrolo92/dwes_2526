<?php
    /*
        controlador: update.php
        descripción: alctualiza los detalles de un alumno en la bd
    */

    // Cargamos las clase:
    require_once ('class/alumno.class.php');
    require_once ('class/conexion.class.php');
    require_once ('class/tabla_alumnos.class.php');

    // Incluye modelo:
    require_once ('models/update.model.php');

    // Incluye vista:
    require_once ('views/index.view.php');
?>