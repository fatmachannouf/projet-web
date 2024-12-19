<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu de Questions-Réponses CSS</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }
        .quiz-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .question {
            margin-bottom: 20px;
            font-size: 18px;
        }
        .input-container {
            margin-bottom: 20px;
        }
        .input-container input {
            padding: 10px;
            width: 100%;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .button-container {
            text-align: center;
        }
        .reponse {
            margin-top: 20px;
            font-weight: bold;
            color: green;
        }
        .reponse.error {
            color: red;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 4px;
            background-color: #28a745;
            color: white;
        }
        button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }
        .button-container {
            margin-top: 20px;
            text-align: center;
        }
        .button-container a {
            text-decoration: none;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 0 10px;
        }
        .button-container a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="quiz-container">
        <h1>Jeu de Questions-Réponses CSS</h1>

        <div class="question">
            <p>1. Quelle propriété CSS permet de modifier la couleur d'un texte ?</p>
            <div class="input-container">
                <input type="text" id="question1" placeholder="Votre réponse ici">
                <div id="message1" class="message"></div>
            </div>
        </div>

        <div class="question">
            <p>2. Quelle unité relative est souvent utilisée pour définir des tailles de police adaptatives ?</p>
            <div class="input-container">
                <input type="text" id="question2" placeholder="Votre réponse ici">
                <div id="message2" class="message"></div>
            </div>
        </div>

        <div class="question">
            <p>3. Quel système de mise en page est utilisé pour positionner les éléments en colonnes et en lignes ?</p>
            <div class="input-container">
                <input type="text" id="question3" placeholder="Votre réponse ici">
                <div id="message3" class="message"></div>
            </div>
        </div>

        <div class="question">
            <p>4. Quel est le rôle de la propriété CSS `z-index` ?</p>
            <div class="input-container">
                <input type="text" id="question4" placeholder="Votre réponse ici">
                <div id="message4" class="message"></div>
            </div>
        </div>

        <div class="question">
            <p>5. Quel framework CSS populaire permet de créer des sites web responsives rapidement ?</p>
            <div class="input-container">
                <input type="text" id="question5" placeholder="Votre réponse ici">
                <div id="message5" class="message"></div>
            </div>
        </div>

        <div class="question">
            <p>6. Quelle propriété CSS permet de définir la marge intérieure d'un élément ?</p>
            <div class="input-container">
                <input type="text" id="question6" placeholder="Votre réponse ici">
                <div id="message6" class="message"></div>
            </div>
        </div>

        <div class="question">
            <p>7. Quelle propriété CSS est utilisée pour aligner les éléments horizontalement au centre de la page ?</p>
            <div class="input-container">
                <input type="text" id="question7" placeholder="Votre réponse ici">
                <div id="message7" class="message"></div>
            </div>
        </div>

        <div class="question">
            <p>8. Quelle propriété CSS permet de définir la taille d'une bordure autour d'un élément ?</p>
            <div class="input-container">
                <input type="text" id="question8" placeholder="Votre réponse ici">
                <div id="message8" class="message"></div>
            </div>
        </div>

        <div class="question">
            <p>9. Quel est le nom du module CSS utilisé pour les animations ?</p>
            <div class="input-container">
                <input type="text" id="question9" placeholder="Votre réponse ici">
                <div id="message9" class="message"></div>
            </div>
        </div>

        <div class="question">
            <p>10. Quelle propriété CSS permet de définir la couleur de fond d'un élément ?</p>
            <div class="input-container">
                <input type="text" id="question10" placeholder="Votre réponse ici">
                <div id="message10" class="message"></div>
            </div>
        </div>

        <div class="button-container">
            <button id="validateButton" onclick="validateAnswers()">Valider</button>
            <button id="resetButton" onclick="resetGame()" disabled>Réinitialiser</button>
        </div>

        <div class="reponse" id="reponseMessage"></div>
    </div>

    <script>
        const correctAnswers = {
            'question1': 'color',  // Couleur du texte
            'question2': 'em',  // Unité relative pour les polices
            'question3': 'grid',  // Mise en page en colonnes et lignes
            'question4': 'z-index',  // Ordre d'empilement
            'question5': 'bootstrap',  // Framework CSS populaire
            'question6': 'padding',  // Marge intérieure
            'question7': 'margin',  // Centrage horizontal
            'question8': 'border-width',  // Taille de la bordure
            'question9': 'animation',  // Propriété des animations
            'question10': 'background-color'  // Couleur de fond
        };

        let attempts = 0;

        function validateAnswers() {
            attempts++;
            let allCorrect = true;

            // Vérifier les réponses de l'utilisateur
            for (let id in correctAnswers) {
                const userAnswer = document.getElementById(id).value.trim().toLowerCase();
                const messageElement = document.getElementById('message' + id.charAt(id.length - 1));
                if (userAnswer === correctAnswers[id]) {
                    // Si la réponse est correcte
                    messageElement.textContent = "Bonne réponse !";
                    messageElement.style.color = 'green';
                    document.getElementById(id).disabled = true;  // Empêche la modification de la réponse correcte
                } else {
                    // Si la réponse est incorrecte
                    if (attempts < 3) {
                        messageElement.textContent = "Incorrect, essayez encore.";
                        messageElement.style.color = 'red';
                    }
                    allCorrect = false;
                }
            }

            // Si toutes les réponses sont correctes
            if (allCorrect) {
                document.getElementById('reponseMessage').textContent = "Bravo, vous avez toutes les bonnes réponses !";
                document.getElementById('reponseMessage').classList.remove('error');
                document.getElementById('reponseMessage').style.color = 'green';
            } else if (attempts < 3) {
                document.getElementById('reponseMessage').textContent = `Essai ${attempts} sur 3. Essayez encore !`;
                document.getElementById('reponseMessage').classList.add('error');
                document.getElementById('reponseMessage').style.color = 'orange';
            } else {
                document.getElementById('reponseMessage').textContent = "Désolé, vous avez utilisé toutes vos tentatives. Voici les bonnes réponses :";
                revealAnswers();
                document.getElementById('reponseMessage').classList.add('error');
                document.getElementById('reponseMessage').style.color = 'red';

                // Activer le bouton "Réinitialiser" après 3 tentatives
                document.getElementById('resetButton').disabled = false;
            }
        }

        function revealAnswers() {
            for (let id in correctAnswers) {
                const input = document.getElementById(id);
                if (input.value === '') { // Ne pas afficher la réponse si l'utilisateur a déjà donné la bonne
                    input.value = correctAnswers[id];
                    input.style.backgroundColor = '#e0ffe0'; // Highlight correct answers
                }
            }
        }

        function resetGame() {
            attempts = 0;
            // Réinitialiser les champs de texte et messages
            for (let id in correctAnswers) {
                document.getElementById(id).value = '';
                document.getElementById(id).disabled = false; // Réactiver les champs
                document.getElementById(id).style.backgroundColor = ''; // Remove background highlight
                document.getElementById('message' + id.charAt(id.length - 1)).textContent = ''; // Clear messages
            }
            document.getElementById('reponseMessage').textContent = '';
            document.getElementById('resetButton').disabled = true;
        }
    </script>

    <section>
        <div class="button-container">
            <a href="CSS5.php">Précédent</a>
            <a href="Matiére.php">Retour à l'accueil</a>
        </div>
    </section>
</body>
</html>
