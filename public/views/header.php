<?php
  session_start();
  if (!isset($_SESSION['usuario'])) {
    $_SESSION['usuario'] = array();
  }
  if (!isset($_SESSION['carro'])) {
    $_SESSION['carro'] = array();
  }
?>
<!DOCTYPE html>
<html>

<head>
</head>

<body  class="img js-fullheight" style="background-image:url(assets/fondo.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center;">
<!--
  Página de cabecera estática. Contiene el menú de la aplicación con enlaces que apuntan a la página
  index con el controlador y acción apropiado.
-->
<div class="container" style="background-color: whitesmoke;border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;" >
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4">Web de Comida por Correo</span>
      </a>
      <ul class="nav nav-pills">

        <li class="nav-item"><a href="index.php?controller=ProductController&action=getAllProducts" class="nav-link">Lista de Productos</a></li>
        
        <?php if (isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])) { ?>
            <li class="nav-item"><a href="index.php?controller=ProductController&action=aniadirProduct" class="nav-link" aria-current="page">Añadir Producto</a></li>
            <li class="nav-item"><a href="index.php?controller=UsuarioController&action=cerrarsesion" class="nav-link active">Cerrar Sesion</a></li>
        
            <?php } else { ?>
            <li class="nav-item"><a href="index.php?controller=ProductController&action=mostrarCarrito" class="nav-link">Ver Carrito</a></li>
            <li class="nav-item"><a href="index.php?controller=UsuarioController&action=mostrarFormulario" class="nav-link active">Inicio Sesión</a></li>
          <?php } ?>
      
      </ul>

    </header>
  </div>



