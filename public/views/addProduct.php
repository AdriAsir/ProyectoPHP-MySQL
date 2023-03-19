<!--
    Vista para añadir nuevos productos. Contiene el código HTML con el formulario así como el código PHP para
    mostrar errores de validación, en caso de existir.
-->
   <div class="container" style="text-align: center;"> 
   <h3>Introduce los datos de los productos:</h3>

    <form class="form" action="index.php?controller=ProductController&action=aniadirProduct" style=" margin: 0 auto;background-color: whitesmoke;border-radius: 10px;" method="post">
        <div class="form-group">
            <label class="form-label" for="nombre">Nombre:</label>
            <input class="form-control" type="text" name="nombre"  maxlength="50"  ><br>
            <?php
                if (isset($data) && isset($data['nombre']))
                echo "<div class='alert alert-danger'>"
                       .$data['nombre'].
                      "</div>";
            ?>
        </div>
        <div class="form-group">
            <label class="form-label" for="descripcion">Descripción:</label>
            <input class="form-control" type="text" name="descripcion" ><br>
            <?php
                if (isset($data) && isset ($data['descripcion']))
                echo "<div class='alert alert-danger'>"
                       .$data['descripcion'].
                      "</div>";
            ?>
        </div>
        <div class="form-group">
            <label class="form-label" for="precio">Precio:</label>
            <input class="form-control" type="text" name="precio" ><br>
            <?php
                if (isset($data) && isset($data['precio']))
                echo "<div class='alert alert-danger'>"
                       .$data['precio'].
                      "</div>";
            ?>
        </div>

        <div class="form-group">
            <label class="form-label" for="procedencia">Procedencia:</label>
            <select name="procedencia">
                <option value="1" selected="selected">Nacional</option>
                <option value="2" >Internacional</option>
        </select>
        </div>
<!-- -->
        <div class="form-group">
            <label class="form-label" for="categoria">Categoria:</label>
            <select name="categoria">
                <option value="1" >Entrante</option>
                <option value="2" selected="selected" >Primer Plato</option>
                <option value="3" >Segundo Plato</option>
                <option value="4" >Postre</option>
        </select>
        </div>

        <div class="form-group">
            <label class="form-label" for="imagen">Imagen:</label>
            <input class="form-control" type="text" name="imagen" placeholder="assets\" ><br>
            <?php
                if (isset($data) && isset ($data['imagen']))
                echo "<div class='alert alert-danger'>"
                       .$data['imagen'].
                      "</div>";
            ?>
        </div>
        <?php
                if (isset($data) && isset($data['general']))
                echo "<div class='alert alert-danger'>"
                       .$data['general'].
                      "</div>";
            ?>
        <div class="form-group">
            <input class="form-control" type="submit" name="insertar" value="Enviar">
        </div>
        
    </form>
    </div>
    