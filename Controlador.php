<?php
    //clase de controlador
    class Controlador{
        //cargar modelo
        public $usuario;
        public function modelo($modelo){
            if(file_exists("../app/models/".$modelo.".php")){
                require_once("../app/models/".$modelo.".php");
                return new $modelo();
            }else{
                die("no existe el archivo");
            }
        }
        public function vista($vista,$datos=[]){
            if(file_exists("../app/view/".$vista.".php")){
            require_once("../app/view/".$vista.".php");
            
            }else{
                die("no existe el archivo");
            }

        }
    }


?>