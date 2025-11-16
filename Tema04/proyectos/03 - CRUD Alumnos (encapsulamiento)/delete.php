<?php 
    /*
        Controlador: delete.php
        descripción: Permite dar de baja a un alumno.
        recibe parametros (GET) : id del alumno a dar de baja.
    */
    
    // 1. Cargamos las clases:
    require_once 'class/alumno.class.php';
    require_once 'class/tabla_alumnos.class.php';

    // 2. Incluimos el modelo:
    require_once 'models/delete.model.php';

    // 3. Incluimos la vista:
    require_once 'views/index.view.php';

?>