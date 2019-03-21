<?php
    class AprendizModelo{
        public $Conexion;
        public function __Construct(){
            $this->Conexion = new Base;
        }
        public function proceso($id){
            $this->Conexion->query("SELECT * FROM `desercion` WHERE `usuario_idusuario`=?");
            $this->Conexion->bind(1, $id);
            return $this->Conexion->registro();

        }
    }
   


?>  