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

            <form action="" method="GET">
                <div class="mb-3">
                    <label for="id" class="form-label">Id</label>
                    <input type="number" class="form-control" id="id" name="id" value="<?=$articulo['id']?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?=$articulo['descripcion']?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="modelo" class="form-label">Modelo</label>
                    <input type="text" class="form-control" id="modelo" name="modelo" value="<?=$articulo['modelo']?>">
                </div>

                <label for="categoria" class="form-label">Categoría</label>                
                <select class="form-select" aria-label="Default select example" name="categoria_id" id="categoria_id" value="<?=htmlspecialchars($articulo['categoria'])?>" readonly>                 
                    <option selected disabled>Seleccione una categoría</option>
                    <?php foreach ($categorias as $categoria): ?>
                        <option value="<?= $categoria['id']?>">
                            <?=$categoria['nombre']?>
                        </option>
                    <?php endforeach ?>        
                    <!-- <option selected value="0">Electrónica</option>
                    <option value="1">Almacenamiento</option>
                    <option value="2">Portatiles</option>
                    <option value="3">Accesorios</option> -->
                </select>
                <div class="mb-3">
                    <label for="unidades" class="form-label">Unidades</label>
                    <input type="number" class="form-control" id="unidades" name="unidades" value="<?=$articulo['unidades']?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="float" class="form-control" id="precio" name="precio" step="0.01" value="<?=$articulo['precio']?>" readonly>
                </div>
                
                <a role="button" class="btn btn-secondary" href="index.php">Volver</a>            <!-- Para el botón de volver usamos la etiqueta <a> (en lugar de <button>) y enlazamos la vista principal-->
            </form>
        </main>

        <!-- Pie de página -->
        <?php require_once 'views/partials/footer.partial.php'; ?>
    </div>

    <!-- JavaScript Bootstrap 5.3.8 -->
    <?php require_once 'layouts/jsbootstrap.layout.php'; ?>
</body>

</html>