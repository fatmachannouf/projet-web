<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test de Programmation C++</title>
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

        .result {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
            color: green;
        }

        .error {
            color: red;
            font-size: 16px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Test de Programmation C++</h1>

        <form id="testForm">
            <!-- Question 1 -->
            <div class="question">
                <h3>Question 1 : Quelle fonction C++ permet de récupérer les données envoyées par un formulaire en méthode GET ?</h3>
                <div class="responses">
                    <label><input type="radio" name="q1" value="cin"> cin</label>
                    <label><input type="radio" name="q1" value="GET"> GET</label>
                    <label><input type="radio" name="q1" value="POST"> POST</label>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="question">
                <h3>Question 2 : Quel est le résultat de `std::cout << 2 + 2;` en C++ ?</h3>
                <div class="responses">
                    <label><input type="radio" name="q2" value="22"> 22</label>
                    <label><input type="radio" name="q2" value="4"> 4</label>
                    <label><input type="radio" name="q2" value="5"> 5</label>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="question">
                <h3>Question 3 : Quel est le type de la variable `var` après l'exécution de `int var = 10;` ?</h3>
                <div class="responses">
                    <label><input type="radio" name="q3" value="int"> int</label>
                    <label><input type="radio" name="q3" value="String"> String</label>
                    <label><input type="radio" name="q3" value="Integer"> Integer</label>
                </div>
            </div>

            <!-- Question 4 -->
            <div class="question">
                <h3>Question 4 : Quelle fonction permet d'ajouter un élément à la fin d'un tableau en C++ ?</h3>
                <div class="responses">
                    <label><input type="radio" name="q4" value="push_back()"> push_back()</label>
                    <label><input type="radio" name="q4" value="append()"> append()</label>
                    <label><input type="radio" name="q4" value="add()"> add()</label>
                </div>
            </div>

            <!-- Question 5 -->
            <div class="question">
                <h3>Question 5 : Quelle est la méthode utilisée pour afficher un message dans la console en C++ ?</h3>
                <div class="responses">
                    <label><input type="radio" name="q5" value="std::cout"> std::cout</label>
                    <label><input type="radio" name="q5" value="console.log"> console.log</label>
                    <label><input type="radio" name="q5" value="logMessage()"> logMessage()</label>
                </div>
            </div>

            <!-- Question 6 -->
            <div class="question">
                <h3>Question 6 : Quel type de données est retourné par `sizeof` en C++ ?</h3>
                <div class="responses">
                    <label><input type="radio" name="q6" value="int"> int</label>
                    <label><input type="radio" name="q6" value="size_t"> size_t</label>
                    <label><input type="radio" name="q6" value="float"> float</label>
                </div>
            </div>

            <!-- Question 7 -->
            <div class="question">
                <h3>Question 7 : Comment déclarer un tableau de 10 entiers en C++ ?</h3>
                <div class="responses">
                    <label><input type="radio" name="q7" value="int[10]"> int[10]</label>
                    <label><input type="radio" name="q7" value="int arr[10]"> int arr[10]</label>
                    <label><input type="radio" name="q7" value="int* arr = new int[10];"> int* arr = new int[10];</label>
                </div>
            </div>

            <!-- Question 8 -->
            <div class="question">
                <h3>Question 8 : Quelle est la syntaxe correcte pour déclarer un pointeur en C++ ?</h3>
                <div class="responses">
                    <label><input type="radio" name="q8" value="int* ptr;"> int* ptr;</label>
                    <label><input type="radio" name="q8" value="ptr int*;"> ptr int*;</label>
                    <label><input type="radio" name="q8" value="ptr int* = NULL;"> ptr int* = NULL;</label>
                </div>
            </div>

            <!-- Question 9 -->
            <div class="question">
                <h3>Question 9 : Quelle est la différence entre `++i` et `i++` en C++ ?</h3>
                <div class="responses">
                    <label><input type="radio" name="q9" value="Aucun différence"> Aucun différence</label>
                    <label><input type="radio" name="q9" value="L'un affecte avant l'autre"> L'un affecte avant l'autre</label>
                    <label><input type="radio" name="q9" value="Le deuxième est plus rapide"> Le deuxième est plus rapide</label>
                </div>
            </div>

            <!-- Question 10 -->
            <div class="question">
                <h3>Question 10 : Quel est le résultat de `std::string str = "abc"; std::cout << str[1];` ?</h3>
                <div class="responses">
                    <label><input type="radio" name="q10" value="a"> a</label>
                    <label><input type="radio" name="q10" value="b"> b</label>
                    <label><input type="radio" name="q10" value="c"> c</label>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="button" onclick="calculateScore()">Soumettre</button>
        </form>

        <div class="result" id="result"></div>
        <div class="error" id="errorMessage"></div>
    </div>

    <script>
        function calculateScore() {
            const correctAnswers = {
                q1: "GET",
                q2: "4",
                q3: "int",
                q4: "push_back()",
                q5: "std::cout",
                q6: "size_t",
                q7: "int arr[10]",
                q8: "int* ptr;",
                q9: "L'un affecte avant l'autre",
                q10: "b"
            };

            let score = 0;
            let errorMessage = "";
            const form = document.getElementById("testForm");
            const errorElement = document.getElementById("errorMessage");
            
            // Vérification de toutes les réponses
            for (let question in correctAnswers) {
                const answer = form.querySelector(`input[name="${question}"]:checked`);
                if (!answer) {
                    errorMessage = "Veuillez répondre à toutes les questions avant de soumettre.";
                    break;
                }
                if (answer.value === correctAnswers[question]) {
                    score++;
                }
            }

            if (errorMessage) {
                errorElement.textContent = errorMessage;
                document.getElementById("result").textContent = "";
            } else {
                document.getElementById("result").textContent = `Votre score est ${score} sur 10.`;
                errorElement.textContent = "";
            }
        }
    </script>

</body>
</html>
