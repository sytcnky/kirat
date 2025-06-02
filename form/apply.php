<?php
// Mail gönderimi için PHPMailer dahil et
require 'src/PHPMailer.php';
require 'src/SMTP.php';
require 'src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Dosya kontrolü
if (!isset($_FILES['cv']) || $_FILES['cv']['error'] !== UPLOAD_ERR_OK) {
    header('Location: ../kariyer.php?error=1');
    exit;
}

// Dosya validasyonu
$allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
$fileType = mime_content_type($_FILES['cv']['tmp_name']);
if (!in_array($fileType, $allowedTypes)) {
    header('Location: ../kariyer.php?error=1');
    exit;
}

if ($_FILES['cv']['size'] > 2 * 1024 * 1024) {
    header('Location: ../kariyer.php?error=1');
    exit;
}

// Dosyayı geçici dizine taşı (güvenlik için)
$uploadDir = __DIR__ . '/../uploads/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}
$tmpFile = $uploadDir . uniqid() . '_' . basename($_FILES['cv']['name']);
move_uploaded_file($_FILES['cv']['tmp_name'], $tmpFile);

// Form verilerini al
$adsoyad  = htmlspecialchars($_POST['adsoyad'] ?? '');
$email    = htmlspecialchars($_POST['email'] ?? '');
$telefon  = htmlspecialchars($_POST['telefon'] ?? '');
$pozisyon = htmlspecialchars($_POST['pozisyon'] ?? '');
$onyazi   = htmlspecialchars($_POST['onyazi'] ?? '');

// Mail gönderimi
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

    $mail->setFrom('no-reply@ornek.com', 'Kırat Hukuk Kariyer');
    $mail->addAddress('ik@ornek.com', 'İK Departmanı');

    $mail->addAttachment($tmpFile);

    $mail->isHTML(true);
    $mail->Subject = 'Yeni Kariyer Başvurusu';
    $mail->Body    = "
        <h3>Yeni Başvuru</h3>
        <p><b>Ad Soyad:</b> {$adsoyad}</p>
        <p><b>E-Posta:</b> {$email}</p>
        <p><b>Telefon:</b> {$telefon}</p>
        <p><b>Pozisyon:</b> {$pozisyon}</p>
        <p><b>Ön Yazı:</b><br>" . nl2br($onyazi) . "</p>
    ";

    $mail->send();
    unlink($tmpFile); // Mail gönderimi sonrası dosyayı sil
    header('Location: ../kariyer.php?success=1');
} catch (Exception $e) {
    unlink($tmpFile);
    header('Location: ../kariyer.php?error=1');
}
