<?php

    function get_peliculas() {
        return [
            [
                'id' => 1,
                'titulo' => 'The Shawshank Redemption',
                'genero_id' => 1,
                'director' => 'Frank Darabont',
                'anio' => 1994
            ],
            [
                'id' => 2,
                'titulo' => 'The Godfather',
                'genero_id' => 2,
                'director' => 'Francis Ford Coppola',
                'anio' => 1972
            ],
            [
                'id' => 3,
                'titulo' => 'The Dark Knight',
                'genero_id' => 4,
                'director' => 'Christopher Nolan',
                'anio' => 2008
            ],
            [
                'id' => 4,
                'titulo' => 'Pulp Fiction',
                'genero_id' => 2,
                'director' => 'Quentin Tarantino',
                'anio' => 1994
            ],
            [   
                'id' => 5,
                'titulo' => 'Forrest Gump',
                'genero_id' => 1,
                'director' => 'Robert Zemeckis',
                'anio' => 1994
            ]
        ];
    }

    function get_generos() {
        return [
            [
                'id' => 1,
                'nombre' => 'Drama'
            ],
            [
                'id' => 2,
                'nombre' => 'Crimen'
            ],
            [
                'id' => 3,
                'nombre' => 'Acción'
            ],
            [
                'id' => 4,
                'nombre' => 'Thriller'
            ],
        ];
    }

    function get_genero_nombre($generos, $genero_id) {
        foreach ($generos as $genero) {
            if ($genero['id'] == $genero_id) {
                return $genero['nombre'];
            }
        }
        return "Desconocido";
    }

    function get_indice_por_id($array, $id) {
        foreach ($array as $indice => $elemento) {
            if ($elemento['id'] == $id) {
                return $indice;
            }
        }
        return null;
    }

?>