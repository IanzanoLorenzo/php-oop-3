<?php  
    require_once __DIR__.'/../Models/SistemaComunicazione.php';
    require_once __DIR__.'/../Models/Sms.php';
    require_once __DIR__.'/../Models/Email.php';
    require_once __DIR__.'/../Models/NotificaPush.php';
    require_once __DIR__.'/../Models/Allegato.php';
        $messaggi = [
            'sms1'      => new Sms('Luca Giurato', 'Garzie a tutte signori e signori!', 'Me', 'Garzie', true, true ),
            'email1'    => new Email('Richard Benson', 'UN POLLOOOOOOOOOOOOOOOO!', 'Me','Pollo', true),
            'notifica1' => new NotificaPush('Facebook', 'Hai una rischiesta di amicizia', 'Me', 'Richiesta di amicizia', 'facebook'),
            'sms2'      => new Sms('Leonardo Dicaprio', 'Quando mi ha detto che aveva più di 25 anni sono scappato', 'Me', 'Più di 25', false, false ),
            'email2'    => new Email('Tina Turner', 'Boh, tipo bella zii', 'Me', 'No', false),
            'notifica2' => new NotificaPush('WhatsAppo', 'Nessun nuovo messaggio', 'Me', 'Nessuno ti cerca', 'whatsappo')
        ];
        $messaggi['email1']->setAllegato(new Allegato('Piedi', '.pdf'));

    // echo '<pre>';
    // foreach($messaggi as $messaggio){
    //     $messaggio->Invia();
    //     echo (SistemaComunicazione::$avviso);
    //     var_dump($messaggio);
    // }
    // echo '</pre>'
?>