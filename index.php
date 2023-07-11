<?php 
require_once __DIR__.'/Models/SistemaComunicazione.php';
require_once __DIR__.'/Models/Sms.php';
require_once __DIR__.'/Models/Email.php';
require_once __DIR__.'/Models/NotificaPush.php';
require_once __DIR__.'/Models/Allegato.php';
    $messaggi = [
        'sms1'      => new Sms('Luca Giurato', 'Grazie a tutti signori e signori!', 'Me', true, true ),
        'email1'    => new Email('Luca Giurato', 'Grazie a tutti signori e signori!', 'Me', true),
        'notifica1' => new NotificaPush('Luca Giurato', 'Grazie a tutti signori e signori!', 'Me', 'facebook'),
        'sms2'      => new Sms('Luca Giurato', 'Grazie a tutti signori e signori!', 'Me', true, true ),
        'email2'    => new Email('Luca Giurato', 'Grazie a tutti signori e signori!', 'Me', false),
        'notifica2' => new NotificaPush('Luca Giurato', 'Grazie a tutti signori e signori!', 'Me', 'facebook')
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php foreach($messaggi as $messaggio) :?>
            <div class="col-3 my-3">
                <div class="card p-4">
                    <?php echo (SistemaComunicazione::$avviso);?><br>
                    Tipo: <?php echo $messaggio->titolo; ?><br>
                    Mittente: <?php echo $messaggio->getMittente(); ?><br>
                    Destinatario: <?php echo $messaggio->getDestinatario(); ?><br>
                    Messaggio: <?php echo $messaggio->getContenuto(); ?><br>
                    Stato: <?php $messaggio->Invia(); echo $messaggio->messaggio ?><br>
                    Led: <?php echo $messaggio->led ?><br>
                    <?php if(get_class($messaggio) === 'Email'){?>
                    Allegato: <?php echo $messaggio->allegato !== null ? $messaggio->allegato->name.$messaggio->allegato->format : 'Nessun allegato';?><br>
                    Consegna: <?php echo $messaggio->notificaConsegna === true ? 'Mail ricevuta correttamente' : 'Mail non ricevuta correttamente'; ?>
                    <?php } ?>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</body>
</html>