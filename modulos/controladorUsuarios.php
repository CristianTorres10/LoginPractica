<?php 

    include_once('clases/Usuarios.php');

    class controladorUsuarios {
        private $usuarios;

        public function __construct(){
            $this->usuarios = new Usuarios();
        }

        public function index(){
            $resultado = $this->usuarios->listar();
            return $resultado;
        }
    }

?>