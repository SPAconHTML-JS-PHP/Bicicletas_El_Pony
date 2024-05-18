<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Tus etiquetas meta, títulos y otros enlaces a CSS van aquí -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top d-block" style="background-color: #B8D9D5;">
        <div class="container">
            <div class="d-inline m-0">
                <img src="IMG/index/Logo.svg" alt="" style="width: 100px;">
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index2.php">Inicio</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="experiencias2.php">Experiencias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="comprar.php">Comprar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="empresas2.php">Empresas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index2.php#FormContacto">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="index.php">Cerrar Cesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Incluir jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Incluir Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <!-- Script para manejar el estado activo de los enlaces -->
    <script>
    $(document).ready(function() {
        var path = window.location.pathname;
        $('.navbar-nav .nav-link').each(function() {
            if (this.href.includes(path)) {
                $(this).parent().addClass('active');
            } else {
                $(this).parent().removeClass('active');
            }
        });

        $('.navbar-nav .nav-item').on('click', function() {
            $('.navbar-nav .nav-item').removeClass('active');
            $(this).addClass('active');
        });
    });
    </script>

</body>
</html>
