<?php
    /*
    - Creare il file Alunno.php che implementi la classe Alunno con gli attributi protetti per nome, cognome, eta.
    Implementare i metodi selettori (getters e setters), e un metodo di stampa a video degli attributi.
    
    - Creare il file index.php che creai un array di oggetti Alunno ed esegua la stampa dei singoli elementi.
    */
    class Alunno implements JsonSerializable{
        private $nome;
        private $cognome;
        private $eta;

        public function jsonSerialize(): array {
            return ["nome" => $this->nome, "cognome" => $this->cognome, "eta" => $this->eta];
        }

        public function __construct($nome, $cognome, $eta) {
            $this->nome = $nome;
            $this->cognome = $cognome;
            $this->eta = $eta;
        }

        public function get_nome() {
            return $this->nome;
        }

        public function get_cognome() {
            return $this->cognome;
        }

        public function get_eta() {
            return $this->eta;
        }

        public function set_nome($nuovo_nome) {
            $this->nome = $nuovo_nome;
        }

        public function set_cognome($nuovo_cognome) {
            $this->nome = $nuovo_cognome;
        }

        public function set_eta($nuovo_eta) {
            $this->nome = $nuovo_eta;
        }

        public function stampa_dati(): void {
            echo "Nome: " . $this->get_nome() . "<br> Cognome " . $this->get_cognome() . "<br> Eta: " . $this->get_eta() . "<br>  <br>";
        }
    }
?>