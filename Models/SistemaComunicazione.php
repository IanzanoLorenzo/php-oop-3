<?php
    class SistemaComunicazione {
        private $mittente;
        private $destinatario;
        private $oggetto;
        private $contenuto;
        protected $messaggio;
        static public $avviso = 'DRIIIN';
        public $led;

        function __construct($mittente, $contenuto, $destinatario, $oggetto){
            $this->mittente = $mittente;
            $this->contenuto = $contenuto;
            $this->destinatario = $destinatario;
            $this->oggetto = $oggetto;
        }

        public function Invia(){
            $messaggio = 'Inviato';
        }

        public function getOggetto(){
            return $this->oggetto;
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

        public function getMessaggio(){
            return $this->messaggio;
        }
    };


?>