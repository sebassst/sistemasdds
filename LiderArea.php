<?php

	class Enfermera extends Controlador{

		public function __construct(){
		}

		public function index(){
			$this->vista("Enfermera/RegistroCoordinador");
		}

	      public function TablaCoordinador(){
            $Coordinador= $this->Coordinador->TablaCoordinador();
            $datos=[
                "Coordinador"=>$Coordinador
            ];
            $this->vista("Enfermera/TablaCoordinador",$datos);
            
        }
        public function ModificarCoordinador($id){
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $datos=[
                    "Nombre"=>rtrim($_POST['Nombre']),
                    "Apellido"=>rtrim($_POST['Apellido']),
                    "Direccion"=>rtrim($_POST['Direccion']),
                    "Correo"=>rtrim($_POST['Correo']),
                    "Telefono"=>rtrim($_POST['Telefono']),
                    "T_identificacion"=>rtrim($_POST['T_identificacion']),
                    "N_identificacion"=>rtrim($_POST['N_identificacion']),
                    "Estado"=>rtrim($_POST['Estado']),
                    "Id"=>rtrim($id)
                ];
                if($this->Coordinador->ModificarCoordinador($datos)){
                    header("Location: ".RUTA_URL."/Enfermera/TablaCoordinador");
                }
            }else{
                $Aprendiz = $this->Coordinador->SeleccionarCoordinador($id);
                $datos=[
                    "Coordinador"=>$Aprendiz
                ];
                $this->vista("Enfermera/ModificarCoordinador",$datos);
            }
        }
        public function HistorialInstructor(){
        }
        public function HistorialAprendiz(){
        }
        public function HistorialEnfermera(){
        }
        public function RegistroInstructor(){
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $datos=[
                    "Nombre"=>rtrim($_POST['Nombre']),
                    "Actor"=>rtrim($_POST['Actor']),
                    "Duracion"=>rtrim($_POST['Duracion']),
                    "Estado"=>rtrim("Activo"),
                    "Id_Coordinador"=>rtrim(4),
                    "Id_genero"=>rtrim($_POST['Id_genero']),
                ];
                if($this->Instructor->RegistroInstructor($datos)){
                    header("Location: ".RUTA_URL."/Enfermera/TablaInstructor");
                }
            }else{
                $this->vista("Enfermera/RegistroInstructor");
            }
        }
        public function TablaInstructor(){
            $Instructor =$this->Instructor->TablaInstructor();
            $datos =[
                "Instructor"=>$Instructor
            ];  
            $this->vista("Enfermera/TablaInstructor",$datos);
        }
        public function ModificarInstructor($id){
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $datos=[
                    "Nombre"=>rtrim($_POST['Nombre']),
                    "Actor"=>rtrim($_POST['Actor']),
                    "Duracion"=>rtrim($_POST['Duracion']),
                    "Estado"=>rtrim($_POST['Estado']),
                    "Id_genero"=>rtrim($_POST['Id_genero']),
                    "Id"=>rtrim($id)
                ];
                if($this->Instructor->ModificarInstructor($datos)){
                    header("Location: ".RUTA_URL."/Enfermera/TablaInstructor");
                }
            }else{
                $Procesos = $this->Instructor->SeleccionarInstructor($id);
                $datos=[
                    "Procesos"=>$Procesos
                ];
                $this->vista("Enfermera/ModificarInstructor",$datos);
            }

        }
        public function EstadoProcesos($id){
            if($this->Instructor->EstadoInstructor($id)){
                die("echo");
            }else{

            }
        }

}

?>