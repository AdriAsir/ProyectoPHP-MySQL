
<!--
    Vista que muestra los datos en forma de tabla. 
    Recibe los datos a mostrar a través del parámetro $data (utilizado en la función View::show).
-->
<div class="container" style="text-align: center;">
    <h1> Carta</h1>

    <table class="table"  style=" margin: 0 auto;background-color: whitesmoke;border-radius: 10px;">
        <tr><th>Nombre</th><th>Precio</th> <th>Descripción</th></tr>
        <?php
        foreach ($data as $article) {
            $enlace = "<a href='index.php?controller=ProductController&action=getProductById&id_producto=".$article['id_producto']."'>Ver más...</a>";
            $carrito = "<a href='index.php?controller=ProductController&action=anadirCarrito&id_producto=".$article['id_producto']."'>Añadir al Carrito</a>";


            echo "<tr>
                  <td>".$article['Nombre']."</td>
                  <td>".$article['Precio']." &euro;</td>
                  <td>".$article['Descripcion']."</td>
                  <td>".$enlace."</td>
                  <td>".$carrito."</td>
                  </tr>"; 
        }
        ?>
    </table>
</div>

