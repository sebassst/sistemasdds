<?php
    class Usuario{
        public $Conexion;
        public function __Construct(){
            $this->Conexion = new Base;
        }
      

        public function consultaUsuario($id){
            $this->Conexion->query("SELECT * FROM `usuario` INNER JOIN rol ON rol.idrol=usuario.rol_idrol WHERE `documento`=?");
            $this->Conexion->bind(1, $id);
            return $this->Conexion->registro();

        }
        public function createUser($data, $tipo)
        {
            $this->Conexion->query("INSERT INTO `usuario`(`nombres`, `apellidos`, `correo`, `telefono`, `documento`, `contrasena`, `estado_idestado`, `rol_idrol`, `tipo_documento_id`) VALUES (?,?,?,?,?,?,1,?,?)");
            $this->Conexion->bind(1, $data['nombre']);
            $this->Conexion->bind(2, $data['apellido']);
            $this->Conexion->bind(3, $data['correo']);
            $this->Conexion->bind(4, $data['telefono']);
            $this->Conexion->bind(5, $data['documento']);
            $this->Conexion->bind(6, $data['contrasena']);
            $this->Conexion->bind(7, $tipo);
            $this->Conexion->bind(8, $data['tipo_documento_id']);
            return $this->Conexion->registro();
        }


        public function iniciarProceso($data){
           try{

            $this->Conexion->query("INSERT INTO `desercion`(`motivo`, `fecha1`, `fecha2`, `fecha3`, `ficha`, `programa`, `fecha_creacion`, `usuario_idusuario`) VALUES (?,?,?,?,?,?,?,4)");
            $this->Conexion->bind(1, $data['motivo']);
            $this->Conexion->bind(2, $data['fecha1']);
            $this->Conexion->bind(3, $data['fecha2']);
            $this->Conexion->bind(4, $data['fecha3']);
            $this->Conexion->bind(5, $data['ficha']);
            $this->Conexion->bind(6, $data['programa']);
            $this->Conexion->bind(7, $data['fecha_creacion']);
           // $this->Conexion->bind(8, $tipo);
            return $this->Conexion->registro();
            }catch(Excepcion $e){
                die($e->getMessage());
            }

        }


   public function consultarJustificacion(){
    $this->Conexion->query("SELECT * FROM `justificaciones`");
    return $this->Conexion->registro();
   }





    }
   


?>  