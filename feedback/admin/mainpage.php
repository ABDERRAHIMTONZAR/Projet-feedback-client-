<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <style>
        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }

        .block {
            display: block;
            width: 100%;
            border: none;
            background-color: #4CAF50;
            color: white;
            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
        }

        .block:hover {
            background-color: #ddd;
            color: black;
        }
        textarea {
    border: 1px solid #ced4da; /* Bordure grise */
    border-radius: 0.25rem; /* Coins arrondis */
    transition: border-color 0.2s; /* Transition douce pour la bordure */
}

textarea:focus {
    border-color: #80bdff; /* Couleur de la bordure au focus */
    outline: 0; /* Supprime l'outline par défaut */
  
}

.btn-primary {
    background-color: green; /* Couleur de fond du bouton */
    border: none; /* Pas de bordure */
    color:white;
    width: 30%;
    height:30px
}

.btn-primary:hover {
    background-color: #45a049; /* Couleur de fond au hover */
}
    </style>
    <meta charset="UTF-8">
    <title>Feedback</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />
</head>

<body>
<form id="logoutForm" action="logout.php" method="POST">
    <div class="w3-show-inline-block">
        <center>
            <input type="button" value="LogOut" name="logout" class="w3-btn w3-black" id="logoutButton">
        </center>
    </div>
</form>

<script>
    document.getElementById('logoutButton').onclick = function() {
        if (confirm("Êtes-vous sûr de vouloir vous déconnecter ?")) {
            document.getElementById('logoutForm').submit(); // Soumet le formulaire si l'utilisateur confirme
        }
    };
</script>


    <h1 class="text-center">Listes des feedbacks</h1>
    <?php 
    session_start();
    require 'config.php';
    require 'vendor/autoload.php'; // Charger Composer pour PHPMailer

    if (isset($_SESSION['login_user'])) {
        $userLoggedIn = $_SESSION['login_user'];
        $result = mysqli_query($con, "SELECT u.id, u.name, u.email, u.phone, r.feedback, r.suggestions 
        FROM users u 
        JOIN reviews r ON u.id = r.user_id");


echo "<table border='1' id='customers'>
<tr>
<th>Nom</th>
<th>Email</th>
<th>Téléphone</th>
<th>Feedback</th>
<th>Suggestions</th>
<th>Retour feedback</th>
</tr>";

while ($row = mysqli_fetch_array($result)) {
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['feedback'] . "</td>";
echo "<td>" . $row['suggestions'] . "</td>";
echo "<td>";
?>
<form action="" method="post" id="feedbackForm">
<input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
<input type="hidden" name="email" value="<?php echo $row['email']; ?>">
<input type="hidden" name="feedback" value="<?php echo $row['feedback']; ?>">
<input type="hidden" name="suggestions" value="<?php echo $row['suggestions']; ?>">


<textarea name="admin_comment" class="form-control" rows="4" placeholder="Ajouter un commentaire" required></textarea>

<br><div class="text-center"><input type="submit" name="update_status" value="Envoyer" class="btn-primary "></div>
</form>
<?php
echo "</td>";
echo "</tr>";
}
echo "</table>";

      }
      include('meamail.php');
    ?>
 <script>
$(document).ready(function() {
    // Cible tous les formulaires de feedback
    $('form').on('submit', function(event) {
        event.preventDefault(); // Empêche le rechargement de la page

        // Confirmation avant l'envoi
        if (confirm("Êtes-vous sûr de vouloir envoyer ce retour feedback?")) {
            $.ajax({
                type: 'POST',
                url: '', // L'URL où envoyer la requête, peut être laissée vide si la même page est utilisée
                data: $(this).serialize(), // Sérialise le formulaire actuel
                success: function(response) {
                    alert("Le feedback a été transféré dans le Gmail de l'utilisateur"); // Alerte de succès
                    $(this)[0].reset(); // Réinitialise le formulaire
                }.bind(this), // Lier `this` au contexte de la fonction
                error: function() {
                    alert('Une erreur s\'est produite lors de l\'envoi.'); // Alerte d'erreur
                }
            });
        }
    });
});
</script>



</body>
</html>
