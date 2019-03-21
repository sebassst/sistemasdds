<?php
    class Paginas extends Controlador{
        public $usuario;
        public function __Construct(){
           $this->usuario=$this->modelo("Usuario");
            
            
        }
        public function index(){
                $this->vista("Paginas/index");
        }
        public function iniciar(){
            $this->vista("Paginas/home");
        }
        public function CerrarSesion(){
            session_start();
            session_destroy();
            header("Location: ".RUTA_URL."Paginas/index");
        }
        function login(){
            $fila =$this->usuario->consultaUsuario($_POST['num']);
            if ($fila->contrasena == $_POST['pass']) {
                $_SESSION['usuario']=$fila->idusuario;
                header("Location: ".RUTA_URL."/".$fila->nombre."/index");
            }

        }
        
      
    }

?>