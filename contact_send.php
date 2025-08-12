<?php
// contact_send.php - eenvoudige voorbeeldhandler (PHPMailer vereist installatie via Composer)
// Pas aan naar jouw serverconfiguratie. Dit is een template; test lokaal of op je server.
// Security note: sanitize and validate inputs before use in production.

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Method not allowed');
}

$name = isset($_POST['name']) ? strip_tags($_POST['name']) : '';
$email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) : '';
$subject = isset($_POST['subject']) ? strip_tags($_POST['subject']) : 'Contactformulier';
$message = isset($_POST['message']) ? strip_tags($_POST['message']) : '';

if (!$email) {
    exit('Ongeldig e-mailadres.');
}

// Example using mail() as fallback. For production, use PHPMailer with SMTP.
$to = 'info@ttcwerchter.be';
$headers = 'From: ' . $email . "\r\n" .
           'Reply-To: ' . $email . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

$body = "Naam: $name\nE-mail: $email\n\nBericht:\n$message";

if (mail($to, $subject, $body, $headers)) {
    header('Location: /?sent=1');
    exit;
} else {
    exit('Er is een fout opgetreden bij het verzenden van de e-mail.');
}
?>
