<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once "layouts/head.layout.php"; ?>
    <title>Proyecto 5.3 - CRUD Alumnos PHP y MySQL</title>
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

            <form action="update.php?id=<?= $alumno_id ?>" method="POST">
                <div class="mb-3">
                    <label for="id" class="form-label">Id</label>
                    <input type="number" class="form-control" id="id" name="id" value="<?= $alumno->id ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $alumno->nombre ?>" required>
                </div>
                <div class="mb-3">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?= $alumno->apellidos ?>" required>
                </div>
                 <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value = "<?=  $alumno->email ?>" required>
                </div>
                <div class="mb-3">
                    <label for="dni" class="form-label">DNI</label>
                    <input type="text" class="form-control" id="dni" name="dni" value= "<?= $alumno->dni ?>" required>
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="tel" class="form-control" id="telefono" name="telefono" value="<?= $alumno->telefono ?>" required>
                </div>
                <div class="mb-3">
                    <label for="nacionalidad" class="form-label">Nacionalidad</label>
                    <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" value="<?= $alumno->nacionalidad ?>" required>
                </div>
                <div class="mb-3">
                    <label for="fecha_nac" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" value="<?= $alumno->fecha_nac ?>" required>
                </div>

                <!-- Select dinámico -->
                 <div class="mb-3">
                    <label for="curso" class="form-label">Cursos</label>                
                    <select class="form-select" name="curso_id" id="curso_id" required> <!-- Mirar en la base de datos para ver el name -->
                        <!-- Mostrar lista de marcas -->
                        <option selected disabled>Seleccione un curso</option>
                        <?php foreach ($cursos as $curso): ?>
                            <!-- Las siguiente lineas los nombres vienen del método get_cursos() de la clase tabla_alumnos -->
                            <option value="<?= $curso['id'] ?>"
                                <?= ($curso['id'] == $alumno->curso_id) ? 'selected' : '' ?>>
                                <?=$curso['curso']?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
                
                <a role="button" class="btn btn-secondary" href="index.php" onclick="return confirm('¿Estás seguro de que quieres volver?')">Cancelar</a>            <!-- Para el botón de volver usamos la etiqueta <a> (en lugar de <button>) y enlazamos la vista principal-->
                <button type="reset" class="btn btn-secondary"  onclick="return confirm('¿Estás seguro de que quieres resetear?')">Reset</button>
                <button type="submit" class="btn btn-primary">Actualizar alumno</button>
            </form>
        </main>

        <!-- Pie de página -->
        <?php require_once "partials/footer.partial.php"; ?>
    </div>

    <!-- JavaScript Bootstrap 5.3.8 -->
    <?php require_once "layouts/jsbootstrap.layout.php"; ?>
</body>

</html>