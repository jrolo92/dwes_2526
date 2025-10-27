        <nav class="navbar navbar-expand-lg bg-body-tertiary primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Libros</a> <!--Cada vez que pinchemos en la palabra libros te va a llevar a la vista principal (controlador principal) -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="new.php">Añadir</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Ordenar
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="order.php?criterio=id">Id</a></li> <!-- El nombre del criterio tiene que ser el mismo que tenemos en la vista.-->
                                <li><a class="dropdown-item" href="order.php?criterio=titulo">Título</a></li>
                                <li><a class="dropdown-item" href="order.php?criterio=autor">Autor</a></li>
                                <li><a class="dropdown-item" href="order.php?criterio=editorial">Editorial</a></li>
                                <li><a class="dropdown-item" href="order.php?criterio=genero">Género</a></li>
                                <li><a class="dropdown-item" href="order.php?criterio=precio">Precio</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>