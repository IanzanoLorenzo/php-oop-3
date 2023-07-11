<?php 
require_once __DIR__.'/Models/SistemaComunicazione.php';
require_once __DIR__.'/Models/Sms.php';
require_once __DIR__.'/Models/Email.php';
require_once __DIR__.'/Models/NotificaPush.php';
    $messaggi = [
        'sms1'      => new Sms('Luca Giurato', 'Meggiassino', 'Grazie a tutti signori e signori!', 'Me', true, true ),
        'email1'    => new Email('Luca Giurato', 'Meggiassino', 'Grazie a tutti signori e signori!', 'Me', true),
        'notifica1' => new NotificaPush('Luca Giurato', 'Meggiassino', 'Grazie a tutti signori e signori!', 'Me', 'facebook')
    ];

    echo '<pre>';
    foreach($messaggi as $messaggio){
        $messaggio->Invia();
        echo (SistemaComunicazione::$avviso);
        var_dump($messaggio);
    }
?>