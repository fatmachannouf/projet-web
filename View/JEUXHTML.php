<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu de Questions-Réponses HTML</title>
    
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
            margin-bottom: 10px;
        }
        .input-container input {
            padding: 10px;
            width: 100%;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .response-message {
            font-size: 14px;
            margin-top: 5px;
            color: #666;
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
        <h1>Jeu de Questions-Réponses HTML</h1>

        <!-- Chapitre 1 : Introduction à HTML -->
        <div class="question">
            <p>1. Quelle balise est utilisée pour définir un document HTML ?</p>
            <div class="input-container">
                <input type="text" id="question1" placeholder="Votre réponse ici">
                <div class="response-message" id="response1"></div>
            </div>
        </div>

        <div class="question">
            <p>2. Quelle est la balise pour définir un en-tête dans une page HTML ?</p>
            <div class="input-container">
                <input type="text" id="question2" placeholder="Votre réponse ici">
                <div class="response-message" id="response2"></div>
            </div>
        </div>

        <!-- Chapitre 2 : Structure d'un document HTML -->
        <div class="question">
            <p>3. Quelle balise définit le début du corps d'une page HTML ?</p>
            <div class="input-container">
                <input type="text" id="question3" placeholder="Votre réponse ici">
                <div class="response-message" id="response3"></div>
            </div>
        </div>

        <div class="question">
            <p>4. Quelle balise est utilisée pour ajouter un lien hypertexte dans une page HTML ?</p>
            <div class="input-container">
                <input type="text" id="question4" placeholder="Votre réponse ici">
                <div class="response-message" id="response4"></div>
            </div>
        </div>

        <!-- Chapitre 3 : Balises de texte et formatage -->
        <div class="question">
            <p>5. Quelle balise est utilisée pour mettre en gras du texte ?</p>
            <div class="input-container">
                <input type="text" id="question5" placeholder="Votre réponse ici">
                <div class="response-message" id="response5"></div>
            </div>
        </div>

        <div class="question">
            <p>6. Quelle balise est utilisée pour créer une liste ordonnée ?</p>
            <div class="input-container">
                <input type="text" id="question6" placeholder="Votre réponse ici">
                <div class="response-message" id="response6"></div>
            </div>
        </div>

        <!-- Chapitre 4 : Images et liens -->
        <div class="question">
            <p>7. Quelle balise est utilisée pour insérer une image dans une page HTML ?</p>
            <div class="input-container">
                <input type="text" id="question7" placeholder="Votre réponse ici">
                <div class="response-message" id="response7"></div>
            </div>
        </div>

        <div class="question">
            <p>8. Quelle balise est utilisée pour ajouter un lien qui ouvre une nouvelle fenêtre ?</p>
            <div class="input-container">
                <input type="text" id="question8" placeholder="Votre réponse ici">
                <div class="response-message" id="response8"></div>
            </div>
        </div>

        <!-- Chapitre 5 : HTML Sémantique -->
        <div class="question">
            <p>9. Quelle balise est utilisée pour définir une section de contenu autonome ?</p>
            <div class="input-container">
                <input type="text" id="question9" placeholder="Votre réponse ici">
                <div class="response-message" id="response9"></div>
            </div>
        </div>

        <div class="question">
            <p>10. Quelle balise est utilisée pour définir l'en-tête d'une page ou d'une section ?</p>
            <div class="input-container">
                <input type="text" id="question10" placeholder="Votre réponse ici">
                <div class="response-message" id="response10"></div>
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
            'question1': 'html', // Définir un document HTML
            'question2': 'header', // Définir un en-tête
            'question3': 'body', // Début du corps de la page
            'question4': 'a', // Ajouter un lien
            'question5': 'b', // Texte en gras
            'question6': 'ol', // Liste ordonnée
            'question7': 'img', // Insérer une image
            'question8': 'a target="_blank"', // Lien qui ouvre une nouvelle fenêtre
            'question9': 'article', // Section de contenu autonome
            'question10': 'header', // En-tête de la page
        };

        let attempts = 0;

        function validateAnswers() {
            attempts++;
            let allCorrect = true;

            // Vérifier les réponses de l'utilisateur
            for (let id in correctAnswers) {
                const userAnswer = document.getElementById(id).value.trim().toLowerCase();
                const responseElement = document.getElementById('response' + id.slice(-1));

                if (userAnswer === correctAnswers[id]) {
                    responseElement.textContent = "Correct !";
                    responseElement.style.color = 'green';
                    document.getElementById(id).disabled = true; // Ne plus pouvoir changer la réponse correcte
                } else {
                    responseElement.textContent = "Incorrect, essayez encore.";
                    responseElement.style.color = 'red';
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
                const inputElement = document.getElementById(id);
                inputElement.value = correctAnswers[id];
                inputElement.disabled = true;
                inputElement.style.backgroundColor = '#e0ffe0'; // Highlight correct answers
            }
        }

        function resetGame() {
            attempts = 0;
            // Réinitialiser les champs de texte et messages
            for (let id in correctAnswers) {
                const inputElement = document.getElementById(id);
                const responseElement = document.getElementById('response' + id.slice(-1));
                inputElement.value = '';
                inputElement.disabled = false;
                inputElement.style.backgroundColor = ''; // Remove background highlight
                responseElement.textContent = '';
            }
            document.getElementById('reponseMessage').textContent = '';
            document.getElementById('resetButton').disabled = true;
        }
    </script>
    <section>
        <div class="button-container">
            <a href="HTML5.php">Précédent</a>
            <a href="Matiére.php">Retour à l'accueil</a>
        </div>
        </section>
</body>
</html>
