<?php

    // 1. Obtenemos el criterio de búsquedan por el método GET:
    $expresion = $_GET['expresion'] ?? null;

    // 2. Cargamos el array articulos con nuestra funcion:
    $articulos = get_tabla_articulos();

    // 3. Cargamos el array categorias.
    $categorias = get_tabla_categorias();

    // 3. Ordenamos la tabla en función del criterio usando nuestra funcion ordenar:
    // if ($expresion){
    //     $aux = [];                                              
    //     foreach ($articulos as $articulo){                            
    //         if (array_search($expresion, $articulo) !== false){    
    //             $aux[]= $articulo;                                 
    //         }
    //     }
    //     $articulos = $aux;                                             
    // }

    if ($expresion) {
    $aux = [];
        foreach ($articulos as $articulo) {
            foreach ($articulo as $valor) {
                if (stripos((string)$valor, $expresion) !== false) {
                    $aux[] = $articulo;
                    break; 
                }
            }
        }
        $articulos = $aux;
    }
<<<<<<< HEAD

=======
>>>>>>> 31c571e077d4a534a072be3aa156c50eab7eceba
?>