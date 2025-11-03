<!DOCTYPE html >
    <html lang="es">
    <head>
        <?php require_once "views/layouts/head.layout.php"; ?>
        <title>Videoclub Javi</title>
    </head>
    <body>
        <!-- capa principal -->
        <div class="container mt-3">

            <!-- Cabecera del documento -->
            <?php require_once "views/partials/header.partial.php"; ?>

            <!-- Barra de Navegacion (NavBar) -->
            <?php require_once "views/partials/menu.partial.php"; ?>

            <!-- Contenido principal -->
            <main>
                <h1>Videoclub Javi</h1>
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col" class="text-end">Id</th>
                    <th scope="col">Título</th>
                    <th scope="col">Género</th>
                    <th scope="col">Director</th>
                    <th scope="col" class="text-end">Año</th>
                    <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($peliculas as $pelicula): ?>
                        <tr>
                            <td class="text-end"><?= $pelicula['id']; ?></td>
                            <td><?= $pelicula['titulo']; ?></td>
                            <td><?= get_genero_nombre($generos, $pelicula['genero_id'])?></td>
                            <td><?= $pelicula['director']; ?></td>
                            <td class="text-end"><?= $pelicula['anio']; ?></td>
                            <td>
                                <a href="edit.php?id=<?= $pelicula['id']; ?>" class="btn btn-primary btn-sm" title="Editar">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="delete.php?id=<?= $pelicula['id']; ?>" class="btn btn-danger btn-sm" title="Eliminar" onclick="return confirm('¿Confirmar eliminación de película?')">
                                    <i class="bi bi-trash3"></i>
                                </a>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
            </main>

            <!-- Pie de página -->
            <?php require_once "views/partials/footer.partials.php"; ?>
        </div>

        <!-- JavaScript Bootstrap 5.3.8 -->
        <?php require_once "views/layouts/js_bootstrap.layout.php"; ?>
    </body>
</html>
