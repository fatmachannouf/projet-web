<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Évaluation JavaScript</title>
    <style>
        /* Style global */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fb;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            width: 90%;
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            font-size: 32px;
            color: #4A90E2;
            margin-bottom: 30px;
        }

        .question {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        .question:hover {
            background-color: #e7f3fe;
        }

        .question h3 {
            margin-top: 0;
            font-size: 20px;
            color: #333;
        }

        .responses {
            margin-left: 20px;
            display: flex;
            flex-direction: column;
        }

        .responses label {
            font-size: 16px;
            margin: 8px 0;
            display: flex;
            align-items: center;
            transition: color 0.3s ease;
        }

        .responses label:hover {
            color: #4A90E2;
        }

        .responses input[type="radio"] {
            margin-right: 10px;
            transform: scale(1.2);
        }

        .evaluation {
            margin-top: 30px;
            text-align: center;
        }

        button {
            padding: 12px 25px;
            background-color: #4A90E2;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        button:hover {
            background-color: #357ABD;
            transform: translateY(-3px);
        }

        button:active {
            transform: translateY(1px);
        }

        #submitButton {
            margin-top: 30px;
        }

        .certificate {
            margin-top: 30px;
            font-size: 18px;
            color: #28a745;
            font-weight: bold;
            display: none;
        }

        .certificate a {
            color: #28a745;
            text-decoration: none;
            font-weight: normal;
        }

        .certificate a:hover {
            text-decoration: underline;
        }

        .reclamation {
            color: #d9534f;
            font-weight: bold;
            margin-top: 20px;
        }

    </style>
</head>
<body>

    <div class="container">
        <h1>Évaluation JavaScript</h1>

        <!-- Section des questions -->
        <div class="questions">
            <!-- Question 1 -->
            <div class="question" id="question1">
                <h3>Question 1 : Quelle fonction JavaScript permet de récupérer les données envoyées par un formulaire en méthode GET ?</h3>
                <div class="responses">
                    <label><input type="radio" name="q1" value="GET"> GET</label>
                    <label><input type="radio" name="q1" value="POST"> POST</label>
                    <label><input type="radio" name="q1" value="fetch"> fetch</label>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="question" id="question2">
                <h3>Question 2 : Quel est le résultat de `console.log(2 + 2);` en JavaScript ?</h3>
                <div class="responses">
                    <label><input type="radio" name="q2" value="2"> 2</label>
                    <label><input type="radio" name="q2" value="4"> 4</label>
                    <label><input type="radio" name="q2" value="22"> 22</label>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="question" id="question3">
                <h3>Question 3 : Quel est le type de la variable `let var = '10';` ?</h3>
                <div class="responses">
                    <label><input type="radio" name="q3" value="String"> String</label>
                    <label><input type="radio" name="q3" value="Number"> Number</label>
                    <label><input type="radio" name="q3" value="Boolean"> Boolean</label>
                </div>
            </div>

            <!-- Question 4 -->
            <div class="question" id="question4">
                <h3>Question 4 : Que fait la méthode `Array.prototype.push()` en JavaScript ?</h3>
                <div class="responses">
                    <label><input type="radio" name="q4" value="Ajoute un élément à la fin du tableau"> Ajoute un élément à la fin du tableau</label>
                    <label><input type="radio" name="q4" value="Supprime un élément du tableau"> Supprime un élément du tableau</label>
                    <label><input type="radio" name="q4" value="Trie un tableau"> Trie un tableau</label>
                </div>
            </div>

            <!-- Question 5 -->
            <div class="question" id="question5">
                <h3>Question 5 : Quel est le but de la méthode `console.log()` ?</h3>
                <div class="responses">
                    <label><input type="radio" name="q5" value="Afficher un message dans la console"> Afficher un message dans la console</label>
                    <label><input type="radio" name="q5" value="Créer un élément HTML"> Créer un élément HTML</label>
                    <label><input type="radio" name="q5" value="Déclarer une variable"> Déclarer une variable</label>
                </div>
            </div>

            <!-- Question 6 -->
            <div class="question" id="question6">
                <h3>Question 6 : Quelle est la syntaxe correcte pour créer une fonction en JavaScript ?</h3>
                <div class="responses">
                    <label><input type="radio" name="q6" value="function nom_fonction() {}"> function nom_fonction() {}</label>
                    <label><input type="radio" name="q6" value="def nom_fonction() {}"> def nom_fonction() {}</label>
                    <label><input type="radio" name="q6" value="create function nom_fonction() {}"> create function nom_fonction() {}</label>
                </div>
            </div>

            <!-- Question 7 -->
            <div class="question" id="question7">
                <h3>Question 7 : Quel est le résultat de `console.log(10 / 2);` en JavaScript ?</h3>
                <div class="responses">
                    <label><input type="radio" name="q7" value="5"> 5</label>
                    <label><input type="radio" name="q7" value="2"> 2</label>
                    <label><input type="radio" name="q7" value="0"> 0</label>
                </div>
            </div>

            <!-- Question 8 -->
            <div class="question" id="question8">
                <h3>Question 8 : Comment déclarer une constante en JavaScript ?</h3>
                <div class="responses">
                    <label><input type="radio" name="q8" value="const NOM_CONSTANTE = 10;"> const NOM_CONSTANTE = 10;</label>
                    <label><input type="radio" name="q8" value="let NOM_CONSTANTE = 10;"> let NOM_CONSTANTE = 10;</label>
                    <label><input type="radio" name="q8" value="var NOM_CONSTANTE = 10;"> var NOM_CONSTANTE = 10;</label>
                </div>
            </div>

            <!-- Question 9 -->
            <div class="question" id="question9">
                <h3>Question 9 : Quel est le résultat de `console.log(2 ** 3);` en JavaScript ?</h3>
                <div class="responses">
                    <label><input type="radio" name="q9" value="6"> 6</label>
                    <label><input type="radio" name="q9" value="8"> 8</label>
                    <label><input type="radio" name="q9" value="9"> 9</label>
                </div>
            </div>

            <!-- Question 10 -->
            <div class="question" id="question10">
                <h3>Question 10 : Quelle fonction JavaScript permet de lire un fichier ligne par ligne ?</h3>
                <div class="responses">
                    <label><input type="radio" name="q10" value="fgets()"> fgets()</label>
                    <label><input type="radio" name="q10" value="readFile()"> readFile()</label>
                    <label><input type="radio" name="q10" value="fs.readFileSync()"> fs.readFileSync()</label>
                </div>
            </div>

            <button id="submitButton" onclick="evaluateTest()">Évaluer</button>
            <div id="reclamation" class="reclamation"></div>
        </div>

        <div id="result" class="evaluation"></div>
    </div>

    <script>
        const correctAnswers = {
            q1: 'GET',
            q2: '4',
            q3: 'String',
            q4: 'Ajoute un élément à la fin du tableau',
            q5: 'Afficher un message dans la console',
            q6: 'function nom_fonction() {}',
            q7: '5',
            q8: 'const NOM_CONSTANTE = 10;',
            q9: '8',
            q10: 'fgets()'
        };

        function evaluateTest() {
            let score = 0;
            const totalQuestions = Object.keys(correctAnswers).length;
            let skippedQuestion = false;

            for (let q = 1; q <= totalQuestions; q++) {
                const userAnswer = document.querySelector(`input[name="q${q}"]:checked`);
                if (!userAnswer) {
                    skippedQuestion = true;
                } else if (userAnswer.value === correctAnswers[`q${q}`]) {
                    score += 10;
                }
            }

            const resultDiv = document.getElementById('result');
            resultDiv.innerHTML = `Votre score est : ${score} / ${totalQuestions * 10}`;

            if (score >= totalQuestions * 8) {
                resultDiv.innerHTML += `<div class="certificate">Félicitations ! Vous avez réussi. <a href="#">Téléchargez votre certificat</a></div>`;
            }

            const reclamationDiv = document.getElementById('reclamation');
            if (skippedQuestion) {
                reclamationDiv.innerHTML = "Attention, vous avez oublié de répondre à une ou plusieurs questions.";
            } else {
                reclamationDiv.innerHTML = "";
            }
        }
    </script>

</body>
</html>
