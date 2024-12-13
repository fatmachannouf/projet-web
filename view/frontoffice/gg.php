<?php
// Connexion à la base de données
$host = 'localhost';
$dbname = '9arini';
$user = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

$query = $pdo->query("SELECT idquestion, texte, type, reponsepossible, reponsecorrecte FROM questions");
$questions = $query->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_test'])) {
    $userid = 'user123'; // Utilisateur à récupérer depuis la session ou autre méthode
    $resultat = [];
    $score = 0;
    $totalQuestions = count($questions);
    $incorrectAnswers = []; // Array pour stocker les questions incorrectes

    foreach ($_POST as $question_key => $user_answer) {
        if (strpos($question_key, 'q') === 0) {
            // Extraire l'ID de la question
            $question_id = substr($question_key, 1);
            
            $stmt = $pdo->prepare("SELECT reponsecorrecte FROM questions WHERE idquestion = ?");
            $stmt->execute([$question_id]);
            $correct_answer = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($correct_answer) {
                $note = ($user_answer === $correct_answer['reponsecorrecte']) ? 1 : 0;
                $score += $note;

                if ($note === 0) {
                    // Ajouter la question incorrecte à la liste
                    $incorrectAnswers[] = $question_id;
                }

                $resultat[] = [
                    'userid' => $userid,
                    'idquestion' => $question_id,
                    'note' => $note
                ];
            }
        }
    }

    // Insertion des résultats dans la base de données
    $stmt = $pdo->prepare("INSERT INTO resultat (userid, idquestion, note) VALUES (?, ?, ?)");
    foreach ($resultat as $result) {
        $stmt->execute([$result['userid'], $result['idquestion'], $result['note']]);
    }

    // Calcul du pourcentage et message de certificat
    $percentage = ($score / $totalQuestions) * 100;
    $show_certificate = $percentage >= 80;

    $resultMessage = "Votre score : $score / $totalQuestions ($percentage%)";
    $certificateMessage = $show_certificate
        ? '🎉 Félicitations ! Vous avez réussi l\'évaluation avec succès.'
        : 'Désolé, vous n\'avez pas atteint le score requis.';

    // Passer les réponses incorrectes à la vue pour les marquer
    $incorrectAnswersJson = json_encode($incorrectAnswers);
} else {
    $resultMessage = '';
    $certificateMessage = '';
    $show_certificate = false;
    $incorrectAnswersJson = '[]'; // Par défaut, aucune question incorrecte
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Évaluation PHP</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f4f6f9, #d9e2f3);
            margin: 0;
            padding: 0;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 800px;
            background: #ffffff;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease-in-out;
            overflow: hidden;
        }

        h1 {
            text-align: center;
            font-size: 2.2rem;
            font-weight: 600;
            color: #4C6EF5;
            margin-bottom: 30px;
            text-shadow: 1px 2px 5px rgba(0, 0, 0, 0.2);
        }

        .questions {
            margin-bottom: 25px;
            background: #f8f9fd;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .questions:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        h3 {
            font-size: 1.2rem;
            color: #333;
            margin-bottom: 15px;
            font-weight: 500;
            line-height: 1.4;
        }

        .responses label {
            display: block;
            margin-bottom: 15px;
            cursor: pointer;
            font-size: 1rem;
            padding: 10px 15px;
            background: #e9ecef;
            border-radius: 10px;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .responses label:hover {
            background-color: #d1e7ff;
            box-shadow: 0 4px 15px rgba(0, 123, 255, 0.15);
        }

        input[type="radio"] {
            margin-right: 10px;
            accent-color: #4C6EF5;
        }

        button {
            display: block;
            width: 100%;
            padding: 14px;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: #fff;
            font-size: 1.1rem;
            font-weight: bold;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
            transition: background 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
        }

        button:hover {
            background: linear-gradient(to right, #2575fc, #6a11cb);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            transform: translateY(-3px);
        }

        #resultat {
            margin-top: 30px;
            text-align: center;
            font-size: 1.3rem;
            font-weight: 600;
            color: #5052cc;
        }

        #certificate {
            margin-top: 30px;
            text-align: center;
            padding: 25px;
            background: #eaffea;
            border: 2px solid #28a745;
            border-radius: 15px;
            animation: slideIn 1s ease;
        }

        #certificate h2 {
            font-size: 1.6rem;
            color: #28a745;
            margin-bottom: 15px;
            font-weight: 700;
        }

        #certificate p {
            font-size: 1.2rem;
            color: #333;
            margin-bottom: 20px;
        }

        #certificate a {
            display: inline-block;
            padding: 12px 25px;
            background: #28a745;
            color: #fff;
            font-weight: 600;
            text-decoration: none;
            border-radius: 25px;
            transition: background 0.3s ease, transform 0.2s ease;
        }

        #certificate a:hover {
            background: #218838;
            transform: scale(1.05);
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.95);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes slideIn {
            from {
                transform: translateY(30px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
    <script>
        // Cette fonction sera appelée après le rendu de la page
        window.onload = function() {
            const incorrectAnswers = <?php echo $incorrectAnswersJson; ?>;

            // Vérifier chaque question
            incorrectAnswers.forEach(function(questionId) {
                const questionElement = document.querySelector(`[data-question-id="${questionId}"]`);
                if (questionElement) {
                    questionElement.style.border = '2px solid red'; // Appliquer le rouge
                }
            });
        };
    </script>
</head>
<body>
    <div class="container">
        <h1>Test de Programmation</h1>
        <form method="POST" action="">
            <?php foreach ($questions as $index => $question): ?>
                <div class="questions" data-question-id="<?= $question['idquestion'] ?>">
                    <h3>Question <?= $index + 1 ?> : <?= htmlspecialchars($question['texte']) ?></h3>
                    <div class="responses">
                        <?php
                        $reponses = explode(',', $question['reponsepossible']);
                        foreach ($reponses as $reponse): ?>
                            <label>
                                <input type="radio" name="q<?= $question['idquestion'] ?>" value="<?= htmlspecialchars($reponse) ?>">
                                <?= htmlspecialchars($reponse) ?>
                            </label>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>

            <button type="submit" name="submit_test">Soumettre le Test</button>
        </form>

        <div id="resultat"><?= $resultMessage ?></div>

        <?php if ($show_certificate): ?>
            <div id="certificate">
                <h2>Félicitations !</h2>
                <p>Vous avez obtenu un score de <?= $score ?>/<?= $totalQuestions ?>. Vous avez droit à un certificat.</p>
                <a href="certificat.php">Télécharger votre certificat</a>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
