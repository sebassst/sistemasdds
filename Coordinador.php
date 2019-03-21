<?php
    Class Coordinador extends Controlador{

        public function __Construct(){
             $this->usuario=$this->modelo("CoordinadorModelo");
             $this->enfe=$this->modelo("EnfermeraModelo");
        }
        public function index(){
            $this->vista("Coordinador/RegistroAprendiz");
        }     
        public function consultaJustificaciones(){
            $enfe= $this->enfe->TablaAprendiz();
            $this->vista("Coordinador/consultaJustificacion", $enfe);
        }

         public function proceso(){
            $this->vista("Coordinador/InicioProceso");
        }  

        public function datos(){
            $this->vista("Coordinador/ActualizarDatos");
        }     

         public function desercion(){
            $this->vista("Coordinador/ActualizarDatos");
        }     

        public function RegistroCoordinador(){
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $datos=[
                    "Nombre"=>rtrim($_POST['Nombre']),
                    "Apellido"=>rtrim($_POST['Apellido']),
                    "Direccion"=>rtrim($_POST['Direccion']),
                    "Correo"=>rtrim($_POST['Correo']),
                    "Telefono"=>rtrim($_POST['Telefono']),
                    "T_identificacion"=>rtrim($_POST['T_identificacion']),
                    "N_identificacion"=>rtrim($_POST['N_identificacion']),
                 
                    "Estado"=>rtrim("Activo"),
                    "Password"=>rtrim(password_hash($_POST['Password'],PASSWORD_DEFAULT)),
                    "Id_rol"=>rtrim(2)
                   

                ];
                if($this->Coordinador->RegistroCoordinador($datos)){
                    header("Location: ".RUTA_URL."/Coordinador/TablaCoordinador");
                }
            }else{
                $this->vista("Coordinador/RegistroCoordinador");
            }
        }
        public function TablaCoordinador(){
            $Coordinador= $this->Coordinador->TablaCoordinador();
            $datos=[
                "Coordinador"=>$Coordinador
            ];
            $this->vista("Coordinador/TablaCoordinador",$datos);
            
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
                    header("Location: ".RUTA_URL."/Coordinador/TablaCoordinador");
                }
            }else{
                $Coordinador = $this->Coordinador->SeleccionarCoordinador($id);
                $datos=[
                    "Coordinador"=>$Coordinador
                ];
                $this->vista("Coordinador/ModificarCoordinador",$datos);
            }
        }
        public function HistorialInstructor(){
        }
        public function HistorialCoordinador(){
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
                    header("Location: ".RUTA_URL."/Coordinador/TablaInstructor");
                }
            }else{
                $this->vista("Coordinador/RegistroInstructor");
            }
        }
        public function TablaInstructor(){
            $Instructor =$this->Instructor->TablaInstructor();
            $datos =[
                "Instructor"=>$Instructor
            ];  
            $this->vista("Coordinador/TablaInstructor",$datos);
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
                    header("Location: ".RUTA_URL."/Coordinador/TablaInstructor");
                }
            }else{
                $Procesos = $this->Instructor->SeleccionarInstructor($id);
                $datos=[
                    "Procesos"=>$Procesos
                ];
                $this->vista("Coordinador/ModificarInstructor",$datos);
            }

        }
        public function EstadoProcesos($id){
            if($this->Instructor->EstadoInstructor($id)){
                die("echo");
            }else{

            }
        }  public function RegistroJ(){
           move_uploaded_file($_FILES['justificacion']['tmp_name'], './files/'.$_POST['proceso'].'.jpg');
           $this->usuario->registroJustificacion($_POST, $_FILES['justificacion']['name']);
            header('Location: '.RUTA_URL.'Aprendiz/RegistroProceso');
        }

        function crearAprendiz(){
            $this->usuario->createUser($_POST, 1);
            header('Location: '.RUTA_URL.'Coordinador/TablaAprendiz');
        }

        function registrarAprendiz(){
            $this->usuario->createUser($_POST, 1);
            header('Location: '.RUTA_URL.'Instructor/TablaAprendiz');
        }

        function registrarFallas(){
            $this->usuario->iniciarProceso($_POST, 4);
             $this->vista("Instructor/Tablaprocesos");
        }

        function mostrarJustificacion(){
           $usuario= $this->usuario->consultarJustificacion();
             $this->vista("Instructor/TablaProcesos",$usuario);
        }

}
?>