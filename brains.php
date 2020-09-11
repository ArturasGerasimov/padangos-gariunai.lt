<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';
    
    $usernumber = $_POST['number'];

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.lt';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'info@padangos-gariunai.lt';
    $mail->Password = '9E\U]ZZcw2}mvmFd/.=E(UdHG#fk,fR~WRxg';
    $mail->setFrom('info@padangos-gariunai.lt', $username);
    $mail->addAddress('no-replay@padangos-gariunai.lt', 'Receiver');
    if ($_POST['diameter'] || $_POST['width'] || $_POST['heigh'] || $_POST['number'] != ""){
        $mail->Subject = "Laiskas nuo: ".$usernumber; //sets up subject of the email
        $mail->isHTML(false);
        $mail->Body = <<<EOT
            Skersmuo: {$_POST['diameter']}
            Plotis: {$_POST['width']}
            Aukstis: {$_POST['heigh']}
            Numeris: {$_POST['number']}
            EOT;
        if (!$mail->send()) {
            $msg = '<h2>Deja, kažkas ne taip. Pabandykite dar kartą vėliau.</h2>';
        } else {
            $msg = '<h2>Ačiū, jūsų prašymas išsiųstas!<h2>';
        }
    } else {
        $msg = '<h2>Įveskite jums reikalingus matmenys ir mes su jumis susisieksime.</h2>';
    }
    
    



   
