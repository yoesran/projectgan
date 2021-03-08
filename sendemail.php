<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'projectgan.smtp@gmail.com';
        $mail->Password = 'oNoderakangKue';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('projectgan.smtp@gmail.com');
        $mail->addAddress('projectgan.center@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'Ada email bosss';
        $mail->Body = "<h3>Name : $name <br>Email : $email<br>Message: $message</h3>";

        $mail->send();
        $alert = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Pesan terkirim!</strong> Kami akan segera menghubungi anda.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
    } catch (Exception $e) {
        $alert = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Pesan tidak terkirim!</strong> terjadi kesalahan.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
    }
}
