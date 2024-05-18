<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiencias con El Pony</title>
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
    <div id="overlay">
      <img src="IMG/index/Logo.svg" alt="" class="w-75">
    </div>
  </div>

<!-- Experiencias de Usuarios -->
<section id="experiencias" class="py-4">
    <div class="container">
        <h2 class="text-center mb-4">Experiencias de Nuestros Usuarios con El Pony</h2>
        <div class="row">
            <!-- Testimonio 1 -->
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="card">
                    <img src="IMG/experiencias/user1.jpg" class="card-img-top" alt="Usuario 1">
                    <div class="card-body">
                        <h5 class="card-title">María López</h5>
                        <p class="card-text">"El Pony ha cambiado mi forma de ver el ciclismo. Es una bicicleta robusta y confiable. Me encanta salir de paseo todos los fines de semana."</p>
                        <p class="card-text"><small class="text-muted">★★★★★</small></p>
                    </div>
                </div>
            </div>
            <!-- Testimonio 2 -->
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card">
                    <img src="IMG/experiencias/user2.jpg" class="card-img-top" alt="Usuario 2">
                    <div class="card-body">
                        <h5 class="card-title">Carlos Martínez</h5>
                        <p class="card-text">"Desde que tengo mi Pony, he recorrido más de 500 km sin problemas. La calidad es impresionante y el diseño es muy cómodo."</p>
                        <p class="card-text"><small class="text-muted">★★★★★</small></p>
                    </div>
                </div>
            </div>
            <!-- Testimonio 3 -->
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card">
                    <img src="IMG/experiencias/user3.jpg" class="card-img-top" alt="Usuario 3">
                    <div class="card-body">
                        <h5 class="card-title">Ana Gómez</h5>
                        <p class="card-text">"Es la mejor bicicleta que he tenido. El Pony es perfecta para mis rutas diarias y se siente muy segura. La recomiendo a todos."</p>
                        <p class="card-text"><small class="text-muted">★★★★★</small></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Más Testimonios -->
        <div class="row">
            <!-- Testimonio 4 -->
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="card">
                    <img src="IMG/experiencias/user4.jpg" class="card-img-top" alt="Usuario 4">
                    <div class="card-body">
                        <h5 class="card-title">Luis Torres</h5>
                        <p class="card-text">"El Pony me ha permitido descubrir nuevos lugares. Su resistencia y facilidad de manejo son increíbles."</p>
                        <p class="card-text"><small class="text-muted">★★★★★</small></p>
                    </div>
                </div>
            </div>
            <!-- Testimonio 5 -->
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card">
                    <img src="IMG/experiencias/user5.jpg" class="card-img-top" alt="Usuario 5">
                    <div class="card-body">
                        <h5 class="card-title">Lucía Fernández</h5>
                        <p class="card-text">"Una excelente bicicleta. El Pony es cómoda y duradera. Ha sido mi compañera en muchos viajes."</p>
                        <p class="card-text"><small class="text-muted">★★★★★</small></p>
                    </div>
                </div>
            </div>
            <!-- Testimonio 6 -->
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card">
                    <img src="IMG/experiencias/user6.jpg" class="card-img-top" alt="Usuario 6">
                    <div class="card-body">
                        <h5 class="card-title">Javier Pérez</h5>
                        <p class="card-text">"No puedo estar más satisfecho con mi Pony. Es una bicicleta que se adapta a todo tipo de terreno y siempre responde bien."</p>
                        <p class="card-text"><small class="text-muted">★★★★★</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



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
<!-- Footer -->
<?php include("INCLUDES/footer.php");?>