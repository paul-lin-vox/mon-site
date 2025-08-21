<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Vérifie que l'email est valide
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: contact.php?success=false");
        exit;
    }

    $to = "contact@elpton.com";
    $mail_subject = "Nouveau message de votre site : $subject";
    $body = "Nom : $name\n";
    $body .= "Email : $email\n";
    $body .= "Sujet : $subject\n\n";
    $body .= "Message :\n$message";

    // En-têtes sécurisés
    $headers = "From: contact@elpton.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $mail_subject, $body, $headers)) {
        header("Location: contact.php?success=true");
        exit;
    } else {
        header("Location: contact.php?success=false");
        exit;
    }
} else {
    header("Location: contact.php");
    exit;
}
?>
