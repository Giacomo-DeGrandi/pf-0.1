<?php




if (isset($_POST['send'])) {


    $to      = 'carlo.de-grandi-giacomo@laplateforme.io';
    $subject = $_POST['object'];
    $message = $_POST['text'];
    $headers = 'From:'. $_POST['email'] . "\r\n" .
        'Content-Type: text/plain; charset="UTF-8"' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
    $response =  'Merci pour votre demande. Une reponse vous sera donné au plus vite.';

}

