<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tegnomas</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar bg-body-tertiary sticky-top navbar-expand-lg" style="background: rgb(9,121,88);
        background: linear-gradient(339deg, rgba(9,121,88,1) 0%, rgba(218,255,196,1) 100%);
        padding:2rem 0 2rem 0;">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="img/Logo.PNG" alt="logo" width="50" height="50">Tegnomas</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" >
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Tegnomas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="nosotros.php">Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="articulos.php">Articulos</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="productos.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Productos
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="productos.php#celulares">Celulares</a></li>
                                    <li><a class="dropdown-item" href="productos.php#auriculares">Auriculares</a></li>
                                    <li><a class="dropdown-item" href="productos.php#consolas">Consolas</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contacto.php">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
