<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once "layouts/head.layout.php"; ?>
    <title>Gestión de Artículos</title>
</head>

<body>
    <!-- capa principal -->
    <div class="container mt-3">

        <!-- Cabecera del documento -->
        <?php require_once "partials/header.partial.php"; ?>

        <!-- Contenido principal -->
        <main>
            <h1>Proyecto 4.1 - CRUD Artículos (con encapsulamiento)</h1>
            <p>Añadir Artículos</p>

            <!--Barra de navegación -->
            <?php require_once "partials/menu.partial.php"; ?>

            <form action="update.php?id=<?= $id_editar ?>" method="POST">
                <div class="mb-3">
                    <label for="id" class="form-label">Id</label>
                    <input type="number" class="form-control" id="id" name="id" value="<?= $articulo->get_id() ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?= $articulo->get_descripcion() ?>">
                </div>
                <div class="mb-3">
                    <label for="modelo" class="form-label">Modelo</label>
                    <input type="text" class="form-control" id="modelo" name="modelo" value="<?= $articulo->get_modelo() ?>">
                </div>

                <!-- Select dinámico -->
                 <div class="mb-3">
                    <label for="marca" class="form-label">Marca</label>                
                    <select class="form-select" name="marca" id="marca" required>
                        <!-- Mostrar lista de marcas -->
                         <!-- Queremos que en la option selected se genere dinámicamente con la marca del objeto -->
                        <option selected disabled>Seleccione una Marca</option>
                        <?php foreach ($marcas as $indice =>$marca): ?>
                             <!-- Tenemos el indice de nuestro articulo, si éste coincide con el índice del for le decimos que nos devuelva 'selected' y si no devuelve null  -->
                            <option value="<?= $indice?>" <?= ($articulo->get_marca() == $indice) ? 'selected' : null ?>> 
                                <?=$marca?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>

                <!-- Lista de checkbox dinámica de categorías -->
                 <div class="mb-3">
                    <label class="form-label">Seleccione las categorías:</label>
                    <div class="form-control">
                        <?php foreach ($categorias as $indice => $categoria): ?>
                            <div class="form-check form-check-inline">
                                <!-- Este indice se encuentra dentro de este array? Si es asi me devuelve 'checked' y si no devuelve null -->
                                <input class="form-check-input" type="checkbox" name="categorias[]" value="<?= $indice ?>" <?= in_array($indice, $articulo->get_categorias()) ? 'checked' : null ?>>
                                <label class="form-check-label">                            
                                    <?= $categoria ?>
                                </label>
                            </div>
                        <?php endforeach ?>
                 </div>

                <div class="mb-3">
                    <label for="unidades" class="form-label">Unidades</label>
                    <input type="number" class="form-control" id="unidades" name="unidades" value="<?= $articulo->get_unidades() ?>" >
                </div>
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="float" class="form-control" id="precio" name="precio" step="0.01" value="<?= $articulo->get_precio() ?>">
                </div>
                
                <a role="button" class="btn btn-secondary" href="index.php" onclick="return confirm('¿Estás seguro de que quieres volver?')">Cancelar</a>            <!-- Para el botón de volver usamos la etiqueta <a> (en lugar de <button>) y enlazamos la vista principal-->
                <button type="reset" class="btn btn-secondary"  onclick="return confirm('¿Estás seguro de que quieres resetear?')">Reset</button>
                <button type="submit" class="btn btn-primary">Actualizar artículo</button>
            </form>
        </main>

        <!-- Pie de página -->
        <?php require_once "partials/footer.partial.php"; ?>
    </div>

    <!-- JavaScript Bootstrap 5.3.8 -->
    <?php require_once "layouts/jsbootstrap.layout.php"; ?>
</body>

</html>