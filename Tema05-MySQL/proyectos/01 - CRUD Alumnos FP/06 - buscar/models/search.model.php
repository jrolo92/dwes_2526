<?php

/*
    modelo: search.model.php
    descripción: Modelo para filtrar la tabla alumnos a partir de una expresión de búsqueda
    Parámetros GET: expresión de búsqueda

*/

// 1. Obtener criterio búsqueda
$prompt = $_GET['expresion'] ?? null;

// 2. Conectar base de datos
$conexion = new class_tabla_alumnos('localhost', 'root', '', 'fp');

// Ejecuto método filtrar para obtener todos los alumnos que coincidan con la expresión
$alumnos = $conexion->filter($prompt);



?>