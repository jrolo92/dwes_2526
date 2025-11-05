<?php
    // Funcion para obtener la tabla de películas:
    function get_peliculas(){
        return [
        [
            'id' => 1,
            'titulo' => 'The Shawshank Redemption',
            'anio' => 1994,
            'idioma' => 'English',
            'director' => 'Frank Darabont',
            'generos' => ['Drama', 'Crime'],
            'recaudacion' => 28341469
        ],
        [
            'id' => 2,
            'titulo' => 'Inception',
            'anio' => 2010,
            'idioma' => 'English',
            'director' => 'Christopher Nolan',
            'generos' => ['Sci-Fi', 'Thriller'],
            'recaudacion' => 829895144
        ],
        [
            'id' => 3,
            'titulo' => 'Parasite',
            'anio' => 2019,
            'idioma' => 'Korean',
            'director' => 'Bong Joon-ho',
            'generos' => ['Thriller', 'Drama'],
            'recaudacion' => 258708722
        ],
        [
            'id' => 4,
            'titulo' => 'Amélie',
            'anio' => 2001,
            'idioma' => 'French',
            'director' => 'Jean-Pierre Jeunet',
            'generos' => ['Romance', 'Comedy'],
            'recaudacion' => 174200000
        ],
        [
            'id' => 5,
            'titulo' => 'The Dark Knight',
            'anio' => 2008,
            'idioma' => 'English',
            'director' => 'Christopher Nolan',
            'generos' => ['Action', 'Crime'],
            'recaudacion' => 1004558444
        ],
        [
            'id' => 6,
            'titulo' => 'Spirited Away',
            'anio' => 2001,
            'idioma' => 'Japanese',
            'director' => 'Hayao Miyazaki',
            'generos' => ['Animation', 'Fantasy'],
            'recaudacion' => 355467000
        ]
    ];
    }

    function get_indice_pelicula_por_id($peliculas, $id) {
        foreach ($peliculas as $index => $pelicula) {
            if ($pelicula['id'] == $id) {
                return $index;
            }
        }
        return "No encontrado";
    }

?>