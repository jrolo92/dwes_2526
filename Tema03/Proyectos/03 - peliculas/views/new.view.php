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
                <!-- Formulario -->
                <form method="post" action="create.php">
                    <div class="mb-3">
                        <label for="id" class="form-label">Id</label>
                        <input type="text" class="form-control" id="id" aria-describedby="emailHelp" name="id" required>
                    </div>
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" required>
                    </div>
                    <div class="mb-3">
                        <label for="genero_id" class="form-label">Género</label>
                        <select class="form-select" id="genero_id" name="genero_id" required>
                            <option value="" selected>Selecciona un género</option>
                            <?php foreach($generos as $genero): ?>
                                <option value="<?= $genero['id']; ?>"><?= $genero['nombre']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="director" class="form-label">Director</label>
                        <input type="text" class="form-control" id="director" name="director" required>
                    </div>
                    <div class="mb-3">
                        <label for="anio" class="form-label">Año</label>
                        <input type="number" class="form-control" id="anio" name="anio" required>
                    </div>

                    <!-- Botones -->
                    <a href="index.php" class="btn btn-secondary" onclick="return confirm('¿Seguro que quieres volver?');">Volver</a>
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <button type="submit" class="btn btn-primary">Crear</button>
                </form>
            </main>

            <!-- Pie de página -->
            <?php require_once "views/partials/footer.partials.php"; ?>
        </div>

        <!-- JavaScript Bootstrap 5.3.8 -->
        <?php require_once "views/layouts/js_bootstrap.layout.php"; ?>
    </body>
</html>