<?php
    require_once "Veicolo.php";
    class Automobile extends Veicolo {
        private $modello;

        public function __construct($marca, $anno, $modello) {
            parent::__construct($marca, $anno);
            $this->modello = $modello;
        }

        public function get_modello() {
            return $this->modello;
        }
    }
?>