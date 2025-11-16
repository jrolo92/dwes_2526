<?php 
    /* 
        controlador: edit.php
        descripción: controlador que permite editar en un formulario editable información sobre el alumno.
                    Recibe como parámetro (GET) : id del alumno cuya información se quiere editar.
    */

    // 1. Incluimos las clases necesarias:
    require_once "class/alumno.class.php";
    require_once "class/tabla_alumnos.class.php";

    // 2. Incluimos el modelo:
    require_once "models/edit.model.php";

    // 3. Incluimos la vista:
    require_once "views/edit.view.php";
    
?>