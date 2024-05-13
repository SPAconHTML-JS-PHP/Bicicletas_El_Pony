<!-- header -->
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

  <!-- Introducción -->
  <div id="introduccion">
    <div class="container py-4">
      <div class="row">
        <div class="col-md-6 my-auto">
          <div data-aos="fade-right"><img src="IMG/index/trocha.jpg" alt=""
              class="img-thumbnail foto-perfil img-fluid text-center"></div>
        </div>
        <div class="col-md-6 my-auto">
          <div data-aos="fade-left">
            <h1 class="h1 font-weight-bold text-center">Acerca de los Desarrolladores</h1>
            <p class="p fuente-Lato font-weight-light text-justify text-center">Esta pagina fue adaptada para dar alcace a los requerientos
            de la Actividad de Construccion Aplicada de la Materia: Ingenieria de SoftWare I, Ficha 52274. Consta de varias paginas creadas
            con PHP, integradas a una base de datos Central en PHPMyAdmin. Con procedimientos JavaScript que permite dar cumplimiento a lo solicitado
            en el documento.<br>El equipo de Desarrolladores esta integrado por Integrado por:<br><font strong>Rodrigo Prias Murcia<br>Alexander Echeverri Vasquez</font><br>Mismo equipo
            que le ha venido "pedaleando" a la aventura de ser Ingenieros de Sistemas en la CUN desde el Año pasado. En conjuto se manejó el perfil de de Project
            manager del Modelo SCRUM.<br> Gracias por su tiempo y atención a este trabajo.</br></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- fin introduccion -->

   <!-- frase inspiradora -->
  <div class="container" data-aos="flip-up">
    <div class="card mt-4">
      <div class="card-header">
        Frases del Mes.
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <p>"¿No es mejor el triunfo por la fuerza de tus músculos que por el artificio de un desviador? Estamos poniéndonos blandos."</p>
          <footer class="blockquote-footer">Henri Desgrange
          </footer>
        </blockquote>
        <blockquote class="blockquote mb-0">
          <p>"Las mejores rodadas son aquellas en las que muerdes mucho más de lo que puedes masticar y la puedes sobrevivir."</p>
          <footer class="blockquote-footer">Doug Bradbury
          </footer>
        </blockquote>
        <blockquote class="blockquote mb-0">
          <p>"¿Las ventajas? Ejercicio, sin problemas de estacionamiento, precios de la gasolina, es divertido. Un automóvil es caro. 
            Tienes que encontrar un lugar para estacionar y no es divertido. Entonces, ¿por qué no andar en bicicleta? Lo recomiendo."</p>
          <footer class="blockquote-footer">Stephen G. Breyer
          </footer>
        </blockquote>
      </div>
    </div>
  </div>
  <!-- fin frase inspiradora -->

  <!-- Carrousel de Accesos -->
  <div id="Accessos">
    <div class="container">
      <div class="row my-4">
        <div class="col-lg-3 col-sm-12 py-2" data-aos="zoom-in">
          <class="card w-100" style="width: 18rem;">
          <div class="card w-100" style="width: 18rem;">
            <img class="card-img-top" src="IMG/accesos/ingresa.png" alt="Card image cap">
            <div class="card-body">
              <div>
                <a href="login.php" class="btn btn-info btn-block">Ingresa a tu Cuenta</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-12 py-2" data-aos="zoom-in">
          <class="card w-100" style="width: 18rem;">
          <div class="card w-100" style="width: 18rem;">
            <img class="card-img-top" src="IMG/accesos/Registra.png" alt="Card image cap">
            <div class="card-body">
              <div>
                <a href="diseno-de-sonrisa.php" class="btn btn-info btn-block">Crea una cuenta nueva</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-12 py-2" data-aos="zoom-in">
          <class="card w-100" style="width: 18rem;">
          <div class="card w-100" style="width: 18rem;">
            <img class="card-img-top" src="IMG/accesos/bikestore.jpg" alt="Card image cap">
            <div class="card-body">
              <div>
                <a href="comprar.php" class="btn btn-info btn-block">Mira las Bicis</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-12 py-2" data-aos="zoom-in">
          <class="card w-100" style="width: 18rem;">
          <div class="card w-100" style="width: 18rem;">
            <img class="card-img-top" src="IMG/accesos/contactanos.png" alt="Card image cap">
            <div class="card-body">
              <div>
                <a href="index.php#FormContacto" class="btn btn-info btn-block">Contactanos</a>
              </div>
            </div>
          </div>
        </div>  
      </div>
    </div>    
  </div> 
  

  <!-- fin carrusel de Accesos -->

  <!-- GALERIA DE IMAGENES -->
    <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <div class="view">
          <img class="d-block w-100" src="IMG/index/bg-callout.jpg" alt="First slide">
          <div class="mask rgba-black-light"></div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive">Vive la Aventura</h3>
          <p>Compra tu Bicicleta para el Campo</p>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100" src="IMG/index/portfolio-1.jpg" alt="Second slide">
          <div class="mask rgba-black-light"></div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive">Vive la Aventura</h3>
          <p>Pedalea la Aventura</p>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100" src="IMG/index/bg-masthead.jpg" alt="Third slide">
          <div class="mask rgba-black-light"></div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive">Vive la Aventura</h3>
          <p>Encuentra tu Bicicleta para la Ciudad</p>
        </div>
      </div>
    </div>
    <!--/.Slides-->
 <!--Indicators-->
 <ol class="carousel-indicators">
      <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-2" data-slide-to="1"></li>
      <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
      <span class="carousel-control-next-icon"  aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->

  <div class="apuntador" id="FormContacto">

  <!-- Contacto -->
  <div class="container contact-form" data-aos="flip-down">
    <div class="contact-image">
      <img src="img/accesos/contactanos.png" alt="rocket_contact" />
    </div>
    <form method="post">
      <h3>Envíanos un mensaje</h3>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="txtName" class="form-control" placeholder="Nombre *" value="" />
          </div>
          <div class="form-group">
            <input type="text" name="txtEmail" class="form-control" placeholder="Email *" value="" />
          </div>
          <div class="form-group">
            <input type="text" name="txtPhone" class="form-control" placeholder="Telefono *" value="" />
          </div>
          <div class="form-group">
            <input type="submit" name="btnSubmit" class="btnContact" value="Enviar" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <textarea name="txtMsg" class="form-control" placeholder="Tu mensaje *"
              style="width: 100%; height: 150px;"></textarea>
          </div>
        </div>
      </div>
    </form>
  </div>
  <!-- fin Contacto -->

  
<!-- footer -->
<?php include("INCLUDES/footer.php");?>
