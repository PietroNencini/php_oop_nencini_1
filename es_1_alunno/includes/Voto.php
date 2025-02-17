<?php


    class Voto implements JsonSerializable {
        private $valore;
        private $materia;
        private $giudizio;

        public function __construct($valore, $materia, $giudizio) {
            $this->valore = $valore;
            $this->materia = $materia;
            $this->giudizio = $giudizio;
        }

        public function jsonSerialize(): array {
            return [
                'valore' => $this->valore,
                'materia'=> $this->materia,
                'giudizio'=> $this->giudizio
            ];
        }

        public function getValore() {
            return $this->valore;
        }

        public function getMateria() {
            return $this->materia;
        }

        public function getGiudizio() {
            return $this->giudizio;
        }

        public function setValore($valore) {
            $this->valore = $valore;
        }

        public function setMateria($materia) {
            $this->materia = $materia;
        }

        public function setGiudizio($giudizio) {
            $this->giudizio = $giudizio;
        }


    }