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
// Ajouter une nouvelle question
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create'])) {
    $idquestion = $_POST['idquestion'];
    $texte = $_POST['texte'];
    $type = $_POST['type'];
    $reponsepossible = $_POST['reponsepossible'];
    $reponsecorrecte = $_POST['reponsecorrecte'];

    $stmt = $pdo->prepare("INSERT INTO questions (idquestion, texte, type, reponsepossible, reponsecorrecte) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$idquestion, $texte, $type, $reponsepossible, $reponsecorrecte]);
}

// Supprimer une question
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $stmt = $pdo->prepare("DELETE FROM questions WHERE idquestion = ?");
    $stmt->execute([$delete_id]);
}

// Modifier une question
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    $idquestion = $_POST['idquestion'];
    $texte = $_POST['texte'];
    $type = $_POST['type'];
    $reponsepossible = $_POST['reponsepossible'];
    $reponsecorrecte = $_POST['reponsecorrecte'];

    $stmt = $pdo->prepare("UPDATE questions SET texte = ?, type = ?, reponsepossible = ?, reponsecorrecte = ? WHERE idquestion = ?");
    $stmt->execute([$texte, $type, $reponsepossible, $reponsecorrecte, $idquestion]);
}

// Lire toutes les questions
$stmt = $pdo->query("SELECT * FROM questions");
$questions = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Récupérer une question pour modification
$edit_questions = null;
if (isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];
    $stmt = $pdo->prepare("SELECT * FROM questions WHERE idquestion = ?");
    $stmt->execute([$edit_id]);
    $edit_questions = $stmt->fetch(PDO::FETCH_ASSOC);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Questions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #74ebd5, #9face6);
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
            color: #4A4A4A;
            margin-bottom: 20px;
        }

        form {
            display: grid;
            grid-gap: 15px;
            margin-bottom: 30px;
        }

        input, button {
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ddd;
            transition: 0.3s;
        }

        input:focus {
            outline: none;
            border-color: #6a11cb;
            box-shadow: 0 0 5px rgba(106, 17, 203, 0.7);
        }

        button {
            background: #6a11cb;
            color: white;
            border: none;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #2575fc;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #6a11cb;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        a {
            text-decoration: none;
            color: #2575fc;
            font-weight: bold;
        }

        a:hover {
            color: #6a11cb;
        }

        .actions a {
            margin: 0 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Gestion des Questions</h2>

        <!-- Formulaire de création ou modification -->
        <form method="POST">
            <input type="hidden" name="idquestion" value="<?= isset($edit_questions) ? htmlspecialchars($edit_questions['idquestion']) : '' ?>">
            <input type="text" name="texte" placeholder="Texte de la question" value="<?= isset($edit_questions) ? htmlspecialchars($edit_questions['texte']) : '' ?>" required>
            <input type="text" name="type" placeholder="Type (ex: QCM)" value="<?= isset($edit_questions) ? htmlspecialchars($edit_questions['type']) : '' ?>" required>
            <input type="text" name="reponsepossible" placeholder="Réponses possibles (séparées par des virgules)" value="<?= isset($edit_questions) ? htmlspecialchars($edit_questions['reponsepossible']) : '' ?>" required>
            <input type="text" name="reponsecorrecte" placeholder="Réponse correcte" value="<?= isset($edit_questions) ? htmlspecialchars($edit_questions['reponsecorrecte']) : '' ?>" required>
            <?php if (isset($edit_questions)): ?>
                <button type="submit" name="update">Modifier</button>
            <?php else: ?>
                <button type="submit" name="create">Créer</button>
            <?php endif; ?>
        </form>

        <!-- Liste des questions -->
        <table>
            <thead>
                <tr>
                    <th>Texte</th>
                    <th>Type</th>
                    <th>Réponses possibles</th>
                    <th>Réponse correcte</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($questions as $q): ?>
                    <tr>
                        <td><?= htmlspecialchars($q['texte']) ?></td>
                        <td><?= htmlspecialchars($q['type']) ?></td>
                        <td><?= htmlspecialchars($q['reponsepossible']) ?></td>
                        <td><?= htmlspecialchars($q['reponsecorrecte']) ?></td>
                        <td class="actions">
                            <a href="?edit_id=<?= $q['idquestion'] ?>">Modifier</a>
                            <a href="?delete_id=<?= $q['idquestion'] ?>">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
