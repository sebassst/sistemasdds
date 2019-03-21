<?php
    Class Aprendiz extends Controlador{
        public $usuario;
        public function __Construct(){
            $this->usuario=$this->modelo("AprendizModelo");
        }
        public function index(){
            $this->vista("Aprendiz/bienvenido");
        }
        function RegistroProceso(){
            $this->vista("Aprendiz/RegistroAprendiz2");
        }
        public function ActualizarDatos(){
             $this->vista("Aprendiz/ModificarDatos");
        }     
        public function TablaProceso(){
            $usuario= $this->usuario->proceso($_SESSION['usuario']);
            $this->vista("Aprendiz/TablaProcesos",$usuario);
            
        }
    }


?>