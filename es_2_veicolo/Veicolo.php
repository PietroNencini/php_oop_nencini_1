<?php
    class Veicolo {
        private $marca;
        private $anno;

        public function __construct($marca, $anno) {
            $this->marca = $marca;
            $this->anno = $anno;
        }

        public function get_marca() {
            return $this->marca;
        }

        public function get_anno() {
            return $this->anno;
        }
    }
?>