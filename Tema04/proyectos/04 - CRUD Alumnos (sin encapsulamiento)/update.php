<?php 
    /* 
        controlador: edit.php
        descripcion: permite mostrar en un formulario editable los detalles de un alumno.
                    (SIN ENCAPSULAMIENTO)
    */

    // 1. Incluimos las clases necesarias:
    require_once "class/alumno.class.php";
    require_once "class/tabla_alumnos.class.php";

    // 2. Incluimos el modelo:
    require_once "models/update.model.php";

    // 3. Incluimos la vista:
    require_once "views/index.view.php";
    
?>