<?php 
function component($nombreproducto,$precioproducto,$productimg,$productid, $comentario)
{
    $precioventa = number_format($precioproducto*1.25,0,".",".");
    $preciocliente = number_format($precioproducto*1,0,".",".");
    $element ="

    <div class=\"col-lg-3 col-md-6 col-sm-12 my-3 \">
    <form action=\"comprar.php\" method=\"post\">
        <div class=\"card shadow\">
            <div>
                <img src=\"$productimg\" alt=\"$preciocliente\" class=\"img-fluid card-img-top\">
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">$nombreproducto</h5>
                <h6>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"far fa-star\"></i>
                    <i class=\"far fa-star\"></i>
                </h6>
                <p class=\"card-text fuente-Lato font-weight-light\">
                    $comentario
                </p>
                <h5>
                <small><s class=\"text-secondary\">$$precioventa></s></small>
                    <span class=\"price d-block font-weight-bold h3\">$$preciocliente</span>
                </h5>
                <button class=\"btn btn-info my-3\" type=\"submit\" name=\"agregar\" >Añadir al carrito <i class=\"fas fa-shopping-cart\"></i></button>
                <input type=\"hidden\" name=\"product_id\" value=\"$productid\">                
            </div>
        </div>
    </form></div>
    
    ";
    echo $element;
}

?>
