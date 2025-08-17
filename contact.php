
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "info@ttcw.be";
    $subject = "Contactformulier TTC Werchter";
    $body = "Naam: $name\nE-mail: $email\nBericht:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Bedankt voor je bericht!";
    } else {
        echo "Er is een fout opgetreden bij het verzenden.";
    }
}
?>
