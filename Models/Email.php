<?php
    class Email extends SistemaComunicazione {
        public $allegato;
        public $notificaConsegna;

        function __construct($mittente, $contenuto, $destinatario, $notificaConsegna){
            parent::__construct($mittente, $contenuto, $destinatario);
            $this->notificaConsegna = $notificaConsegna;
            $this->titolo = 'Email';
            $this->led = 'Blue';
        }

        public function Invia(){
            $this->messaggio = 'Email inviata';
        }

        public function setAllegato(Allegato $allegato){
            $this->allegato = $allegato;
        }

        public function Inoltra(){
            return 'Email inoltrata';
        }

        public function Stampa(){
            return 'Email stampata';
        }
    };
?>