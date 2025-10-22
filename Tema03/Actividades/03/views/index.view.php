<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión libros</title>

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
            <span class="fs-6">Actividad 3.3 - Añadir Libro</span>
        </header>

        <!-- Barra de Navegacion (NavBar) -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Libros</a> <!--Cada vez que pinchemos en la palabra libros te va a llevar a la vista principal (controlador principal) -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="new.php">Añadir</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <!-- Contenido principal -->
        <main>
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th scope="col" class="text-end">ID</th>
                        <th scope="col">Título</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Editorial</th>
                        <th scope="col">Género</th>
                        <th scope="col" class="text-end">Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($libros as $libro): ?>
                        <tr>
                            <td class="text-end"><?= $libro['id'] ?></td>
                            <td><?= $libro['titulo'] ?></td>
                            <td><?= $libro['autor'] ?></td>
                            <td><?= $libro['editorial'] ?></td>
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