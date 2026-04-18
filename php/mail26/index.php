<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__.'/vendor/autoload.php';
$mail=new PHPMailer(true);

try
{
    $mail->isSMTP();
    $mail->Host ='smtp.gmail.com';
    $mail->SMTPAuth=true;
    $mail->Username='francesco.renesto@iisviolamarchesini.edu.it';
    $mail->Password='ghfr geot nmtu lmnt';
    $mail->SMTPSecure=PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port=587;

    $mail->setFrom('francesco.renesto@iisviolamarchesini.edu.it');
    $mail->addAddress('edoardo.secchiero@iisviolamarchesini.edu.it');
    $mail->Subject='Test email con PHPMailer';
    $mail->Body='Ciao, questo è un messaggio';
    $mail->Charset='UTF-8';
    $mail->Encoding='base64';

    $mail->send();
    echo 'Mail inviata con successo';
}catch (Exception $e)
    {
        echo "Errore {$mail->ErrorInfo}";
    }