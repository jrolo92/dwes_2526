<?php
    /*  
        Actividad 3.3
        Modelo: create.model.php
        Descripción: Modelo que va a añadir el nuevo libro al array de libros
        Autor: Javier Rodríguez López  
        Fecha: 22/10/2025

        Va a recibir por el metodo POST:
            - id
            - titulo
            - autor
            - editorial
            - genero
            - precio
    */

    //  Vamos a recuperar los datos del formulario:
        // Tenemos que segurarnos de que ningun dato del formulario se ha quedado en blanco porque entonces dara un error ya que no lo podrá encontrar

        $id = $_POST['id'] ?? null; // Comprueba que id tiene valor en el array $_POST y en caso de que no lo tenga le va a asignar valor nulo (Es un if abreviado)
        $titulo = $_POST['titulo'] ?? null;
        $autor = $_POST['autor'] ?? null;
        $editorial = $_POST['editorial'] ?? null;
        $genero = $_POST['genero'] ?? null;
        $precio = $_POST['pecio'] ?? null;
        
        // Creamos un nuevo array con los datos del libro nuevo
        $nuevoLibro = [
            'id' => $id,
            'titulo' => $titulo,
            'autor' => $autor,
            'editorial' => $editorial,
            'genero' => $genero,
            'precio' => (float)$precio
        ];

        //Cargamos el array con libros ya existente usando nuestra funcion.
        $libros = get_tabla_libros();

        // Añadimos el array del nuevo libro al array de libros ya existente
        $libros [] = $nuevoLibro;
?>