
<?php
/**
 *  Controlador de Productos. Implementará todas las acciones que se puedan llevar a cabo desde las vistas
 * que afecten a productos de la tienda.
 */
include ("views/View.php");
require_once ("models/productos.php");
class ProductController {

    /**
     * Método que obtiene todos los productos de la BBDD y los muestra a través de la vista showProducts.
     */
    public function getAllProducts (){
        require_once ("models/productos.php");
        $pDAO=new ProductoDAO();
        $products=$pDAO->getAllProducts();
        $pDAO=null;
        View::show("showProducts", $products);
    }
    
    /*
 * Método que obtiene los detalles de un producto específico y los muestra a través de la vista showProductDetails.
 */

public function getProductById (){
    require_once ("models/productos.php");
    $pDAO=new ProductoDAO();
    $products=$pDAO->getProductById($_GET['id_producto']);
    $pDAO=null;
    View::show("showProductsById", $products);
}

/* */


    /**
     * Método que añade un producto a la BBDD recogiendo los datos que llegan a través de $_POST. Previo
     * a la inserción realiza la validación de los datos.
     */
    public function aniadirProduct (){
        $errores=array();
        
        /* Si se ha pulsado en el botón insertar se validan los datos y en caso de error, éstos se almacenan
        en el array $errores*/
        if (isset($_POST['insertar'])){
            if (!isset($_POST['nombre']) || strlen($_POST['nombre'])==0) 
                $errores['nombre']="El nombre no puede estar vacío.";
            if (!isset($_POST['descripcion']) || strlen($_POST['descripcion'])<10) 
                $errores['descripcion']="La descripción debe tener al menos 10 caracteres";    
            if (!isset($_POST['precio']) || strlen($_POST['precio'])==0) 
                $errores['precio']="El precio no puede estar vacío.";
            /**
             * Si el array está vacío es que no hay errores. Si instancia un ProductoDAO y se trata de insertar
             * el nuevo producto en la BBDD. 
             * Si se produce la inserción, se llama al método que muestra todos los productos de la tienda.
             * Si hay error, se muestra la vista de inserción pasándole el array de errores.
             */
                if (empty($errores)){
                include_once ("models/productos.php");
                $pDAO=new ProductoDAO();
                if ($pDAO->insertProduct($_POST['nombre'], $_POST['descripcion'], $_POST['precio'], $_POST['procedencia'], $_POST['categoria'], $_POST['imagen']))
                    $this->getAllProducts();    
                else {
                    $errores['general']="Problemas al insertar";
                    View::show("addProduct", $errores);  
                }     
            }
            else  View::show("addProduct", $errores);               
        }
        // Si no se pulsó el botón insertar, se muestra la vista con el formulario.
        else {
            View::show("addProduct", null);
        }
    }

    public function anadirCarrito (){
        if (isset($_GET['id_producto'])){
            array_push($_SESSION['carro'],$_GET['id_producto']);
            include_once ("models/productos.php");
            $pDAO=new ProductoDAO();
            $products=$pDAO->getAllProducts();
            View::show("showProducts",$products);
        } 
    }

    public function mostrarCarrito () {
        include_once ("models/productos.php");
        $pDAO=new ProductoDAO();
        $carrito=array();
        foreach ($_SESSION['carro'] as $contenido => $producto) {
            $productos=$pDAO->getProductById($producto);
            array_push($carrito,$productos);
        }

        View::show("carrito",$carrito);
    }

    public function quitarDelCarrito() {
        if (isset($_GET['id_producto'])) {
          $id_producto = $_GET['id_producto'];
          $index = array_search($id_producto, $_SESSION['carro']); // busca la posición del producto en el array del carrito
          if ($index !== false) { // si el producto está en el carrito
            array_splice($_SESSION['carro'], $index, 1); // quita el producto del array del carrito
          }
        }
      }

}

?>
