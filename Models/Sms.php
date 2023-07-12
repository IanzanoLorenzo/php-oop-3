<?php
    class Sms extends SistemaComunicazione {
        public $letto;
        public $risposta;

        function __construct($mittente, $contenuto, $destinatario, $oggetto, $letto, $risposta){
            parent::__construct($mittente, $contenuto, $destinatario, $oggetto);
            $this->letto = $letto;
            $this->risposta = $risposta;
            $this->led = 'Green';
        }

        public function Invia(){
            $this->messaggio = 'Sms inviato';
        }
    };
?>