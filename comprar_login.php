<?php
    //importamos el header -->
    include("INCLUDES/header.php");
    require_once("INCLUDES/header-compra.php");

    // NavBar -->
    include("INCLUDES/NavBar.php");

    // Conecta la BD-->
    require_once 'php/CreaBD.php';

    // incluimos los componentes de productos -->
    require_once("PHP/component2.php");

    //el registro de esta compra
    $database = new CreaBD('elponyweb','inventario','localhost','root','1123');

?>

<!-- colocamos el fondo de particles.js -->
<div class="container text-center vh-75 pb-4">
    <div id="particles-js"></div>
</div>

<!-- componentes de compra -->
<div class="container mt-5" id="componentes">
    <div class="row text-center py-5 componentes">
        <?php
            $result = $database->getData();
            while($row = mysqli_fetch_assoc($result))
            {
                component($row['nombre'],$row['precio'],$row['imagen'],$row['id'], $row['descripcion']);
            }
        ?>
    </div>
</div>


