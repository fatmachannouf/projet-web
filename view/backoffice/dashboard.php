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

// Supprimer un score
if (isset($_GET['delete_score_id'])) {
    $delete_score_id = $_GET['delete_score_id'];
    $stmt = $pdo->prepare("DELETE FROM resultat WHERE userid = ?");
    $stmt->execute([$delete_score_id]);
}

// Lire le paramètre de tri
$order_by = isset($_GET['order_by']) ? $_GET['order_by'] : 'ASC';  // Par défaut, croissant (ASC)

// Modifier la requête en fonction du tri
$order_clause = ($order_by === 'DESC') ? 'DESC' : 'ASC';

// Récupérer les résultats des tests pour chaque utilisateur, triés par score
$stmt = $pdo->query("
    SELECT userid, SUM(note) AS total_score, MAX(date) AS last_test_date 
    FROM resultat 
    GROUP BY userid
    ORDER BY total_score $order_clause
");
$resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
    <title>CRUD Question et Scores</title>
    <style>
        /* Corps de la page */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
        }

        /* Conteneur principal */
        .container {
            display: flex;
            flex: 1;
        }

        /* Section de gauche (menu) */
        .sidebar {
            width: 200px;
            background: #ffffff;
            color: #333;
            padding: 20px;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .sidebar button {
            padding: 10px;
            margin-bottom: 10px;
            width: 100%;
            background: #2575fc;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .sidebar button:hover {
            background: #6a11cb;
        }

        /* Section principale (contenu) */
        .content {
            flex: 1;
            padding: 20px;
            background: #ffffff;
            color: #333;
            overflow-y: auto;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Sections (questions et scores) */
        .section {
            display: none;
            margin-top: 20px;
        }

        /* Titre */
        .CRUD h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #2575fc;
        }

        /* Formulaire */
        form {
            display: grid;
            grid-template-columns: 1fr;
            gap: 15px;
        }

        form input, form button {
            padding: 10px;
            font-size: 16px;
            border-radius: 8px;
            border: 1px solid #ddd;
            transition: all 0.3s ease;
        }

        form input:focus {
            outline: none;
            border-color: #2575fc;
            box-shadow: 0 0 5px rgba(37, 117, 252, 0.7);
        }

        form button {
            background: linear-gradient(90deg, #6a11cb, #2575fc);
            color: #fff;
            border: none;
            cursor: pointer;
        }

        form button:hover {
            background: linear-gradient(90deg, #2575fc, #6a11cb);
            transform: scale(1.05);
        }

        /* Tableau */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        table th {
            background: #6a11cb;
            color: #fff;
            font-weight: bold;
        }

        table tbody tr:nth-child(odd) {
            background: #f9f9f9;
        }

        table tbody tr:nth-child(even) {
            background: #f1f1f1;
        }

        table tbody tr:hover {
            background: #e8f0fe;
        }

        table a {
            color: #2575fc;
            text-decoration: none;
            font-weight: bold;
        }

        table a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar avec les boutons -->
        <div class="sidebar">
            <button onclick="showSection('questions')">Gestion des questions</button>
            <button onclick="showSection('scores')">Gestion des scores</button>
        </div>

        <!-- Contenu principal avec les sections -->
        <div class="content">
            <!-- Section pour les questions -->
            <div id="questions" class="section">
                <h2>CRUD Question</h2>
                <!-- Formulaire d'ajout ou de modification -->
                <form method="POST" action="" id="questionForm">
    <input type="hidden" name="idquestion" value="<?= $edit_questions['idquestion'] ?? '' ?>">
    <input type="text" name="texte" placeholder="Texte" value="<?= htmlspecialchars($edit_questions['texte'] ?? '') ?>" >
    <input type="text" name="type" placeholder="Type" value="<?= htmlspecialchars($edit_questions['type'] ?? '') ?>" >
    <input type="text" name="reponsepossible" placeholder="Réponses possibles" value="<?= htmlspecialchars($edit_questions['reponsepossible'] ?? '') ?>" >
    <input type="text" name="reponsecorrecte" placeholder="Réponse correcte" value="<?= htmlspecialchars($edit_questions['reponsecorrecte'] ?? '') ?>" >
    <?php if ($edit_questions): ?>
        <button type="submit" name="update">Mettre à jour</button>
    <?php else: ?>
        <button type="submit" name="create">Créer</button>
    <?php endif; ?>
</form>


                <!-- Tableau des questions -->
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
                            <td>
                                <a href="?edit_id=<?= $q['idquestion'] ?>">Modifier</a> |
                                <a href="?delete_id=<?= $q['idquestion'] ?>" onclick="return confirm('Supprimer ?')">Supprimer</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <!-- Section pour les scores -->
            <div id="scores" class="section">
                <h2>Scores des utilisateurs</h2>
                <!-- Bouton de tri -->
                <form method="GET" action="">
                    <button type="submit" name="order_by" value="<?= $order_by === 'ASC' ? 'DESC' : 'ASC' ?>">
                        Trier par score (<?= $order_by === 'ASC' ? 'croissant' : 'décroissant' ?>)
                    </button>
                </form>

                <table>
                    <thead>
                    <tr>
                        <th>ID Utilisateur</th>
                        <th>Score total</th>
                        <th>Date du dernier test</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($resultat as $row): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['userid']) ?></td>
                            <td><?= htmlspecialchars($row['total_score']) ?></td>
                            <td><?= htmlspecialchars($row['last_test_date']) ?></td>
                            <td>
                                <a href="?delete_score_id=<?= $row['userid'] ?>" onclick="return confirm('Supprimer ce score ?')">Supprimer</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        function showSection(section) {
            const sections = document.querySelectorAll('.section');
            sections.forEach(function (sec) {
                sec.style.display = 'none';
            });
            document.getElementById(section).style.display = 'block';
        }

        // Afficher par défaut la section "questions"
        showSection('questions');
        
    // Fonction pour valider le formulaire
    document.getElementById("questionForm").addEventListener("submit", function(event) {
        // Récupérer tous les champs du formulaire
        const texte = document.querySelector('input[name="texte"]').value;
        const type = document.querySelector('input[name="type"]').value;
        const reponsepossible = document.querySelector('input[name="reponsepossible"]').value;
        const reponsecorrecte = document.querySelector('input[name="reponsecorrecte"]').value;

        // Vérifier si tous les champs sont remplis
        if (texte === '' || type === '' || reponsepossible === '' || reponsecorrecte === '') {
            // Si un champ est vide, empêcher la soumission du formulaire et afficher une alerte
            event.preventDefault();
            alert("Tous les champs doivent être remplis !");
        } else {
            // Si tous les champs sont remplis, afficher un message de confirmation
            alert("Question créée avec succès !");
        }
    });


    </script>
</body>
</html>
