<?php
    class CoordinadorModelo extends Usuario{
        public $Conexion;
        public function __Construct(){
            $this->Conexion = new Base();
        }
        public function Login($datos){
            $this->Conexion->query("SELECT * FROM Coordinador where N_identificacion=:N_identificacion");
            $this->Conexion->bind(":N_identificacion",$datos['N_identificacion']);
            return $this->Conexion->registro();
        }
                public function registroJustificacion($data, $file){
            $this->Conexion->query("INSERT INTO `justificaciones`(`nombre_justificacion`, `fecha_enviado`, `desercion_id`) VALUES (?,?,?)");
            $this->Conexion->bind(1, $file);
            $this->Conexion->bind(2, date('Y-m-d'));
            $this->Conexion->bind(3, $data['proceso']);
            return $this->Conexion->execute();
        }
        public function RegistroCoordinador($datos){
            $this->Conexion->query("INSERT INTO `Coordinador`(`Id_Coordinador`, `Nombre`, `Apellido`, `Direccion`, `Correo`, `Telefono`, `T_identificacion`, `N_identificacion`,  `Estado`, `Password`, `Id_rol`) VALUES (NULL, :Nombre, :Apellido, :Direccion, :Correo, :Telefono, :T_identificacion, :N_identificacion,  :Estado, :Password, :Id_rol)");
            $this->Conexion->bind(":Nombre",$datos['Nombre']);
            $this->Conexion->bind(":Apellido",$datos['Apellido']);
            $this->Conexion->bind(":Direccion",$datos['Direccion']);
            $this->Conexion->bind(":Correo",$datos['Correo']);
            $this->Conexion->bind(":Telefono",$datos['Telefono']);
            $this->Conexion->bind(":T_identificacion",$datos['T_identificacion']);
            $this->Conexion->bind(":N_identificacion",$datos['N_identificacion']);
            $this->Conexion->bind(":Estado",$datos['Estado']);
            $this->Conexion->bind(":Password",$datos['Password']);
            $this->Conexion->bind(":Id_rol",$datos['Id_rol']);

       
            return $this->Conexion->execute();
             
        }
        public function TablaCoordinador(){
            $this->Conexion->query("SELECT * FROM Coordinador inner join rol on Coordinador.Id_rol = rol.Id_rol");
            return $this->Conexion->registros();
        }
        public function ModificarCoordinador($datos){
            $this->Conexion->query("UPDATE `Coordinador` SET `Nombre`=:Nombre,`Apellido`=:Apellido,`Direccion`=:Direccion,`Correo`=:Correo,`Telefono`=:Telefono,`T_identificacion`=:T_identificacion,`N_identificacion`=:N_identificacion,`Estado`=:Estado WHERE Id_Coordinador =:Id");
            $this->Conexion->bind(":Nombre",$datos['Nombre']);
            $this->Conexion->bind(":Apellido",$datos['Apellido']);
            $this->Conexion->bind(":Direccion",$datos['Direccion']);
            $this->Conexion->bind(":Correo",$datos['Correo']);
            $this->Conexion->bind(":Telefono",$datos['Telefono']);
            $this->Conexion->bind(":T_identificacion",$datos['T_identificacion']);
            $this->Conexion->bind(":N_identificacion",$datos['N_identificacion']);
            $this->Conexion->bind(":Estado",$datos['Estado']);
            $this->Conexion->bind(":Id",$datos['Id']);
            return $this->Conexion->execute();
        }
        public function SeleccionarCoordinador($id){
            $this->Conexion->query("SELECT * FROM Coordinador where Id_Coordinador=:id");
            $this->Conexion->bind(":id",$id);
            return $this->Conexion->registro();
        }

    }


?>