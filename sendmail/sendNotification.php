<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

function sendNotification($recipients, $titre)
{
     $SMTP_USERNAME = 'adamnsiri05@gmail.com';
    $SMTP_PASSWORD = 'kuew zsmh hhva tqxv';

    $mail = new PHPMailer(true);

    try {
        // Configurer SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $SMTP_USERNAME;
        $mail->Password = $SMTP_PASSWORD;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Encodage des emails
        $mail->CharSet = 'UTF-8'; // Important : Définit l'encodage à UTF-8
        $mail->Encoding = 'base64'; // Optionnel mais recommandé pour les caractères spéciaux


        // Configurer l'email
        $mail->setFrom($SMTP_USERNAME, 'L\'équipe Learnora');

        // Ajouter les destinataires
        foreach ($recipients as $email) {
            $mail->addAddress($email);
        }

        // Contenu de l'email
        $mail->isHTML(true);
        $mail->Subject = 'Nouvelle offre ajoutée sur Learnora !';
        $mail->Body = "
            <p>Bonjour,</p>
            <p>Nous sommes ravis de vous informer qu'une nouvelle offre intitulée <strong>{$titre}</strong> a été ajoutée sur notre site !</p>
            <p>N'hésitez pas à visiter notre site pour découvrir cette nouvelle offre et profiter de nos nouveaux services.</p>
            <br>
            <p>Merci de votre confiance !</p>
            <p>Cordialement,<br>L'équipe Learnora</p>
        ";

        // Envoyer l'email
        $mail->send();
        return true;
    } catch (Exception $e) {
        error_log('Erreur lors de l\'envoi : ' . $mail->ErrorInfo);
        return false;
    }
}
