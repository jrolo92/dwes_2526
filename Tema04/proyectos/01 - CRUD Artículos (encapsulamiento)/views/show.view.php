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
            <?php require_once "partials/menu.partial.php"; ?>

            <form action="create.php" method="POST">
                <div class="mb-3">
                    <label for="id" class="form-label">Id</label>
                    <input type="number" class="form-control" id="id" name="id" value="<?= $articulo->get_id() ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?= $articulo->get_descripcion() ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="modelo" class="form-label">Modelo</label>
                    <input type="text" class="form-control" id="modelo" name="modelo" value="<?= $articulo->get_modelo() ?>" readonly>
                </div>

                <!-- Select dinámico -->
                 <div class="mb-3">
                    <label for="marca" class="form-label">Marca</label>                
                    <input type="text" class="form-control" id="modelo" name="modelo" value="<?= $articulo->get_marca() ?>" readonly>
                </div>

                <!-- Lista de checkbox dinámica de categorías -->
                 <div class="mb-3">
                    <label for="categoria" class="form-label">Categoria</label>                
                    <input type="text" class="form-control" id="modelo" name="modelo" value="<?= implode(', ', Class_tabla_articulos::categorias_indices_a_nombres($articulo->get_categorias())) ?>" readonly>
                 </div>

                <div class="mb-3">
                    <label for="unidades" class="form-label">Unidades</label>
                    <input type="number" class="form-control" id="unidades" name="unidades" value="<?= $articulo->get_unidades() ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="float" class="form-control" id="precio" name="precio" step="0.01" value="<?= $articulo->get_precio() ?>" readonly>
                </div>
                
                <a role="button" class="btn btn-secondary" href="index.php">Volver</a> 

            </form>
        </main>

        <!-- Pie de página -->
        <?php require_once 'views/partials/footer.partial.php'; ?>
    </div>

    <!-- JavaScript Bootstrap 5.3.8 -->
    <?php require_once 'layouts/jsbootstrap.layout.php'; ?>
</body>

</html>