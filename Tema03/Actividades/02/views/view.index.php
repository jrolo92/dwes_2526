<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros de Ciencia Ficción</title>

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
            <i class="bi bi-journals"></i>
            <!-- Esta etiqueta va a facilitar la búsqueda de la pag en los buscadores, mejorando el SEO -->
            <span class="fs-6">Actividad 3.2 - Tabla de libros</span> 
        </header>

        <!-- Contenido principal -->
        <main>
            <table class="table">
            <thead class="table-light">
                <tr>
                    <th scope="col" class="text-end">ID</th>
                    <th scope="col">Título</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Género</th>
                    <th scope="col" class="text-end">Precio</th>
                </tr>
            </thead>
            <tbody>
                <h4>Tabla de libros</h4>
                <?php foreach ($libros as $libro): ?>
                    <tr>
                        <td class="text-end"><?= $libro['id'] ?></td>
                        <td><?= $libro['titulo'] ?></td>
                        <td><?= $libro['autor'] ?></td>
                        <td><?= $libro['genero'] ?></td>
                        <td class="text-end"><?= number_format($libro['precio'], 2, ',') ?> €</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                <td colspan="5">Total libros: <?= count($libros) ?></td>
                </tr>
            </tfoot>
            </table>
        </main>

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
