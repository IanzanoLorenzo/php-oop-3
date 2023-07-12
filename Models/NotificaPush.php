<?php
    class NotificaPush extends SistemaComunicazione {
        public $icona;

        function __construct($mittente, $contenuto, $destinatario, $oggetto, $icona){
            parent::__construct($mittente, $contenuto, $destinatario, $oggetto);
            $this->icona = $icona;
            $this->led = 'Yellow';
        }

        public function Invia(){
            $this->messaggio = 'Notifica inviata';
        }

    };
?>