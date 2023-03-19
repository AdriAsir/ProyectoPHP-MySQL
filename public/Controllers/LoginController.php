<?php
    #CONTROLADOR QUE DEBE IMPLEMENTAR LOS MÉTODOS QUE AFECTAN A LOS USUARIOS  SIEMPRE UTILIZAREMOS INCLUDE_ONCE O REQUIERE_ONCE
    include_once("views/View.php");

    class UsuarioController {

        public function mostrarFormulario (){
            View::show("login");
        }

        public function procesarInicioSesion () {
            $errores=array();
            if (isset($_POST['botonlogin'])) {
                if (!isset($_POST['usuario']) || strlen($_POST['usuario'])==0)
                    $errores['usuario']="El nombre no puede estar vacío";
                if (!isset($_POST['contrasena']) || strlen($_POST['contrasena'])==0)
                    $errores['contrasena']="La contraseña no puede estar vacío";
                if (empty($errores)){
                    include_once('models/Usuarios.php');
                    $uDAO=new UsuarioDAO();

                    if (empty($uDAO->getUsuario($_POST['usuario'],$_POST['contrasena']))) {
                        //NO SE ENCUENTRA
                        $errores['general']="Usuario o contraseña no validos";
                        View::show("login",$errores);
                    } else {
                        //SI SE ENCUENTRA
                        $pDAO=new ProductoDAO();
                        $products=$pDAO->getAllProducts();
                        $pDAO=null;
                        $_SESSION['usuario']=$_POST['usuario'];
                        View::show("showProducts", $products);
                    }        
                } else {
                    View::show("login",$errores);
                }
            }
        }
        public function cerrarsesion () {
            session_unset();
            session_destroy();
            View::show("login"); 
        }
    }
?>