 <?php
     /*
        modelo: create.model.php 
        descripción: recupera los valores del formulario y los añade a la base de datos
    */

    // 1. Recuperamos los datos del formulario
    $nombre = $_POST['nombre'] ?? null;
    $apellidos = $_POST['apellidos'] ?? null;
    $ciudad = $_POST['ciudad'] ?? null;
    $email = $_POST['email'] ?? null;
    $dni = $POST['dni'] ?? null;
    $fecha_nac = $_POST['fecha_nac'] ?? null;
    $sexo = $_POST['sexo'] ?? null;
    $categoria = $_POST['categoria'] ?? null;
    $club = $_POST['club'] ?? null;

    // 2. Creamos un nuevo objeto de la clase corredor a partir de estos valores:
    $nuevo_corredor = new Class_corredor(
        null,
        $nombre,
        $apellidos,
        $ciudad,
        $fecha_nac,
        $sexo,
        $email,
        $dni,
        $categoria,
        $club
    );
   
    // 3. Conextamos con la bd
    $conexion = new Class_tabla_corredores();

    // 4. Ejecutamos nuestra función create():
    $conexion->create($nuevo_corredor);

    // 5. Cargamos los datos: corredores, categorias y clubs
    $conexion->get_corredores();
    $conexion->get_categorias();
    $conexion->get_clubs();
 ?>