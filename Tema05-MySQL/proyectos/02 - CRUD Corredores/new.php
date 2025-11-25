<?php
    /*
        controlador: new.php
        descripción: permite añadir un nuevo corredor a la tabla
    */

    // Incluimos configuracion de la base de datos:
    require_once 'config/configDB.php';

    // Incluimos las clases
    require_once 'class/corredor.class.php';
    require_once 'class/conexion.class.php';
    require_once 'class/tabla_corredores.class.php';

    // Incluimos el modelo
    require_once 'models/new.model.php';

    // Incluimos la vista
    require_once 'views/new.view.php';

?>