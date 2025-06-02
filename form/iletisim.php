<?php
// Mail gönderimi için PHPMailer dahil et
require 'src/PHPMailer.php';
require 'src/SMTP.php';
require 'src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Form verilerini al
$adsoyad = htmlspecialchars($_POST['adsoyad'] ?? '');
$email   = htmlspecialchars($_POST['email'] ?? '');
$telefon = htmlspecialchars($_POST['telefon'] ?? '');
$mesaj   = htmlspecialchars($_POST['mesaj'] ?? '');

// Zorunlu alan kontrolü
if (!$adsoyad || !$email || !$telefon || !$mesaj) {
    header('Location: ../iletisim.php?error=1');
    exit;
}

try {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = 'smtp.ornek.com';  // SMTP server
    $mail->SMTPAuth   = true;
    $mail->Username   = 'username@example.com';
    $mail->Password   = 'password';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;
    $mail->CharSet    = 'UTF-8';

    $mail->setFrom('no-reply@ornek.com', 'Kırat Hukuk İletişim');
    $mail->addAddress('info@ornek.com', 'İletişim');

    $mail->isHTML(true);
    $mail->Subject = 'Yeni İletişim Formu';
    $mail->Body    = "
        <h3>Yeni Mesaj</h3>
        <p><b>Ad Soyad:</b> {$adsoyad}</p>
        <p><b>E-Posta:</b> {$email}</p>
        <p><b>Telefon:</b> {$telefon}</p>
        <p><b>Mesaj:</b><br>" . nl2br($mesaj) . "</p>
    ";

    $mail->send();
    header('Location: ../iletisim.php?success=1');
} catch (Exception $e) {
    header('Location: ../iletisim.php?error=1');
}
