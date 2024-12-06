<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP - Côté Java</title>
    <style>
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
        }

        .responses input[type="radio"] {
            margin-right: 10px;
            transform: scale(1.2);
        }

        button {
            padding: 12px 25px;
            background-color: #4A90E2;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #357ABD;
        }

        .error {
            color: red;
            font-size: 16px;
            margin-top: 10px;
        }

        .score {
            font-size: 20px;
            color: green;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Test de Programmation Java</h1>

        <form id="testForm" action="TestServlet" method="POST">
            <!-- Question 1 -->
            <div class="question">
                <h3>Question 1 : Quelle fonction Java permet de récupérer les données envoyées par un formulaire en méthode GET ?</h3>
                <div class="responses">
                    <label><input type="radio" name="q1" value="GET"> GET</label>
                    <label><input type="radio" name="q1" value="POST"> POST</label>
                    <label><input type="radio" name="q1" value="fetch"> fetch</label>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="question">
                <h3>Question 2 : Quel est le résultat de `System.out.println(2 + 2);` en Java ?</h3>
                <div class="responses">
                    <label><input type="radio" name="q2" value="4"> 4</label>
                    <label><input type="radio" name="q2" value="22"> 22</label>
                    <label><input type="radio" name="q2" value="5"> 5</label>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="question">
                <h3>Question 3 : Quel est le type de la variable `var` après l'exécution de `var = 10;` ?</h3>
                <div class="responses">
                    <label><input type="radio" name="q3" value="String"> String</label>
                    <label><input type="radio" name="q3" value="Integer"> Integer</label>
                    <label><input type="radio" name="q3" value="Boolean"> Boolean</label>
                </div>
            </div>

            <!-- Question 4 -->
            <div class="question">
                <h3>Question 4 : Quelle fonction permet d'ajouter un élément à la fin d'un tableau en Java ?</h3>
                <div class="responses">
                    <label><input type="radio" name="q4" value="add()"> add()</label>
                    <label><input type="radio" name="q4" value="push()"> push()</label>
                    <label><input type="radio" name="q4" value="append()"> append()</label>
                </div>
            </div>

            <!-- Question 5 -->
            <div class="question">
                <h3>Question 5 : Quelle est la méthode utilisée pour afficher un message dans la console en Java ?</h3>
                <div class="responses">
                    <label><input type="radio" name="q5" value="console.log"> console.log</label>
                    <label><input type="radio" name="q5" value="System.out.println"> System.out.println</label>
                    <label><input type="radio" name="q5" value="logMessage()"> logMessage()</label>
                </div>
            </div>

            <!-- Question 6 -->
            <div class="question">
                <h3>Question 6 : Quelle est la syntaxe correcte pour déclarer une classe en Java ?</h3>
                <div class="responses">
                    <label><input type="radio" name="q6" value="class MyClass"> class MyClass</label>
                    <label><input type="radio" name="q6" value="public class MyClass"> public class MyClass</label>
                    <label><input type="radio" name="q6" value="public MyClass class"> public MyClass class</label>
                </div>
            </div>

            <!-- Question 7 -->
            <div class="question">
                <h3>Question 7 : Comment déclarer un tableau d'entiers en Java ?</h3>
                <div class="responses">
                    <label><input type="radio" name="q7" value="int[] arr;"> int[] arr;</label>
                    <label><input type="radio" name="q7" value="int arr[];"> int arr[];</label>
                    <label><input type="radio" name="q7" value="int arr[10];"> int arr[10];</label>
                </div>
            </div>

            <!-- Question 8 -->
            <div class="question">
                <h3>Question 8 : Quelle méthode est utilisée pour obtenir la longueur d'un tableau en Java ?</h3>
                <div class="responses">
                    <label><input type="radio" name="q8" value="length()"> length()</label>
                    <label><input type="radio" name="q8" value="length"> length</label>
                    <label><input type="radio" name="q8" value="size()"> size()</label>
                </div>
            </div>

            <!-- Question 9 -->
            <div class="question">
                <h3>Question 9 : Quel est le résultat de `int i = 5; System.out.println(i++);` ?</h3>
                <div class="responses">
                    <label><input type="radio" name="q9" value="5"> 5</label>
                    <label><input type="radio" name="q9" value="6"> 6</label>
                    <label><input type="radio" name="q9" value="4"> 4</label>
                </div>
            </div>

            <!-- Question 10 -->
            <div class="question">
                <h3>Question 10 : Quelle est la sortie de `String str = "Java"; System.out.println(str.charAt(1));` ?</h3>
                <div class="responses">
                    <label><input type="radio" name="q10" value="a"> a</label>
                    <label><input type="radio" name="q10" value="J"> J</label>
                    <label><input type="radio" name="q10" value="v"> v</label>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="button" onclick="validateForm()">Soumettre</button>
        </form>

        <div class="error" id="errorMessage"></div>
        <div class="score" id="scoreMessage"></div>
    </div>

    <script>
        function validateForm() {
            let form = document.getElementById("testForm");
            let errorElement = document.getElementById("errorMessage");
            let scoreElement = document.getElementById("scoreMessage");
            let score = 0;
            let totalQuestions = 10;

            // Reset error message
            errorElement.textContent = "";

            // Vérification des réponses et calcul du score
            for (let i = 1; i <= totalQuestions; i++) {
                const question = form.querySelector(`input[name="q${i}"]:checked`);
                if (!question) {
                    errorElement.textContent = "Veuillez répondre à toutes les questions avant de soumettre.";
                    return;
                }

                // Score par question (ici nous supposons que les réponses correctes sont déjà définies)
                const correctAnswers = {
                    q1: "GET",
                    q2: "4",
                    q3: "Integer",
                    q4: "add()",
                    q5: "System.out.println",
                    q6: "public class MyClass",
                    q7: "int[] arr;",
                    q8: "length",
                    q9: "5",
                    q10: "J"
                };

                if (question.value === correctAnswers[`q${i}`]) {
                    score += 10;
                }
            }

            // Affichage du score
            scoreElement.textContent = `Votre score est : ${score}/100`;
        }
    </script>

</body>
</html>
