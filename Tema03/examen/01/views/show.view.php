<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Cargar bootstrap -->
   <?php include_once 'views/layouts/head.layout.php'; ?>
    <title> Proyecto - CRUD Gestión Películas</title>
</head>

<body>

    <!-- capa principal -->
    <div class="container mt-3">

        <!-- cabecera del documento -->
        <?php include_once 'views/partials/header.partial.php'; ?>

        <!-- contenido principal -->
        <main>
            <!-- Formulario añadir nueva película -->
            <legend>Datos de la Película</legend>
            <form action="" method="get">

                <!-- campo id -->
                <div class="mb-3">
                    <label for="id" class="form-label">ID:</label>
                    <input type="number" class="form-control" id="id" name="id" value="<?= $pelicula['id']?>" readonly>
                </div>

                <!-- campo titulo -->
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título:</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" value="<?= $pelicula['titulo']?>" readonly>
                </div>                

                <!-- campo año -->
                <div class="mb-3">
                    <label for="anio" class="form-label">Año:</label>
                    <input type="number" class="form-control" id="anio" name="anio" value="<?= $pelicula['anio']?>" readonly>
                </div>

                <!-- campo idioma -->
                <div class="mb-3">
                    <label for="idioma" class="form-label">Idioma:</label>
                    <input type="text" class="form-control" id="idioma" name="idioma" value="<?= $pelicula['idioma']?>" readonly>
                </div>

                <!-- campo director -->
                <div class="mb-3">
                    <label for="director" class="form-label">Director:</label>
                    <input type="text" class="form-control" id="director" name="director" value="<?= $pelicula['director']?>" readonly>
                </div>

                <!-- campo genero -->
               <div class="mb-3">
                    <label for="generos" class="form-label">Géneros:</label>
                    <input type="text" class="form-control" id="generos" name="generos" value="<?= implode(',',$pelicula['generos']) ?>" readonly>
                </div>

                <!-- campo recaudacion -->
               <div class="mb-3">
                    <label for="recaudacion" class="form-label">Recaudación:</label>
                    <input type="number" class="form-control" id="recaudacion" name="recaudacion" value="<?= $pelicula['recaudacion']?>" readonly>
                </div>

                <!-- botones de acción -->
                <a class="btn btn-secondary" href="index.php" role="button">Volver</a>
            </form>

            <br>
            <br>
            <br>
        </main>
        <!-- pie de página -->
        <?php include_once 'views/partials/footer.partial.php'; ?>

        <!-- javaScript bootstrap 5.3.8 -->
        <?php include_once 'views/layouts/js_bootstrap.layout.php'; ?>
</body>

</html>