<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once "layouts/head.layout.php"; ?>
    <title>Proyecto 5.1 - CRUD Corredores</title>
</head>

<body>
    <!-- capa principal -->
    <div class="container mt-3">

        <!-- Cabecera del documento -->
        <?php require_once "partials/header.partial.php"; ?>

        <!-- Contenido principal -->
        <main>


            <!--Barra de navegación -->
            <?php require_once "partials/menu.partial.php"; ?>
            <legend>Añadir nuevo corredor: </legend>
            <form action="create.php" method="POST">
                <!-- Quitamos el id porque se lo da directamente la base de datos al añadirse-->
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="mb-3">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                </div>
                <div class="mb-3">
                    <label for="ciudad" class="form-label">Ciudad</label>
                    <input type="text" class="form-control" id="ciudad" name="ciudad" required>
                </div>               
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="dni" class="form-label">DNI</label>
                    <input type="text" class="form-control" id="dni" name="dni" required>
                </div>
                <div class="mb-3">
                    <label for="fecha_nac" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" required>
                </div>

                <!-- checkbox: sexo -->
                <div class="mb-3">
                    <label for="sexo" class="form-label d-block">Sexo</label>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexo" id="sexo" value="H" required>
                    <label class="form-check-label" for="inlineRadio1">Hombre</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexo" id="sexo" value="M">
                    <label class="form-check-label" for="inlineRadio2">Mujer</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexo" id="sexo" value=" ">
                    <label class="form-check-label" for="inlineRadio3">Sin especificar</label>
                    </div>
                </div>

                <!-- Select dinámico: categoria -->
                 <div class="mb-3">
                    <label for="id_categoria" class="form-label">Categoría</label>                
                    <select class="form-select" name="id_categoria" id="id_categoria" required> <!-- Mirar en la base de datos para ver el name -->
                        <!-- Mostrar lista de marcas -->
                        <option selected disabled>Seleccione una categoría</option>
                        <?php foreach ($categorias as $categoria): ?>
                            <option value="<?= $categoria['id']?>">
                                <?=$categoria['categoria']?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <!-- Select dinámico: clubs -->
                 <div class="mb-3">
                    <label for="id_club" class="form-label">Club</label>                
                    <select class="form-select" name="id_club" id="id_club" required> <!-- Mirar en la base de datos para ver el name -->
                        <!-- Mostrar lista de marcas -->
                        <option selected disabled>Seleccione una club</option>
                        <?php foreach ($clubs as $club): ?>
                            <option value="<?= $club['id']?>">
                                <?=$club['club']?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
                
                <a role="button" class="btn btn-secondary" href="index.php" onclick="return confirm('¿Estás seguro de que quieres volver?')">Cancelar</a>            <!-- Para el botón de volver usamos la etiqueta <a> (en lugar de <button>) y enlazamos la vista principal-->
                <button type="reset" class="btn btn-secondary" onclick="return confirm('¿Estás seguro de que quieres resetear?')">Reset</button>
                <button type="submit" class="btn btn-primary">Añadir</button>
            </form>

            <br>
            <br>
            <br>
        </main>

        <!-- Pie de página -->
        <?php require_once "partials/footer.partial.php"; ?>
    </div>

    <!-- JavaScript Bootstrap 5.3.8 -->
    <?php require_once "layouts/jsbootstrap.layout.php"; ?>
</body>

</html>