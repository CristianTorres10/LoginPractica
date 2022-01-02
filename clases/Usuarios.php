<?php

    include_once('conexion.php');

    class Usuarios {
        private $user;
        private $nombre;
        private $pass;

        private $conexion;

        public function __construct(){
            $this->$atributo=$contenido;
        }

        public function set($atributo,$contenido){
            $this->$atributo=$contenido;
        }

        public function get(){
            return $this->$atributo;
        }

        public function crear(){

        }

        public function eliminar(){

        }

        public function editar(){

        }

        public function listar(){
            $sql="SELECT * FROM usuarios";
			$resultado=$this->conexion->consultaRetorno($sql);
			return $resultado;
        }

        public function consultar(){
            
        }
    }

?>