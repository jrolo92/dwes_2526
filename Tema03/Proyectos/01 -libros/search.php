<?php
    /* 
        Actividad 3.8
        Descripcion:  Permite filtrar el array libros mediante una expresión de búsqueda
                      proporcionada poir el usuario a través de la URL
        Autor: Javier Rodríguez
        Fecha: 29/10/25

        Método GET URL:
            - Obtener la expresion de búsqueda
            - Pe: search.php?expresion=aventura
    */

    // Librerías
    require_once "libs/functions.php";

    // Modelo
    require_once "models/search.model.php";
        
    // Vista
    require_once "views/index.view.php";                     


?>