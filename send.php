<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sécurisation des données reçues
    $nom    = htmlspecialchars(trim($_POST['nom']));
    $email  = htmlspecialchars(trim($_POST['email']));
    $sujet  = htmlspecialchars(trim($_POST['sujet']));
    $message= htmlspecialchars(trim($_POST['message']));

    // Vérification des champs obligatoires
    if (empty($nom) || empty($email) || empty($sujet) || empty($message)) {
        header("Location: contact.php?success=false");
        exit;
    }

    // Vérifier si l'email est valide
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: contact.php?success=false");
        exit;
    }

    // Destinataire de l’email (ton adresse)
    $to = "contact@elpton.com";  

    // Sujet de l’email
    $subject = "📩 Nouveau message de $nom — $sujet";

    // Corps du message
    $body = "Vous avez reçu un nouveau message depuis le formulaire de contact :\n\n"
          . "Nom : $nom\n"
          . "Email : $email\n"
          . "Services choisis : $sujet\n\n"
          . "Message :\n$message\n";

    // Headers (expéditeur + anti-spam)
    $headers = "From: $nom <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envoi de l’email
    if (mail($to, $subject, $body, $headers)) {
        // ✅ Envoi réussi
        header("Location: contact.php?success=true");
        exit;
    } else {
        // ❌ Erreur d’envoi
        header("Location: contact.php?success=false");
        exit;
    }
} else {
    // Accès direct interdit
    header("Location: contact.php");
    exit;
}
?>
