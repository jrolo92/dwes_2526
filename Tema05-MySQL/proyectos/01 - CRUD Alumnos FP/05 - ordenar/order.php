<?php
    /*
        controlador: order.php
        descripción: ordena la tabla de alumnos en función de un criterio escogido
    */

    // Incluimos las clases:
    require_once ('class/alumno.class.php');
    require_once ('class/conexion.class.php');
    require_once ('class/tabla_alumnos.class.php');

    //Incluir modelo
    require_once ('models/order.model.php');

    // Incluir vista
    require_once ('views/index.view.php');
?>