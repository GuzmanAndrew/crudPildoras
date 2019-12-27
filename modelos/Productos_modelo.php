<?php
    class Productos_modelos{
        private $db;
        private $productos;

        public function __construct(){
            require_once("modelos/Conectar.php");
            $this->db = Conectar::conexion();
            $this->productos = array();
        }

        public function get_productos(){
            $consulta = $this->db->query("SELECT * FROM data_usuarios");
            while ($files=$consulta->fetch(PDO::FETCH_ASSOC)) {
                $this->productos[] = $files;
            }
            return $this->productos;
        }
    }
?>