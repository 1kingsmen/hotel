<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["sendBooking"])) {
    try {
        $mailBooking = new PHPMailer(true);

        $mailBooking->isSMTP();
        $mailBooking->Host = 'smtp.gmail.com';
        $mailBooking->SMTPAuth = true;
        $mailBooking->Username = 'autaayenajeyi@gmail.com';
        $mailBooking->Password = 'wcnm wjri udpv hiig';
        $mailBooking->SMTPSecure = 'ssl';
        $mailBooking->Port = 465;

        $mailBooking->setFrom('autaayenajeyi@gmail.com');

        $receiverEmailBooking = 'autaayenajeyi@gmail.com';
        $mailBooking->addAddress($receiverEmailBooking);

        $mailBooking->isHTML(true);

        $nameBooking = $_POST["name"];
        $checkInDateBooking = $_POST["check-in"];
        $checkOutDateBooking = $_POST["check-out"];
        $selectedRoomBooking = $_POST["select-room"];
        $numberOfGuestsBooking = $_POST["select-guest"];
        $numberOfRoomsBooking = $_POST["select-number-rooms"];

        $messageBodyBooking = "Name: " . $nameBooking . "<br>"
            . "Check-in Date: " . $checkInDateBooking . "<br>"
            . "Check-out Date: " . $checkOutDateBooking . "<br>"
            . "Selected Room: " . $selectedRoomBooking . "<br>"
            . "Number of Guests: " . $numberOfGuestsBooking . "<br>"
            . "Number of Rooms: " . $numberOfRoomsBooking . "<br>"
            . "Sent at: " . date('d-m-Y');

        $mailBooking->Subject = 'Booking Form Submission';
        $mailBooking->Body = $messageBodyBooking;

        $mailBooking->send();

        echo "
        <script>
            document.location.href = 'sent.php';
            document.getElementById('loader').style.display = 'none'; 
        </script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mailBooking->ErrorInfo}";
    }
}
?>
