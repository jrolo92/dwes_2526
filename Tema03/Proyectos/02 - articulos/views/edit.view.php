<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once "partials/head.partial.php"; ?>
    <title>Gestión de Artículos</title>
</head>

<body>
    <!-- capa principal -->
    <div class="container mt-3">

        <!-- Cabecera del documento -->
        <?php require_once "partials/header.partial.php"; ?>

        <!-- Contenido principal -->
        <main>
            <h1>Proyecto 3.2 - Gestión de Artículos</h1>
            <small>Editar Artículos</small>

            <!--Barra de navegación -->
            <?php require_once "partials/menu.partial.php"; ?>

            <form action="update.php?id=<?=$id_editar; ?>" method="POST">
                <div class="mb-3">
                    <label for="id" class="form-label">Id</label>
                    <input type="number" class="form-control" id="id" name="id" value="<?=$articulo['id']?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?=$articulo['descripcion']?>">
                </div>
                <div class="mb-3">
                    <label for="modelo" class="form-label">Modelo</label>
                    <input type="text" class="form-control" id="modelo" name="modelo" value="<?=$articulo['modelo']?>">
                </div>

                <label for="categoria" class="form-label">Categoría</label>                
                <select class="form-select" aria-label="Default select example" name="categoria" id="categoria" value="<?=$articulo['categoria']?>">                   
                    <option selected value="0">Electrónica</option>
                    <option value="1">Almacenamiento</option>
                    <option value="2">Portatiles</option>
                    <option value="3">Accesorios</option>
                </select>
                <div class="mb-3">
                    <label for="unidades" class="form-label">Unidades</label>
                    <input type="number" class="form-control" id="unidades" name="unidades" value="<?=$articulo['unidades']?>">
                </div>
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="float" class="form-control" id="precio" name="precio" step="0.01" value="<?=$articulo['precio']?>">
                </div>
                
                <a role="button" class="btn btn-secondary" href="index.php">Cancelar</a>            <!-- Para el botón de volver usamos la etiqueta <a> (en lugar de <button>) y enlazamos la vista principal-->
                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </main>

        <!-- Pie de página -->
        <?php require_once "partials/footer.partial.php"; ?>
    </div>

    <!-- JavaScript Bootstrap 5.3.8 -->
    <?php require_once "partials/jsbootstrap.partial.php"; ?>
</body>

</html>