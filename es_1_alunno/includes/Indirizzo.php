<?php
    class Indirizzo implements JsonSerializable {
        private $via;
        private $civico;
        private $cap;
        private $provincia;

        public function __construct($via, $civico, $cap, $provincia) {
            $this->via = $via;
            $this->civico = $civico;
            $this->cap = $cap;
            $this->provincia = $provincia;
        }


        public function jsonSerialize(): array {
            return ['via' => $this->via,
                'civico'=> $this->civico,
                'cap'=> $this->cap,
                'provincia'=> $this->provincia];
        }

    }