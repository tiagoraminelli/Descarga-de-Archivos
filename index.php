<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descarga de Archivos</title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Descarga de Archivos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <div class="container text-center mt-5">
        <h1 class="mb-4">Descarga de Archivos Dummy</h1>
        
        <div class="mb-5">
            <p>Haz clic en el botón para descargar un archivo de texto.</p>
            <form action="download.php" method="post">
                <button type="submit" class="btn btn-primary">Descargar dummy.txt</button>
            </form>
        </div>

        <div>
            <p>Haz clic en el botón para descargar un archivo PDF.</p>
            <form action="downloadPDF.php" method="post">
                <button type="submit" class="btn btn-danger">Descargar dummy.pdf</button>
            </form>
        </div>
    </div>

    <!-- Enlace a jQuery y Bootstrap JS (opcional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<footer class="bg-dark text-white mt-5 p-4 text-center">
    <div class="container">
        <p class="mb-0">&copy; 2024 Tu Nombre o Tu Empresa. Todos los derechos reservados.</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#" class="text-white">Política de Privacidad</a></li>
            <li class="list-inline-item"><a href="#" class="text-white">Términos de Servicio</a></li>
            <li class="list-inline-item"><a href="#" class="text-white">Contacto</a></li>
        </ul>
    </div>
</footer>

</html>
