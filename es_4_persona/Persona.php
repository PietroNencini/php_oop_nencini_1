<?php
    class Persona {
        private $nome;
        private $cognome;
        
        public function __construct($nome, $cognome) {
            $this->nome = $nome;
            $this->cognome = $cognome;
        }

        public function presentati() {
            return "Salve, mi chiamo ".$this->nome." ".$this->cognome. " e sono una brutta persona";
        }
    }
?>