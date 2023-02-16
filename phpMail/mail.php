<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'mailPHP/src/Exception.php';
require 'mailPHP/src/PHPMailer.php';
require 'mailPHP/src/SMTP.php';

    if(isset($_POST["send"])){
    /* Creating a new instance of the PHPMailer class. */
    $mail=new PHPMailer(true);
    $mail->isSMTP(); /* Telling the mailer to use SMTP. */
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth=true;
    $mail->Username='your gmail id';
    $mail->Password='you app password note: it need to be generated form gmail';
    $mail->SMTPSecure='ssl';
    $mail->Port=465;
    $mail->setFrom('your gmail id');
    $mail->addAddress($_POST["email"]);
    $mail->isHTML(true);
    $mail->Subject=$_POST['subject'];
    $mail->Body=$_POST['desc'];
    $mail->send();

    echo "
    <script> alert('sent successfull'); 
    window.location='index.php';
    </script>";
    }

?>
