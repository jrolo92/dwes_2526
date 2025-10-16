<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Examen Tema 2</title>
  <!-- CSS Bootstrap 5.3.8 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <!-- Bootstrap Icons 1.13.1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
  <!-- capa principal -->
  <div class="container mt-3">

    <!-- Cabecera del documento -->
    <header class="pb-3 mb-4 border-bottom">
      <!-- Icono -->
        <i class="bi bi-activity"></i>
      <!-- Esta etiqueta va a facilitar la búsqueda de la pag en los buscadores, mejorando el SEO -->
      <span class="fs-6">Cálculo Circuito Eléctrico - Ley de Ohm</span>
    </header>

    <!-- Contenido principal -->
    <main>
      <h4>Resultados: </h4>
      <div class="container">
        <table class="table table-hover">
          <thead>
            <tr class="table-success">
              <th>Datos Entrada</th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Magnitud</th>
              <th scope="col">Símbolo</th>
              <th scope="col" class="text-end">Valor</th>
              <th scope="col">Unidad</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <td>1</td>
              <td>Voltaje</td>
              <td>V</td>
              <td class="text-end"><?= number_format($voltaje, 2) ?></td>
              <td>v</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Resistencia</td>
              <td>R</td>
              <td class="text-end"><?= number_format($resistencia, 2) ?></td>
              <td>Ω</td>
            </tr>
          <thead>
            <tr class="table-success">
              <th>Datos Salida</th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Magnitud</th>
              <th scope="col">Símbolo</th>
              <th scope="col" class="text-end">Valor</th>
              <th scope="col">Unidad</th>
            </tr>
          </thead>
            <tr>
              <td>3</td>
              <td>Corriente</td>
              <td>I</td>
              <td class="text-end"><?= number_format($corriente, 2) ?></td>
              <td>A</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Potencia</td>
              <td>P</td>
              <td class="text-end"><?= number_format($potencia, 2) ?></td>
              <td>W</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Energía (1 hora)</td>
              <td>E</td>
              <td class="text-end"><?= number_format($energia, 2) ?></td>
              <td>J</td>
            </tr>
            <tr>
              <td>6</td>
              <td>Resistencia equivalente</td>
              <td>Rp</td>
              <td class="text-end"><?= number_format($resistencia_paralelo, 2) ?></td>
              <td>Ω</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="btn-group" role="group" aria-label="Basic example">
        <a class="btn btn-primary" href="index.php" role="button">Volver</a>
      </div>

    </main>
    <!-- number_format(); -->
    <!-- Pie de página -->
    <footer class="footer mt-auto py-3  fixed-bottom bg-light">
      <div class="container">
        <span class="text-muted">&copy; 2025
          Javier Rodríguez López - DWES - 2º DAW - Curso 25/26</span>
      </div>
    </footer>
  </div>

  <!-- JavaScript Bootstrap 5.3.8 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>