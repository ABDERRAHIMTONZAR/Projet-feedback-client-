<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Admin Login Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
   

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <style>
    header nav ul li a:hover {
      border: none;
      background-color: rgb(0, 124, 128);
      color: white;
      border-radius: 2px;
      margin: 5px;
      padding: 10px 15px;
      font-family: Roboto;
    }

    .accueil-link {
      border: none;
      background-color: rgb(0, 124, 128);
      color: white;
      border-radius: 2px;
      margin: 5px;
      padding: 10px 15px;
      font-family: Roboto;
    }
    body{
     
    }
  </style>
</head>

<body style=" background-image: url('image/bgr.png');">

  <header>
    <nav class="navbar navbar-expand-lg navbar-light static-top">
      <div class="container">
        <!-- Logo à gauche -->
        <a href="#">
          <img src="image/MSS LOGO V2.png" alt="..." height="80">
        </a>
        <!-- Bouton de basculement pour le menu responsive -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Menu à droite -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item hover">
              <a class="nav-link active" href="../../acceuil" aria-current="page" style="color: white;">ACCUEIL</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="../" style="color: white;">DONNER SON AVIS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active accueil-link" href="#" style="color: white;">ADMINISTRATION</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="../../CHATBOT/chat.php" style="color: white;">SUPPORT CLIENT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header><br><br>
  <div class="log-form">
    <h2 style="color:white;">Connectez-vous à votre compte</h2>
    <form action="checklogin.php" method="POST">
      <input type="email" title="username" placeholder="username" name="email" required />
      <input type="password" title="username" placeholder="password" name="password" required />
      <input type="submit" name="login" value="Login">
    </form>
  </div><!--end log form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  
</body>

</html>
