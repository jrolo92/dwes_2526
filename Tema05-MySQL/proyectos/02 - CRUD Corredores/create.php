<?php
    /*
        controlador: new.php
        descripción: permite crear un nuevo corredor a partir de los datos del formulario new.view.php
                     y lo muestra en la vista principal
    */

    // Incluimos configuracion de la base de datos:
    require_once 'config/configDB.php';

    // Incluimos las clases
    require_once 'class/corredor.class.php';
    require_once 'class/conexion.class.php';
    require_once 'class/tabla_corredores.class.php';

    // Incluimos el modelo
    require_once 'models/create.model.php';

    // Incluimos la vista
    require_once 'views/index.view.php';

?>