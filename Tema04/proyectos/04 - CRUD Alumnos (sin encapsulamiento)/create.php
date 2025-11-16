<?php 
    /*
        controlador:create.php 
        descripción: Añade un nuevo alumno a partir del formulario new.
                    (SIN ENCAPSULAMIENTO)
    */

    // Incluir las clases necesarias
    require_once 'class/alumno.class.php';
    require_once 'class/tabla_alumnos.class.php';

    // Incluir el modelo
    require_once 'models/create.model.php';

    // Incluir la vista
    require_once 'views/index.view.php';
?>