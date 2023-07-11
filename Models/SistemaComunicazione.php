<?php
    class SistemaComunicazione {
        private $mittente;
        public $titolo;
        private $contenuto;
        private $destinatario;
        public $messaggio;
        static public $avviso = 'DRIIIN';
        public $led;

        function __construct($mittente, $contenuto, $destinatario){
            $this->mittente = $mittente;
            $this->contenuto = $contenuto;
            $this->destinatario = $destinatario;
        }

        public function Invia(){
            $messaggio = 'Inviato';
        }

        public function getMittente(){
            return $this->mittente;
        }

        public function getContenuto(){
            return $this->contenuto;
        }

        public function getDestinatario(){
            return $this->destinatario;
        }
    };


?>