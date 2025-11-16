<?php 
    /*
        Controlador: delete.php
        descripción: Permite eliminar un artículo.
        recibe parametros (GET) : id del articulo a eliminar.
    */
    
    // 1. Cargamos las clases:
    require_once 'class/articulo.class.php';
    require_once 'class/tabla_articulos.class.php';

    // 2. Incluimos el modelo:
    require_once 'models/delete.model.php';

    // 3. Incluimos la vista:
    require_once 'views/index.view.php';

?>