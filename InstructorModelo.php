<?php
    class InstructorModelo{
        public $Conexion;
        public function __Construct(){
            $this->Conexion= new Base();

        }
        public function RegistroInstructor($datos){
            $this->Conexion->query("INSERT INTO `Procesos`(`Id_Procesos`, `Nombre`, `Actor`, `Duracion`, `Estado`, `Id_Coordinador`, `Id_genero`) VALUES (null, :Nombre, :Actor, :Duracion, :Estado, :Id_Coordinador, :Id_genero)");
            $this->Conexion->bind(":Nombre",$datos['Nombre']);
            $this->Conexion->bind(":Actor",$datos['Actor']);
            $this->Conexion->bind(":Duracion",$datos['Duracion']);
            $this->Conexion->bind(":Estado",$datos['Estado']);
            $this->Conexion->bind(":Id_Coordinador",$datos['Id_Coordinador']);
            $this->Conexion->bind(":Id_genero",$datos['Id_genero']);
            return $this->Conexion->execute();
        }

        public function ModificarInstructor($datos){
            $this->Conexion->query("UPDATE `Procesos` SET `Nombre`=:Nombre ,`Actor`=:Actor,`Duracion`=:Duracion,`Estado`=:Estado ,`Id_genero`=:Id_genero WHERE `Id_Procesos` = :Id");
            $this->Conexion->bind(":Nombre",$datos['Nombre']);
            $this->Conexion->bind(":Actor",$datos['Actor']);
            $this->Conexion->bind(":Duracion",$datos['Duracion']);
            $this->Conexion->bind(":Estado",$datos['Estado']);            
            $this->Conexion->bind(":Id_genero",$datos['Id_genero']);
            $this->Conexion->bind(":Id",$datos['Id']);
            return $this->Conexion->execute();

        }
        public function EstadoInstructor($id){
            $this->Conexion->query("UPDATE `Procesos` SET `Estado`=:Estado where Id_Procesos=:Id");
            $this->Conexion->bind(":Estado","Inactivo");
            $this->Conexion->bind(":Id",$id);
            return  $this->Conexion->execute();
            

        }
        public function TablaInstructor(){
            $this->Conexion->query("SELECT * FROM Procesos inner join genero on Procesos.Id_genero = genero.Id_genero where Estado = 'Activo'");
            return $this->Conexion->registros();
        }
        public function SeleccionarInstructor($id){
            $this->Conexion->query("SELECT * FROM Procesos WHERE Id_Procesos=:id");
            $this->Conexion->bind(":id",$id);
            return $this->Conexion->registro();
        }
        public function consultarJustificacion(){
            $this->Conexion->query("SELECT * FROM `desercion`");
            return $this->Conexion->registros();
        }
       
    }

?>