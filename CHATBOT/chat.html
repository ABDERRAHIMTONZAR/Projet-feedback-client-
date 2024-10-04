<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Chatbot Plateforme Feedback</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light static-top">
        <div class="container">
            <!-- Logo à gauche -->
            <a class="navbar-brand" href="#">
                <img src="logoMoroSoft.png" alt="..." height="70">
            </a>
            <!-- Bouton de basculement pour le menu responsive -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Menu à droite -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">

                    <li class="nav-item hover">
                        <a class="nav-link active " href="../acceuil/index.html" aria-current="page"
                           style="color: white;">ACCUEIL</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="../feedback" style="color: white;">DONNER SON
                            AVIS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../feedback/admin"
                           style="color: white;">ADMINISTRATION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active accueil-link" href="" id="chatAssistantLink" style="color: white;">SUPPORT CLIENT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="chat-container">
    <div class="chat-header">
        <h1>Chatbot Plateforme Feedback</h1>
    </div>
    <div class="chat-body">
        <div id="chat-messages"></div>
    </div>
    <div class="chat-input">
        <input type="text" id="chat-input" placeholder="Entrez votre message...">
        <button onclick="sendMessage()">Envoyer</button>
    </div>
</div>

<script>
    const chatMessages = document.getElementById('chat-messages');
    const chatInput = document.getElementById('chat-input');
    let lastResponse;

    window.onload = function () {
        // Premier message du chatbot avec options dès le chargement de la page
        addMessage('Bonjour ! Comment puis-je vous aider aujourd\'hui ?');
        addButtons();
    }

    function sendMessage() {
        const message = chatInput.value.trim();
        if (message !=='') {
            addMessage('Vous : ' + message, 'user');
            processMessage(message);
            chatInput.value = '';
        }
    }

    function addMessage(text, type = 'assistant') {
        const messageDiv = document.createElement('div');
        messageDiv.classList.add('chat-message', type);
        messageDiv.textContent = text;
        chatMessages.appendChild(messageDiv);
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }

    function addButtons() {
        const options = [
            {text: '1. Où puis-je laisser un feedback ?', value: '1'},
            {text: '2. Comment donner un feedback ?', value: '2'},
            {text: '3. Quand serai-je contacté ?', value: '3'}
        ];

        options.forEach(option => {
            const button = document.createElement('button');
            button.classList.add('button-option');
            button.textContent = option.text;
            button.onclick = () => processMessage(option.value);
            chatMessages.appendChild(button);
        });
    }

    function addYesNoButtons() {
        const yesButton = document.createElement('button');
        yesButton.classList.add('button-option');
        yesButton.textContent = 'Oui';
        yesButton.onclick = () => processMessage('oui');
        chatMessages.appendChild(yesButton);

        const noButton = document.createElement('button');
        noButton.classList.add('button-option');
        noButton.textContent = 'Non';
        noButton.onclick = () => processMessage('non');
        chatMessages.appendChild(noButton);
    }

    function addHumanAssistanceButton() {
        const humanButton = document.createElement('button');
        humanButton.classList.add('button-option');
        humanButton.textContent = 'Communiquer avec un assistant humain';
        humanButton.onclick = () => communicateWithHuman();
        chatMessages.appendChild(humanButton);
    }

    function processMessage(message) {
        // Supprimer les boutons après un clic
        const buttons = document.querySelectorAll('.button-option');
        buttons.forEach(button => button.remove());

        if (lastResponse && (message.toLowerCase() === 'oui' || message.toLowerCase() === 'non')) {
            handleConfirmation(message);
            return;
        }

        switch (message) {
            case '1':
                lastResponse = 'showFeedbackForm';
                showFeedbackForm();
                break;
            case '2':
                lastResponse = 'showFeedbackInstructions';
                showFeedbackInstructions();
                break;
            case '3':
                lastResponse = 'showFeedbackResponseTime';
                showFeedbackResponseTime();
                break;
            default:
                addMessage('ChatBot : Je n\'ai pas compris. Pouvez-vous choisir une des options proposées ?');
                addButtons(); // Afficher à nouveau les boutons
        }

        addMessage('ChatBot : Est-ce que vous avez compris ?');
        addYesNoButtons();
        addHumanAssistanceButton(); // Ajouter le bouton pour communiquer avec un assistant humain
    }

    function handleConfirmation(message) {
        if (message.toLowerCase() === 'oui') {
            addMessage('ChatBot : Super ! Voici d\'autres options :');
            addButtons();
            lastResponse = null;
        } else if (message.toLowerCase() === 'non') {
            repeatLastResponse();
        } else {
            addMessage('ChatBot : Veuillez répondre par "oui" ou "non".');
            addYesNoButtons();
        }
    }

    function repeatLastResponse() {
        switch (lastResponse) {
            case 'showFeedbackForm':
                showFeedbackForm();
                break;
            case 'showFeedbackInstructions':
                showFeedbackInstructions();
                break;
            case 'showFeedbackResponseTime':
                showFeedbackResponseTime();
                break;
        }
        addMessage('ChatBot : Est-ce que vous avez compris ?');
        addYesNoButtons();
    }

    function showFeedbackForm() {
        addMessage('ChatBot : Vous pouvez laisser un feedback en cliquant sur le bouton "Donner un avis" dans le menu principal.');
        addMessage('Le formulaire de feedback vous permettra de partager votre expérience avec nous.');
    }

    function showFeedbackInstructions() {
        addMessage('ChatBot : Pour donner un feedback, veuillez suivre ces étapes :');
        addMessage('1. Cliquez sur le bouton "Donner un avis" dans le menu principal.');
        addMessage('2. Remplissez le formulaire avec vos commentaires et suggestions.');
        addMessage('3. Cliquez sur le bouton "Envoyer" pour soumettre votre feedback.');
    }

    function showFeedbackResponseTime() {
        addMessage('ChatBot : Nous nous efforçons de répondre à tous les feedbacks dans les 5 jours ouvrés.');
        addMessage('Vous serez contacté au téléphone par un membre de notre équipe pour discuter de votre feedback.');
    }

    function communicateWithHuman() {
        addMessage('ChatBot : Vous allez être mis en contact avec un assistant humain. Veuillez patienter...');
        // Ajouter un délai de 3 secondes avant la redirection
        setTimeout(function() {
            // Remplacez cette URL par l'URL réelle de votre fenêtre de chat en direct
            window.location.href = '../chat';
        }, 5000); // 3000 millisecondes = 3 secondes
    }
</script>


</html>
