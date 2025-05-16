<?php
session_start();

// Initialize the counter
if (!isset($_SESSION['api_calls'])) {
    $_SESSION['api_calls'] = 0;
}

// Increment the counter
$_SESSION['api_calls']++;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'plugins/PHPMailer/src/Exception.php';
require 'plugins/PHPMailer/src/PHPMailer.php';
require 'plugins/PHPMailer/src/SMTP.php';
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["fish"]) && isset($_POST["meal"]) && isset($_POST["nb_personne"]) && isset($_POST["date"]) && isset($_POST["phone"])){
    $extras=$_POST["extras"];
    $fish=$_POST["fish"];
    $meal=$_POST["meal"];
    $nb_personne=$_POST["nb_personne"];
    $date=$_POST["date"];
    $phone=$_POST["phone"];

    $extras_ch = implode(", ", $extras);
    
   
    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // SMTP Server (e.g., Gmail)
        $mail->SMTPAuth = true;
        $mail->Username = 'hmani.wassim.aiesec@gmail.com'; // Your email
        $mail->Password = 'zfai itjz myru vigq'; // Your email password (use App Password for Gmail)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587; // 465 for SSL, 587 for TLS
    
        // Email Details
        $mail->setFrom('hmani.wassim.aiesec@gmail.com', 'wassim hmani');
        $mail->addAddress('hmani.wassim.aiesec@gmail.com', 'wassim hmani');
        $mail->isHTML(true);
        $mail->Subject = 'New Boat Tour Booking Notification N '.$_SESSION['api_calls'];
        $mail->Body = <<<EOT
        Dear Kraten organisation members,<br><br>

        A client has booked a boat tour for <strong>{$date}</strong> with <b>{$nb_personne}</b> persons. The selected meal preference is <b>{$meal}</b>.The extras are <b>$extras_ch</b>.The fish quality is <b>{$fish}</b>.His phone number is <b>{$phone}</b>.<br>
         Please confirm the details and make the necessary arrangements.<br><br>
        
        Best regards,
        EOT;
    
        $mail->send();
        echo 'request sent successfully!';
    } catch (Exception $e) {
        echo "Email could not be sent. Error: {$mail->ErrorInfo}";
    }
}else{
    echo "data unavaileble";
}
}
?>