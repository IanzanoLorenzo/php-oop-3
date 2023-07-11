<?php
    class Sms extends SistemaComunicazione {
        public $letto;
        public $risposta;

        function __construct($mittente, $contenuto, $destinatario, $letto, $risposta){
            parent::__construct($mittente, $contenuto, $destinatario);
            $this->letto = $letto;
            $this->risposta = $risposta;
            $this->titolo = 'SMS';
        }

        public function Invia(){
            $this->messaggio = 'Sms inviato';
        }
    };
?>