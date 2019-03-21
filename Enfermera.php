<?php

	class Enfermera extends Controlador{
     public $usuario;
		public function __construct(){
            $this->usuario=$this->modelo("EnfermeraModelo");
		}

		public function index(){
			$this->vista("Enfermera/RegistroAprendiz");
		}

		public function proceso(){
			$this->vista("Enfermera/Inicioproceso");
		}

		public function actualizar(){
			$this->vista("Enfermera/Actualizardatos");
		}

	    public function TablaAprendiz(){
            $usuario= $this->usuario->TablaAprendiz();
            $this->vista("Enfermera/TablaProcesos",$usuario);
            
        }
  

}

?>