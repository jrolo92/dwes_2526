<?php
/*
        Librería: functions.php
        Descripción: Funciones reutilizables para la gestión de libros.
        Autor: Javier Rodríguez
        Fecha: 22/10/25
    */

//función para obtener array de libros (simulando una base de datos : SELECT * FROM):
function get_tabla_libros()
{
    $tabla = [
        [
            'id' => 1,
            'titulo' => 'Jurassic Park',
            'autor' => 'Michael Crichton',
            'genero' => 'Ciencia ficción / Aventura',
            'editorial' => 'Timun Mas',
            'precio' => 18.90
        ],
        [
            'id' => 2,
            'titulo' => 'Dune',
            'autor' => 'Frank Herbert',
            'genero' => 'Ciencia ficción / Aventura',
            'editorial' => 'Ediciones B',
            'precio' => 21.50
        ],
        [
            'id' => 3,
            'titulo' => 'Neuromante',
            'autor' => 'William Gibson',
            'genero' => 'Cyberpunk',
            'editorial' => 'Nova',
            'precio' => 17.80
        ],
        [
            'id' => 4,
            'titulo' => 'Fundación',
            'autor' => 'Isaac Asimov',
            'genero' => 'Ciencia ficción',
            'editorial' => 'Minotauro',
            'precio' => 19.95
        ],
        [
            'id' => 5,
            'titulo' => 'Solaris',
            'autor' => 'Stanisław Lem',
            'genero' => 'Ciencia ficción / Filosofía',
            'editorial' => 'Alianza Editorial',
            'precio' => 16.40
        ],
        [
            'id' => 6,
            'titulo' => 'El juego de Ender',
            'autor' => 'Orson Scott Card',
            'genero' => 'Ciencia ficción / Militar',
            'editorial' => 'La Factoría de Ideas',
            'precio' => 14.99
        ],
        [
            'id' => 7,
            'titulo' => 'La mano izquierda de la oscuridad',
            'autor' => 'Ursula K. Le Guin',
            'genero' => 'Ciencia ficción / Sociología',
            'editorial' => 'Minotauro',
            'precio' => 15.75
        ],
        [
            'id' => 8,
            'titulo' => 'Snow Crash',
            'autor' => 'Neal Stephenson',
            'genero' => 'Cyberpunk',
            'editorial' => 'Debolsillo',
            'precio' => 18.25
        ],
        [
            'id' => 9,
            'titulo' => 'Hyperion',
            'autor' => 'Dan Simmons',
            'genero' => 'Ópera Espacial',
            'editorial' => 'B de Bolsillo',
            'precio' => 20.10
        ],
        [
            'id' => 10,
            'titulo' => 'La guerra de los mundos',
            'autor' => 'H.G. Wells',
            'genero' => 'Ciencia ficción / Aventura',
            'editorial' => 'Alianza Editorial',
            'precio' => 12.50
        ]

    ];
    return $tabla;
}
