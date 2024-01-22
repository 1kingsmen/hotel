<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["sendContact"])) {
    try {
        $mailContact = new PHPMailer(true);

        $mailContact->isSMTP();
        $mailContact->Host = 'smtp.gmail.com';
        $mailContact->SMTPAuth = true;
        $mailContact->Username = 'autaayenajeyi@gmail.com';
        $mailContact->Password = 'wcnm wjri udpv hiig';
        $mailContact->SMTPSecure = 'ssl';
        $mailContact->Port = 465;

        $mailContact->setFrom('autaayenajeyi@gmail.com');

        $receiverEmailContact = 'autaayenajeyi@gmail.com';
        $mailContact->addAddress($receiverEmailContact);

        $mailContact->isHTML(true);

        $nameContact = $_POST["full-name"];
        $emailContact = $_POST["email"];
        $addressContact = $_POST["address"];
        $messageContact = $_POST["message"];

        $messageBodyContact = "Name: " . $nameContact . "<br>"
            . "Email: " . $emailContact . "<br>"
            . "Address: " . $addressContact . "<br>"
            . "Message: " . $messageContact . "<br>"
            . "Sender's Email: " . $emailContact . "<br>"
            . "Sent at: " . date('d-m-Y');

        $mailContact->Subject = 'Contact Form Submission';
        $mailContact->Body = $messageBodyContact;

        $mailContact->send();

    echo "
    <script>
        document.location.href = 'sent.php';
        document.getElementById('loader').style.display = 'none'; 
    </script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mailContact->ErrorInfo}";

    // Log the error to a file
    error_log("Email error: " . $mailContact->ErrorInfo, 3, "error_log.txt");
}
}
?>
