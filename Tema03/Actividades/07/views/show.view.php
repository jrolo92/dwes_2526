<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once "views/layouts/head.layout.php"; ?>
    <title>Ver libro - Gestión libros</title>
</head>

<body>
    <!-- capa principal -->
    <div class="container mt-3">

        <!-- Cabecera del documento -->
        <?php require_once "views/partials/header.partial.php"; ?>


        <!-- Contenido principal -->
        <main>
            <legend>Datos del Libro</legend>
            <form action="" method="post">
                <!-- campo id -->
                 <div class="mb-3">
                    <label for="id" class="form-label">ID:</label>
                    <input type="number" class="form-control" id="id" name="id" value="<?= $libro['id']; ?>" readonly/> <!-- Este value va a tener el valor de $libro del modelo --> 
                 </div>
                 <div class="mb-3">
                    <label for="titulo" class="form-label">Título:</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" value="<?=$libro['titulo']?>" readonly/>
                 </div>
                 <div class="mb-3">
                    <label for="autor" class="form-label">Autor:</label>
                    <input type="text" class="form-control" id="autor" name="autor" value="<?=$libro['autor']?>" readonly/>
                 </div>
                 <div class="mb-3">
                    <label for="editorial" class="form-label">Editorial:</label>
                    <input type="text" class="form-control" id="editorial" name="editorial" value="<?=$libro['editorial']?>"readonly/>
                 </div>
                 <div class="mb-3">
                    <label for="genero" class="form-label">Género:</label>
                    <input type="text" class="form-control" id="genero" name="genero" value="<?=$libro['genero']?>"readonly/>
                 </div>
                 <div class="mb-3">
                    <label for="precio" class="form-label">Precio:</label>
                    <input type="float" class="form-control" id="precio" name="precio" step="0.01" value="<?=$libro['precio']?>"readonly/>
                 </div>

                <!-- Botones de acción  -->
                <a class="btn btn-secondary" href="index.php" role="button">Volver</a>
            </form>

        </main>

        <!-- Pie de página -->
        <?php require_once 'views/partials/footer.partial.php'; ?>
    </div>

    <!-- JavaScript Bootstrap 5.3.8 -->
    <?php require_once 'views/layouts/js_bootstrap.layout.php'; ?>
</body>

</html>