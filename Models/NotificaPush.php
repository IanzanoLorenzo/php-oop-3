<?php
    class NotificaPush extends SistemaComunicazione {
        public $icona;

        function __construct($mittente, $contenuto, $destinatario, $icona){
            parent::__construct($mittente, $contenuto, $destinatario);
            $this->icona = $icona;
            $this->titolo = 'Notifica Push';
            $this->led = 'Yellow';
        }

        public function Invia(){
            $this->messaggio = 'Notifica inviata';
        }

    };
?>