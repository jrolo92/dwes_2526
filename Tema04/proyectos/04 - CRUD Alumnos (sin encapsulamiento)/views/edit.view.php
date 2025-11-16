<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once "layouts/head.layout.php"; ?>
    <title>Gestión de Alumnos</title>
</head>

<body>
    <!-- capa principal -->
    <div class="container mt-3">

        <!-- Cabecera del documento -->
        <?php require_once "partials/header.partial.php"; ?>

        <!-- Contenido principal -->
        <main>
            <h1>Proyecto 4.1 - CRUD Alumnos (con encapsulamiento)</h1>
            <p>Editar datos alumno</p>

            <!--Barra de navegación -->
            <?php require_once "partials/menu.partial.php"; ?>

            <form action="update.php?id=<?= $id_editar ?>" method="POST">
                <div class="mb-3">
                    <label for="id" class="form-label">Id</label>
                    <input type="number" class="form-control" id="id" name="id" value="<?= $alumno->getId() ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $alumno->getNombre() ?>">
                </div>
                <div class="mb-3">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?= $alumno->getApellidos() ?>">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= $alumno->getEmail() ?>">
                </div>
                <div class="mb-3">
                    <label for="fechaNac" class="form-label">Fecha de nacimiento: </label>
                    <input type="string" class="form-control" id="fechaNac" name="fechaNac" value="<?= $alumno->getFechaNacimiento() ?>">
                </div>

                <!-- Select dinámico -->
                 <div class="mb-3">
                    <label for="curso" class="form-label">Curso</label>                
                    <select class="form-select" name="curso" id="curso" required>
                        <!-- Mostrar lista de marcas -->
                        <option selected disabled>Seleccione un curso</option>
                        <?php foreach ($cursos as $indice =>$curso): ?>
                            <!-- Tenemos el indice de nuestro alumno, si éste coincide con el índice del for le decimos que nos devuelva 'selected' y si no devuelve null  -->
                            <option value="<?= $indice?>" <?= ($alumno->getCurso() == $indice) ? 'selected' : null ?>>
                                <?=$curso?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>

                <!-- Lista de checkbox dinámica de categorías -->
                 <div class="mb-3">
                    <label class="form-label">Seleccione las asignaturas:</label>
                    <div class="form-control">
                        <?php foreach ($asignaturas as $indice => $asignatura): ?>
                            <div class="form-check form-check-inline">
                                <!-- Este indice se encuentra dentro de este array? Si es asi me devuelve 'checked' y si no devuelve null -->
                                <input class="form-check-input" type="checkbox" name="asignaturas[]" value="<?= $indice ?>" <?= in_array($indice, $alumno->getAsignaturas()) ? 'checked' : null ?>>
                                <label class="form-check-label">
                                    <?= $asignatura ?>
                                </label>
                            </div>
                        <?php endforeach ?>
                 </div>
                
                <a role="button" class="btn btn-secondary" href="index.php" onclick="return confirm('¿Estás seguro de que quieres volver?')">Cancelar</a>            <!-- Para el botón de volver usamos la etiqueta <a> (en lugar de <button>) y enlazamos la vista principal-->
                <button type="reset" class="btn btn-secondary"  onclick="return confirm('¿Estás seguro de que quieres resetear?')">Reset</button>
                <button type="submit" class="btn btn-primary">Actualizar datos</button>
            </form>
        </main>

        <!-- Pie de página -->
        <?php require_once "partials/footer.partial.php"; ?>
    </div>

    <!-- JavaScript Bootstrap 5.3.8 -->
    <?php require_once "layouts/jsbootstrap.layout.php"; ?>
</body>

</html>