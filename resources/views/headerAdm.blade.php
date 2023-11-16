<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TegnomasAdm</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar bg-body-tertiary sticky-top navbar-expand-lg" style="background-color:#0c2323 !important;">
            <div class="container-fluid">
                <a class="navbar-brand" href="administracion.php" style="color: #406D31;"><img src="img/Logo.PNG" alt="logo" width="50" height="50">Tegnomas</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="background-color:#0c2323 !important;">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel" style="color: #406D31;">Tegnomas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="administracion.php" style="color:#6DCD9A;">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="admPost.php" style="color:#6DCD9A;">Post</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="admUsuario.php" style="color:#6DCD9A;">Usuarios</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>