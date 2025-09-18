<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Charger Composer
require 'vendor/autoload.php';

if (isset($_POST['user_id']) && isset($_POST['email']) && isset($_POST['feedback'])) {
    // Récupérer les données du formulaire
    $user_id = $_POST['user_id'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];
    $suggestions = isset($_POST['suggestions']) ? $_POST['suggestions'] : ''; // Vérification
    $admin_comment = isset($_POST['admin_comment']) ? $_POST['admin_comment'] : ''; 

    // Créer une nouvelle instance de PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Paramètres du serveur SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'abdoutonzar@gmail.com';
        $mail->Password = 'htho hdvd ajqs zeia'; // Remplacez par un mot de passe sécurisé
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Paramètres de l'email
        $mail->setFrom('abdoutonzar@gmail.com', 'Abderrahim Tonzar');
        $mail->addAddress($email);

        // Sujet de l'email
        $mail->isHTML(true);
        $mail->Subject = 'Mise à jour de votre feedback';

        // Message avec le feedback, suggestions et commentaire de l'admin
        $message = "Le Feedback: $feedback<br>";
        $message .= "Suggestions: $suggestions<br>";
        $message .= "Commentaire de l'admin: $admin_comment<br>";

        $mail->Body = $message;

        // Envoyer l'email
        $mail->send();

        // Mettre à jour le statut dans la base de données à 'treated'
        $updateQuery = "UPDATE reviews SET status='treated' WHERE user_id='$user_id'";
        mysqli_query($con, $updateQuery);
    } catch (Exception $e) {
        echo "Le message n'a pas pu être envoyé. Erreur Mailer : {$mail->ErrorInfo}";
    }
}

?>
