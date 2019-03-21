<?php
    class EnfermeraModelo{
        public $Conexion;
        public function __Construct(){
            $this->Conexion = new Base();
         

        }
        public function TablaAprendiz(){
            $this->Conexion->query("SELECT * FROM `justificaciones`");
            return $this->Conexion->registros();
        }
        public function RegistroEnfermera($datos){
            $this->Conexion->query("SELECT Id_Aprendiz FROM Aprendiz where N_identificacion = :N_identificacion");
            $this->Conexion->bind("N_identificacion",$datos['Id_Aprendiz']);
            $valor=$this->Conexion->registro();
            $this->Conexion->query("INSERT INTO `Enfermera`(`Id_Enfermera`, `Id_Aprendiz`) VALUES (null, :Id_Aprendiz)");
            $this->Conexion->bind(":Id_Aprendiz",$valor->Id_Aprendiz);
            $this->Conexion->execute();
            $id=$this->Conexion->lastId();
            $this->Conexion->query("INSERT INTO `detalle_Enfermera`(`Id_detalle_Enfermera`, `Id_Enfermera`, `Id_Procesos`, `fecha_salida`) VALUES (null, :Id_Enfermera, :Id_Procesos, :fecha_salida)");
            $this->Conexion->bind(":Id_Enfermera",$id);
            $this->Conexion->bind(":Id_Procesos",$datos['Id_Procesos']);
            $this->Conexion->bind(":fecha_salida",$datos['fecha']);
            return $this->Conexion->execute();
          
        }
        public function HistorialProcesos($id){
            $this->Conexion->query("SELECT * FROM detalle_Enfermera LEft join Procesos ON detalle_Enfermera.Id_Procesos = Procesos.Id_Procesos left join Enfermera on detalle_Enfermera.Id_Enfermera = Enfermera.Id_Enfermera left join Aprendiz on Enfermera.Id_Aprendiz = Aprendiz.Id_Aprendiz where detalle_Enfermera.Id_Procesos= :id");
            $this->Conexion->bind(":id",$id);
            return $this->Conexion->registros();
        
        }
    }


?>