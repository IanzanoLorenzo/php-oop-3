<?php
    class Email extends SistemaComunicazione {
        public $allegato;
        public $notificaConsegna;

        function __construct($mittente, $contenuto, $destinatario, $notificaConsegna){
            parent::__construct($mittente, $contenuto, $destinatario);
            $this->notificaConsegna = $notificaConsegna;
            $this->titolo = 'Email';
        }

        public function Invia(){
            $this->messaggio = 'Email inviata';
        }
    };
?>