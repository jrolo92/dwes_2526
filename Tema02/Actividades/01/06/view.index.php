<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actividad 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>

    <!-- Cabecera -->
    <header>
      <h1>Datos del alumno</h1>
    </header>

    <!-- Contenedor principal -->
    <div class="container">    
      <table class="table table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th>Campo</th>
            <th>Valor</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Nombre: </td>
            <td><?= $nombre ?></td>
          </tr>          
          <tr>
            <td>Apellidos: </td>
            <td><?= $apellidos ?></td>
          </tr>
          <tr>
            <td>Población: </td>
            <td><?= $poblacion ?></td>
          </tr>
          <tr>
            <td>Edad: </td>
            <td><?= $edad ?></td>
          </tr>
          <tr>
            <td>Ciclo: </td>
            <td><?= $ciclo ?></td>
          </tr>
          <tr>
            <td>Curso: </td>
            <td><?= $curso ?></td>
          </tr>
          <tr>
            <td>Módulo: </td>
            <td><?= $modulo ?></td>
          </tr>          
        </tbody>
      </table>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>

<!-- Clases de tablas con bootstrap:

table ->	Clase base obligatoria para aplicar estilos Bootstrap a la tabla.
table-bordered ->	Añade bordes a todas las celdas.
table-striped ->	Alterna el color de las filas para mejorar la legibilidad.
table-hover ->	Resalta la fila cuando el cursor pasa por encima.
table-sm ->	Reduce el padding de las celdas para una tabla más compacta.
table-dark ->	Aplica un fondo oscuro a toda la tabla.
table-light ->	Aplica un fondo claro (útil si estás en modo oscuro).
table-responsive ->	Hace que la tabla se desplace horizontalmente en pantallas pequeñas.
align-middle ->	Centra verticalmente el contenido de las celdas.
text-center ->	Centra horizontalmente el texto dentro de las celdas. 

-->