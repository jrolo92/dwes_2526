<?php
    /*
        controlador: index.php
        descripción: controlador principal del proyecto CRUD corredores
    */

    // Incluimos configuracion de la base de datos:
    require_once 'config/configDB.php';

    // Incluimos las clases
    require_once 'class/corredor.class.php';
    require_once 'class/conexion.class.php';
    require_once 'class/tabla_corredores.class.php';

    // Incluimos el modelo
    require_once 'models/index.model.php';

    // Incluimos la vista
    require_once 'views/index.view.php';

?>