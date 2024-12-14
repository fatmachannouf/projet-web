<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu de Questions-Réponses PHP</title>
    
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
        <h1>Jeu de Questions-Réponses PHP</h1>

        <!-- Question 1 -->
        <div class="question">
            <p>1. Qui a créé PHP ?</p>
            <div class="input-container">
                <input type="text" id="question1" placeholder="Votre réponse ici">
                <div id="message1" class="message"></div>
            </div>
        </div>

        <!-- Question 2 -->
        <div class="question">
            <p>2. En quelle année PHP a-t-il été créé ?</p>
            <div class="input-container">
                <input type="text" id="question2" placeholder="Votre réponse ici">
                <div id="message2" class="message"></div>
            </div>
        </div>

        <!-- Question 3 -->
        <div class="question">
            <p>3. PHP est principalement utilisé pour :</p>
            <div class="input-container">
                <input type="text" id="question3" placeholder="Votre réponse ici">
                <div id="message3" class="message"></div>
            </div>
        </div>

        <!-- Question 4 -->
        <div class="question">
            <p>4. Quel serveur web est souvent utilisé avec PHP ?</p>
            <div class="input-container">
                <input type="text" id="question4" placeholder="Votre réponse ici">
                <div id="message4" class="message"></div>
            </div>
        </div>

        <!-- Question 5 (modifiée) -->
        <div class="question">
            <p>5. Quel système de gestion de base de données est souvent utilisé avec PHP ?</p>
            <div class="input-container">
                <input type="text" id="question5" placeholder="Votre réponse ici">
                <div id="message5" class="message"></div>
            </div>
        </div>

        <!-- Question 6 -->
        <div class="question">
            <p>6. Quelle fonction PHP permet de démarrer une session ?</p>
            <div class="input-container">
                <input type="text" id="question6" placeholder="Votre réponse ici">
                <div id="message6" class="message"></div>
            </div>
        </div>

        <!-- Question 7 -->
        <div class="question">
            <p>7. Quelle fonction est utilisée pour afficher du texte en PHP ?</p>
            <div class="input-container">
                <input type="text" id="question7" placeholder="Votre réponse ici">
                <div id="message7" class="message"></div>
            </div>
        </div>

        <!-- Question 8 -->
        <div class="question">
            <p>8. Quel est le suffixe du fichier d'un script PHP ?</p>
            <div class="input-container">
                <input type="text" id="question8" placeholder="Votre réponse ici">
                <div id="message8" class="message"></div>
            </div>
        </div>

        <!-- Question 9 -->
        <div class="question">
            <p>9. Que signifie l'acronyme PHP ?</p>
            <div class="input-container">
                <input type="text" id="question9" placeholder="Votre réponse ici">
                <div id="message9" class="message"></div>
            </div>
        </div>

        <!-- Question 10 -->
        <div class="question">
            <p>10. Quelle est la version actuelle de PHP au moment de la création de ce quiz ?</p>
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
            'question1': 'Rasmus Lerdorf',
            'question2': '1994',
            'question3': 'générer du contenu dynamique',
            'question4': 'Apache',
            'question5': 'MySQL',  // Mise à jour avec la bonne réponse
            'question6': 'session_start',
            'question7': 'echo',
            'question8': '.php',
            'question9': 'Hypertext Preprocessor',
            'question10': '8.x'  // Ajustez avec la version actuelle de PHP si nécessaire
        };

        let attempts = 0;

        function validateAnswers() {
            attempts++;
            let allCorrect = true;

            for (let id in correctAnswers) {
                const userAnswer = document.getElementById(id).value.trim().toLowerCase();
                const messageElement = document.getElementById('message' + id.charAt(id.length - 1));
                if (userAnswer === correctAnswers[id].toLowerCase()) {
                    messageElement.textContent = "Bonne réponse !";
                    messageElement.style.color = 'green';
                    document.getElementById(id).disabled = true;
                } else {
                    if (attempts < 3) {
                        messageElement.textContent = "Incorrect, essayez encore.";
                        messageElement.style.color = 'red';
                    }
                    allCorrect = false;
                }
            }

            if (allCorrect) {
                document.getElementById('reponseMessage').textContent = "Bravo, vous avez toutes les bonnes réponses !";
                document.getElementById('reponseMessage').style.color = 'green';
            } else if (attempts < 3) {
                document.getElementById('reponseMessage').textContent = `Essai ${attempts} sur 3. Essayez encore !`;
                document.getElementById('reponseMessage').style.color = 'orange';
            } else {
                document.getElementById('reponseMessage').textContent = "Désolé, vous avez utilisé toutes vos tentatives. Voici les bonnes réponses :";
                revealAnswers();
                document.getElementById('reponseMessage').style.color = 'red';
                document.getElementById('resetButton').disabled = false;
            }
        }

        function revealAnswers() {
            for (let id in correctAnswers) {
                const input = document.getElementById(id);
                if (input.value === '') {
                    input.value = correctAnswers[id];
                    input.style.backgroundColor = '#e0ffe0';
                }
            }
        }

        function resetGame() {
            attempts = 0;
            for (let id in correctAnswers) {
                document.getElementById(id).value = '';
                document.getElementById(id).disabled = false;
                document.getElementById(id).style.backgroundColor = '';
                document.getElementById('message' + id.charAt(id.length - 1)).textContent = '';
            }
            document.getElementById('reponseMessage').textContent = '';
            document.getElementById('resetButton').disabled = true;
        }
    </script>
    
    <section>
        <div class="button-container">
            <a href="PHP5.php">Précédent</a>
            <a href="Matiére.php">Retour à l'accueil</a>
        </div>
    </section>

</body>
</html>
