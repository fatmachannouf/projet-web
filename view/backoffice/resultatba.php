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

// ----- GESTION DES RESULTATS -----
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create_result'])) {
    $userid = $_POST['userid'];
    $idquestion = $_POST['idquestion'];
    $note = $_POST['note'];

    $stmt = $pdo->prepare("INSERT INTO resultat (userid, idquestion, note, date) VALUES (?, ?, ?, NOW())");
    $stmt->execute([$userid, $idquestion, $note]);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_result'])) {
    $idtest = $_POST['idtest'];
    $userid = $_POST['userid'];
    $idquestion = $_POST['idquestion'];
    $note = $_POST['note'];

    $stmt = $pdo->prepare("UPDATE resultat SET userid = ?, idquestion = ?, note = ?, date = NOW() WHERE idtest = ?");
    $stmt->execute([$userid, $idquestion, $note, $idtest]);
}

if (isset($_GET['delete_result_id'])) {
    $delete_id = $_GET['delete_result_id'];
    $stmt = $pdo->prepare("DELETE FROM resultat WHERE idtest = ?");
    $stmt->execute([$delete_id]);
}

$stmt = $pdo->query("SELECT resultat.idtest, resultat.userid, questions.texte AS question_texte, resultat.note, resultat.date 
                     FROM resultat 
                     JOIN questions ON resultat.idquestion = questions.idquestion
                     ORDER BY resultat.date DESC");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

$edit_result = null;
if (isset($_GET['edit_result_id'])) {
    $edit_id = $_GET['edit_result_id'];
    $stmt = $pdo->prepare("SELECT * FROM resultat WHERE idtest = ?");
    $stmt->execute([$edit_id]);
    $edit_result = $stmt->fetch(PDO::FETCH_ASSOC);
}

// ----- GESTION DES QUESTIONS -----
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create_question'])) {
    $texte = $_POST['texte'];
    $type = $_POST['type'];
    $reponsepossible = $_POST['reponsepossible'];
    $reponsecorrecte = $_POST['reponsecorrecte'];

    $stmt = $pdo->prepare("INSERT INTO questions (texte, type, reponsepossible, reponsecorrecte) VALUES (?, ?, ?, ?)");
    $stmt->execute([$texte, $type, $reponsepossible, $reponsecorrecte]);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_question'])) {
    $idquestion = $_POST['idquestion'];
    $texte = $_POST['texte'];
    $type = $_POST['type'];
    $reponsepossible = $_POST['reponsepossible'];
    $reponsecorrecte = $_POST['reponsecorrecte'];

    $stmt = $pdo->prepare("UPDATE questions SET texte = ?, type = ?, reponsepossible = ?, reponsecorrecte = ? WHERE idquestion = ?");
    $stmt->execute([$texte, $type, $reponsepossible, $reponsecorrecte, $idquestion]);
}

if (isset($_GET['delete_question_id'])) {
    $delete_id = $_GET['delete_question_id'];
    $stmt = $pdo->prepare("DELETE FROM questions WHERE idquestion = ?");
    $stmt->execute([$delete_id]);
}

$stmt = $pdo->query("SELECT * FROM questions");
$questions = $stmt->fetchAll(PDO::FETCH_ASSOC);

$edit_question = null;
if (isset($_GET['edit_question_id'])) {
    $edit_id = $_GET['edit_question_id'];
    $stmt = $pdo->prepare("SELECT * FROM questions WHERE idquestion = ?");
    $stmt->execute([$edit_id]);
    $edit_question = $stmt->fetch(PDO::FETCH_ASSOC);
}


$stmt = $pdo->query("SELECT userid, SUM(note) AS total_score, MAX(date) AS last_test_date 
                     FROM resultat 
                     GROUP BY userid
                     ORDER BY last_test_date DESC");
$resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Résultats et Questions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .container {
            width: 80%;
            margin: auto;
        }
        h2 {
            text-align: center;
            color: #2575fc;
        }
        form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            margin-bottom: 20px;
        }
        form input, form select, form button {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        form button {
            grid-column: span 2;
            background: #2575fc;
            color: #fff;
            cursor: pointer;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 40px;
        }
        table th, table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        table th {
            background: #2575fc;
            color: #fff;
        }
        table tr:nth-child(even) {
            background: #f9f9f9;
        }
        table tr:hover {
            background: #f1f1f1;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Gestion des Résultats</h2>

    <form method="POST" action="">
        <input type="hidden" name="idtest" value="<?= $edit_result['idtest'] ?? '' ?>">
        <input type="text" name="userid" placeholder="ID Utilisateur" value="<?= $edit_result['userid'] ?? '' ?>" >
        <select name="idquestion" >
            <option value="">-- Sélectionnez une Question --</option>
            <?php foreach ($questions as $q): ?>
                <option value="<?= $q['idquestion'] ?>"
                    <?= (isset($edit_result['idquestion']) && $edit_result['idquestion'] == $q['idquestion']) ? 'selected' : '' ?>>
                    <?= htmlspecialchars($q['texte']) ?>
                </option>
            <?php endforeach; ?>
        </select>
        <input type="number" step="0.01" name="note" placeholder="Note" value="<?= $edit_result['note'] ?? '' ?>" >
        <?php if ($edit_result): ?>
            <button type="submit" name="update_result">Mettre à jour le Résultat</button>
        <?php else: ?>
            <button type="submit" name="create_result">Ajouter un Résultat</button>
        <?php endif; ?>
    </form>

    <!-- Tableau des résultats -->
    <table>
        <thead>
        <tr>
            <th>ID Test</th>
            <th>ID Utilisateur</th>
            <th>Question</th>
            <th>Note</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($results as $result): ?>
            <tr>
                <td><?= htmlspecialchars($result['idtest']) ?></td>
                <td><?= htmlspecialchars($result['userid']) ?></td>
                <td><?= htmlspecialchars($result['question_texte']) ?></td>
                <td><?= htmlspecialchars($result['note']) ?></td>
                <td><?= htmlspecialchars($result['date']) ?></td>
                <td>
                    <a href="?edit_result_id=<?= $result['idtest'] ?>">Modifier</a> |
                    <a href="?delete_result_id=<?= $result['idtest'] ?>" onclick="return confirm('Supprimer ce résultat ?')">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="container">
    <h2>Gestion des Questions</h2>

   
    <form method="POST" action="">
        <input type="hidden" name="idquestion" value="<?= $edit_question['idquestion'] ?? '' ?>">
        <input type="text" name="texte" placeholder="Texte de la question" value="<?= $edit_question['texte'] ?? '' ?>" >
        <select name="type" >
            <option value="">-- Sélectionnez le type --</option>
            <option value="choix" <?= (isset($edit_question['type']) && $edit_question['type'] == 'choix') ? 'selected' : '' ?>>Choix Multiple</option>
            <option value="text" <?= (isset($edit_question['type']) && $edit_question['type'] == 'text') ? 'selected' : '' ?>>Réponse Texte</option>
        </select>
        <input type="text" name="reponsepossible" placeholder="Réponses possibles" value="<?= $edit_question['reponsepossible'] ?? '' ?>" >
        <input type="text" name="reponsecorrecte" placeholder="Réponse correcte" value="<?= $edit_question['reponsecorrecte'] ?? '' ?>" >
        <?php if ($edit_question): ?>
            <button type="submit" name="update_question">Mettre à jour la Question</button>
        <?php else: ?>
            <button type="submit" name="create_question">Ajouter une Question</button>
        <?php endif; ?>
    </form>

    <!-- Tableau des questions -->
    <table>
        <thead>
        <tr>
            <th>ID Question</th>
            <th>Texte</th>
            <th>Type</th>
            <th>Réponses possibles</th>
            <th>Réponse correcte</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($questions as $question): ?>
            <tr>
                <td><?= htmlspecialchars($question['idquestion']) ?></td>
                <td><?= htmlspecialchars($question['texte']) ?></td>
                <td><?= htmlspecialchars($question['type']) ?></td>
                <td><?= htmlspecialchars($question['reponsepossible']) ?></td>
                <td><?= htmlspecialchars($question['reponsecorrecte']) ?></td>
                <td>
                    <a href="?edit_question_id=<?= $question['idquestion'] ?>">Modifier</a> |
                    <a href="?delete_question_id=<?= $question['idquestion'] ?>" onclick="return confirm('Supprimer cette question ?')">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
<script>
   document.addEventListener("DOMContentLoaded", function() {
    const formResult = document.querySelector("form[action='']");
    const formQuestion = document.querySelector("form[action='']");

   
    function validateUserId(userid) {
        const useridRegex = /^[1-9]\d*$/;
        return useridRegex.test(userid);
    }

    
    function validateNote(note) {
        return note >= 0 && note <= 20;
    }

    
    if (formResult) {
        formResult.addEventListener("submit", function(event) {
            const userid = formResult.querySelector("[name='userid']").value;
            const note = formResult.querySelector("[name='note']").value;

            if (!userid || !validateUserId(userid)) {
                alert("L'ID utilisateur doit être un entier positif.");
                event.preventDefault(); 
                return;
            }

            if (!note || !validateNote(note)) {
                alert("La note doit être un nombre compris entre 0 et 20.");
                event.preventDefault();
                return;
            }
        });
    }
    if (formQuestion) {
        formQuestion.addEventListener("submit", function(event) {
            const texte = formQuestion.querySelector("[name='texte']").value;
            const reponsepossible = formQuestion.querySelector("[name='reponsepossible']").value;
            const reponsecorrecte = formQuestion.querySelector("[name='reponsecorrecte']").value;

            if (!texte || !reponsepossible || !reponsecorrecte) {
                alert("Tous les champs sont obligatoires.");
                event.preventDefault(); 
                return;
            }
        });
    }
});

</script>

</html>
