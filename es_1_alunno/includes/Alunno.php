<?php
    /*
    - Creare il file Alunno.php che implementi la classe Alunno con gli attributi protetti per nome, cognome, eta.
    Implementare i metodi selettori (getters e setters), e un metodo di stampa a video degli attributi.
    
    - Creare il file index.php che creai un array di oggetti Alunno ed esegua la stampa dei singoli elementi.
    */
    
    require_once "Voto.php";
    class Alunno implements JsonSerializable{
        private $nome;
        private $cognome;
        private $eta;
        private $valutazioni;
        private $indirizzo;
        private $bocciato = false;

        public function jsonSerialize(): array {
            return ["nome" => $this->nome, "cognome" => $this->cognome, "eta" => $this->eta, "valutazioni" => $this->valutazioni, "address"=> $this->indirizzo];
        }
        
        public function __construct($nome, $cognome, $eta, $indirizzo) {
            $this->nome = $nome;
            $this->cognome = $cognome;
            $this->eta = $eta;
            $this->valutazioni = [];
            $this->indirizzo = $indirizzo;
        }

        public function get_nome(): mixed {
            return $this->nome;
        }

        public function get_cognome(): mixed {
            return $this->cognome;
        }

        public function get_eta(): mixed {
            return $this->eta;
        }

        public function set_nome($nuovo_nome): void {
            $this->nome = $nuovo_nome;
        }

        public function set_cognome($nuovo_cognome): void {
            $this->nome = $nuovo_cognome;
        }

        public function set_eta($nuovo_eta): void {
            $this->nome = $nuovo_eta;
        }

        public function stampa_dati(): void {
            echo "Nome: " . $this->get_nome() . "<br> Cognome " . $this->get_cognome() . "<br> Eta: " . $this->get_eta() . "<br>  <br>";
        }
        
        public function getVoti(): array {
            return $this->valutazioni;
        }

        public function addVoto(Voto $voto) {
            $this->valutazioni[] = $voto;
        }

        public function getIndirizzo() {
            return $this->indirizzo;
        }

        public function setIndirizzo($indirizzo): void {
            $this->indirizzo = $indirizzo;
        }

        public function getBocciato() {
            return $this->bocciato;
        }

        public function setBocciato($bocciato): void {
            $this->bocciato = $bocciato;
        }    }
?>