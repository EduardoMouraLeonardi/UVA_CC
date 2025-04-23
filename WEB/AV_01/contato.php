<?php
require './lib/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

try{
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;    
    $mail->CharSet='UTF-8';          
    $mail->Encoding = 'base64';

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'eduardo.moura.leonardi@gmail.com';
    $mail->Password = 'stey pdya jsjt dhrc'; // SMTP password:stey pdya jsjt dhrc
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;

    //Recipients
    $mail->setFrom('eduardo.moura.leonardi@gmail.com', 'AV_1');
    $mail->addAddress('eduardomoura3610@gmail.com', 'Dudu');     //Add a recipient

    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "Nova Respoosta de Contato";
    $mail->Body    = "O usuario $nome enviou a seguinte mensagem: <br>$mensagem <br>Email do Usuario: $email";
    $mail->AltBody = "O usuario $nome enviou a seguinte mensagem: n/$mensagem n/Email do Usuario: $email";
   
    $mail->send();
    echo 'Message has been sent';
}catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>