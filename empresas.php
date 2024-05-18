<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresas y Marcas de Bicicletas</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- AOS CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<!-- Header -->
<?php include("INCLUDES/header.php");?>

<!-- NavBar -->
<?php include("INCLUDES/NavBar.php");?>

<!-- HEADER y fondo particles.js-->
<div class="container text-center vh-75 pb-4">
    <div id="particles-js"></div>
    <div id="overlay"></div>
</div>

<!-- Empresas y Marcas -->
<section id="marcas" class="py-4 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Empresas y Marcas con las que Trabajamos</h2>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="card h-100">
                    <img src="IMG/marcas/gw.jpg" class="card-img-top" alt="GW">
                    <div class="card-body">
                        <h5 class="card-title">GW</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100">
                    <img src="IMG/marcas/trek.jpg" class="card-img-top" alt="Trek">
                    <div class="card-body">
                        <h5 class="card-title">Trek</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100">
                    <img src="IMG/marcas/specialized.jpg" class="card-img-top" alt="Specialized">
                    <div class="card-body">
                        <h5 class="card-title">Specialized</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="card h-100">
                    <img src="IMG/marcas/scott.jpg" class="card-img-top" alt="Scott">
                    <div class="card-body">
                        <h5 class="card-title">Scott</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100">
                    <img src="IMG/marcas/cannondale.jpg" class="card-img-top" alt="Cannondale">
                    <div class="card-body">
                        <h5 class="card-title">Cannondale</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100">
                    <img src="IMG/marcas/giant.jpg" class="card-img-top" alt="Giant">
                    <div class="card-body">
                        <h5 class="card-title">Giant</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include("INCLUDES/footer.php");?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
<!-- AOS JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
