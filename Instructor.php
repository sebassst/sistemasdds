<?php

	class Instructor extends Controlador{
        public $usuario;

		public function __construct(){
             $this->usuario=$this->modelo("InstructorModelo");
		}

		public function index(){
			$this->vista("Instructor/RegistroAprendiz");
		}

        public function proceso(){
            $this->vista("Instructor/Inicioproceso");
        }

        public function actualizar(){
            $this->vista("Instructor/Actualizardatos");
        }

         public function tabla(){
             $usuario= $this->usuario->consultarJustificacion();
            $this->vista("Instructor/TablaProcesos",$usuario);
        }



	      public function TablaCoordinador(){
            $Coordinador= $this->Coordinador->TablaCoordinador();
            $datos=[
                "Coordinador"=>$Coordinador
            ];
            $this->vista("Instructor/TablaCoordinador",$datos);
            
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
                    header("Location: ".RUTA_URL."/Instructor/TablaCoordinador");
                }
            }else{
                $Aprendiz = $this->Coordinador->SeleccionarCoordinador($id);
                $datos=[
                    "Coordinador"=>$Aprendiz
                ];
                $this->vista("Instructor/ModificarCoordinador",$datos);
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
                    header("Location: ".RUTA_URL."/Instructor/TablaInstructor");
                }
            }else{
                $this->vista("Instructor/RegistroInstructor");
            }
        }
        public function TablaInstructor(){
            $Instructor =$this->Instructor->TablaInstructor();
            $datos =[
                "Instructor"=>$Instructor
            ];  
            $this->vista("Instructor/TablaInstructor",$datos);
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
                    header("Location: ".RUTA_URL."/Instructor/TablaInstructor");
                }
            }else{
                $Procesos = $this->Instructor->SeleccionarInstructor($id);
                $datos=[
                    "Procesos"=>$Procesos
                ];
                $this->vista("Instructor/ModificarInstructor",$datos);
            }

        }
        public function EstadoProcesos($id){
            if($this->Instructor->EstadoInstructor($id)){
                die("echo");
            }else{

            }
        }

       function crearAprendiz(){
            $this->usuario->createUser($_POST, 1);
            header('Location: '.RUTA_URL.'Instructor/TablaAprendiz');
        }


         function registrarFallas(){
            try{
            $this->usuario->iniciarProceso($_POST);
            header('Location: '.RUTA_URL.'Instructor/Inicioproceso');
            }catch(Excepcion $e){
                die($e->getMessage());
            }
        }

         function mostrarJustificacion(){
           $usuario= $this->usuario->consultarJustificacion();
           $this->vista("Instructor/justificaciones", $usuario);

        }


}

?>