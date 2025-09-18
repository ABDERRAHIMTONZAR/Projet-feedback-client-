<?php 
ob_start(); 
require 'config.php';

// Récupération des données du formulaire
$view = $_POST['view'];
$name = $_POST['name'];
$comments = $_POST['comments'];
$email = $_POST['email'];
$num = $_POST['num'];

// Insérer l'utilisateur dans la table `users`
$query_user = mysqli_query($con, "INSERT INTO `users` (`name`, `email`, `phone`) VALUES ('$name', '$email', '$num')");
$user_id = mysqli_insert_id($con);

// Vérification de l'insertion de l'utilisateur
if ($user_id) {
    // Insérer le feedback dans la table `reviews`
    $query_review = mysqli_query($con, "INSERT INTO `reviews` (`user_id`, `feedback`, `suggestions`) VALUES ('$user_id', '$view', '$comments')");
    if ($query_review) {
        echo '<script>alert("Merci..! Votre feedback est précieux pour nous."); location.replace(document.referrer);</script>';
    } else {
        echo '<script>alert("Erreur lors de l\'envoi du feedback."); location.replace(document.referrer);</script>';
    }
} else {
    echo '<script>alert("Erreur lors de l\'enregistrement des informations utilisateur."); location.replace(document.referrer);</script>';
}

ob_end_flush();
?>

