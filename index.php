<?php 
    require_once __DIR__.'/DataBase/db.php'
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
                    Mittente: <?php echo $messaggio->getMittente(); ?><br>
                    Destinatario: <?php echo $messaggio->getDestinatario(); ?><br>
                    Oggetto: <?php echo $messaggio->getOggetto(); ?><br>
                    Messaggio: <?php echo $messaggio->getContenuto(); ?><br>
                    Stato: <?php $messaggio->Invia(); echo $messaggio->getMessaggio() ?><br>
                    Led: <?php echo $messaggio->led ?><br>
                    <?php if(get_class($messaggio) === 'Email'){?>
                    Allegato: <?php echo $messaggio->allegato !== null ? $messaggio->allegato->name.$messaggio->allegato->format : 'Nessun allegato';?><br>
                    Consegna: <?php echo $messaggio->notificaConsegna === true ? 'Mail ricevuta correttamente' : 'Mail non ricevuta correttamente'; ?>
                    <?php } elseif (get_class($messaggio) === 'Sms'){?>
                    Letto: <?php echo $messaggio->letto ? 'S&igrave;' : 'No' ?><br>
                    <?php echo $messaggio->risposta ? 'Il messaggio accetta risposte' : 'Il messaggio non accetta risposte' ?>
                    <?php } elseif (get_class($messaggio) === 'NotificaPush'){?>
                    Icona: <?php echo $messaggio->icona ?>
                    <?php } ?>
                    </div>
                <?php if(get_class($messaggio) === 'Email') { echo $messaggio->Stampa().'<br>'; echo $messaggio->Inoltra();} ?>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</body>
</html>