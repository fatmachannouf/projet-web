<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu de Questions-Réponses JavaScript</title>
    
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
    </style>
</head>
<body>

    <div class="quiz-container">
        <h1>Jeu de Questions-Réponses JavaScript</h1>

        <!-- Questions -->
        <div class="question">
            <p>1. Quel mot-clé est utilisé pour déclarer une variable en JavaScript ?</p>
            <div class="input-container">
                <input type="text" id="question1" placeholder="Votre réponse ici">
                <div id="message1" class="message"></div>
            </div>
        </div>

        <div class="question">
            <p>2. Quelle fonction permet de montrer un message à l'utilisateur dans une fenêtre pop-up ?</p>
            <div class="input-container">
                <input type="text" id="question2" placeholder="Votre réponse ici">
                <div id="message2" class="message"></div>
            </div>
        </div>

        <div class="question">
            <p>3. Comment déclarer une constante en JavaScript ?</p>
            <div class="input-container">
                <input type="text" id="question3" placeholder="Votre réponse ici">
                <div id="message3" class="message"></div>
            </div>
        </div>

        <div class="question">
            <p>4. Quelle méthode JavaScript permet de convertir une chaîne en majuscules ?</p>
            <div class="input-container">
                <input type="text" id="question4" placeholder="Votre réponse ici">
                <div id="message4" class="message"></div>
            </div>
        </div>

        <div class="question">
            <p>5. Comment afficher le résultat d'une expression dans la console du navigateur ?</p>
            <div class="input-container">
                <input type="text" id="question5" placeholder="Votre réponse ici">
                <div id="message5" class="message"></div>
            </div>
        </div>

        <div class="question">
            <p>6. Quel est le type de données pour une valeur qui peut être soit vrai soit faux ?</p>
            <div class="input-container">
                <input type="text" id="question6" placeholder="Votre réponse ici">
                <div id="message6" class="message"></div>
            </div>
        </div>

        <div class="question">
            <p>7. Comment créer une fonction en JavaScript ?</p>
            <div class="input-container">
                <input type="text" id="question7" placeholder="Votre réponse ici">
                <div id="message7" class="message"></div>
            </div>
        </div>

        <div class="question">
            <p>8. Quelle est la différence entre `let`, `const` et `var` ?</p>
            <div class="input-container">
                <input type="text" id="question8" placeholder="Votre réponse ici">
                <div id="message8" class="message"></div>
            </div>
        </div>

        <div class="question">
            <p>9. Quel opérateur est utilisé pour effectuer une addition en JavaScript ?</p>
            <div class="input-container">
                <input type="text" id="question9" placeholder="Votre réponse ici">
                <div id="message9" class="message"></div>
            </div>
        </div>

        <div class="question">
            <p>10. Quel est l'opérateur pour vérifier l'égalité stricte en JavaScript ?</p>
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
            'question1': 'let',  // Déclaration d'une variable
            'question2': 'alert', // Afficher une fenêtre pop-up
            'question3': 'const',  // Déclaration d'une constante
            'question4': 'toUpperCase', // Convertir en majuscules
            'question5': 'console.log',  // Afficher dans la console
            'question6': 'boolean',  // Type de données booléen
            'question7': 'function', // Déclaration d'une fonction
            'question8': 'let/const/var',  // Différence entre let, const, var
            'question9': '+',  // Opérateur d'addition
            'question10': '===', // Égalité stricte
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
            document.getElementById('reponseMessage').style.color = ''; // Reset color
            document.getElementById('resetButton').disabled = true;
        }
    </script>

</body>
</html>
