<?php
//MANADARE MAIL
$to = "qwerty@gmail.com";
$message = "prova";
$subject = "mail di prova";
$from = "io@gmail.com";

if(mail($to, $subject, $message)){
    echo "la mail inviata con successo";
} else {
    echo "errore";
}

//MANDARE HTML
$to = "qwerty@gmail.com";
$subject = "mail di prova";
$from = "io@gmail.com";

$header = 'MINE-Version 1.0' + "\r\n";
$heders .= 'Content-type: test/html; chartset=iso-8859-1' . "\r\n";
$headers .= "From: " . $from . "\r\n";
$message = '<html><body>';
$message.= '<h\ style="color: blue;">titolo</h1>';
$message.= '</body></html>';

if(mail($to, $subject, $message, $headers)){
    echo "la mail inviata con successo";
} else {
    echo "errore";
}

?>