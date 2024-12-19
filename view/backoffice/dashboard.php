<?php
// Connexion à la base de données
$host = 'localhost';
$dbname = 'integration';
$user = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
// Supprimer un certificat si demandé
if (isset($_GET['delete_certificat_id'])) {
    $id = intval($_GET['delete_certificat_id']);
    $stmt = $pdo->prepare("DELETE FROM certificat WHERE id_certificat = ?");
    $stmt->execute([$id]);
    header("Location: certif.php");
    exit();
}

// Lire tous les certificats
$stmt = $pdo->query("SELECT * FROM certificat ORDER BY date_certificat DESC");
$certificats = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application intégrée</title>
    <link rel="stylesheet" href="styles.css">
    <style>
    /* Style général */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
    color: #333;
}

/* Conteneur principal */
.container {
    display: flex;
    min-height: 100vh;
}

/* Barre latérale */
.sidebar {
    width: 250px;
    background-color: #2c3e50;
    color: #ecf0f1;
    display: flex;
    flex-direction: column;
    padding: 20px;
    box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
}

.sidebar button {
    background-color: #34495e;
    color: #ecf0f1;
    border: none;
    margin: 10px 0;
    padding: 10px 15px;
    text-align: left;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.sidebar button:hover {
    background-color: #1abc9c;
}

.sidebar button:focus {
    outline: none;
    background-color: #16a085;
}

/* Contenu principal */
.content {
    flex: 1;
    padding: 20px;
}

/* Sections */
.section {
    display: none;
}

.section h2 {
    color: #2c3e50;
    margin-bottom: 20px;
}

.section table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    background-color: #fff;
    border: 1px solid #ddd;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.section table th,
.section table td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: left;
}

.section table th {
    background-color: #34495e;
    color: #fff;
}

.section table tr:nth-child(even) {
    background-color: #f2f2f2;
}

.section table tr:hover {
    background-color: #d1ecf1;
}

.section a {
    color: #3498db;
    text-decoration: none;
}

.section a:hover {
    text-decoration: underline;
}

/* Formulaires */
form {
    margin-bottom: 20px;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ddd;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
}

form input[type="text"],
form input[type="number"],
form input[type="email"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
}

form button {
    background-color: #1abc9c;
    color: #fff;
    border: none;
    padding: 10px 15px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

form button:hover {
    background-color: #16a085;
}

/* Messages d'alerte */
.alert {
    padding: 10px 15px;
    background-color: #e74c3c;
    color: #fff;
    margin-bottom: 20px;
    border-radius: 5px;
}

.alert.success {
    background-color: #2ecc71;
}

</style>
</head>
<body>
    <div class="container">
        <!-- Barre latérale -->
        <div class="sidebar">
            <button onclick="showSection('certificats')">Certificats</button>
            <button onclick="showSection('scores')">Scores</button>
            <button onclick="showSection('questions')">Questions</button>
            <button onclick="showSection('Cours')">Cours</button>
            <button onclick="showSection('Chapitre')">Chapitre</button>
        </div>

        <!-- Contenu principal -->
        <div class="content">
            <!-- Section Certificats -->
            <div id="certificats" class="section">
                <h2>Gestion des Certificats</h2>
                <?php if (empty($certificats)): ?>
                    <p>Aucun certificat trouvé.</p>
                <?php else: ?>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Commentaire</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($certificats as $cert): ?>
                                <tr>
                                    <td><?= htmlspecialchars($cert['id_certificat']) ?></td>
                                    <td><?= htmlspecialchars($cert['nom']) ?></td>
                                    <td><?= htmlspecialchars($cert['email']) ?></td>
                                    <td><?= htmlspecialchars($cert['date_certificat']) ?></td>
                                    <td><?= htmlspecialchars($cert['commentaire']) ?></td>

                                    <td><a href="?delete_certificat_id=<?= $cert['id_certificat'] ?>">Supprimer</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endif; ?>
            </div>

            <!-- Section Scores -->
            <div id="scores" class="section">
                <h2>Scores des utilisateurs</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Score total</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($resultat as $row): ?>
                            <tr>
                                <td><?= htmlspecialchars($row['userid']) ?></td>
                                <td><?= htmlspecialchars($row['total_score']) ?></td>
                                <td><?= htmlspecialchars($row['last_test_date']) ?></td>
                                <td><a href="?delete_score_id=<?= $row['userid'] ?>">Supprimer</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <!-- Section Questions -->
            <div id="questions" class="section">
            <h2>Gestion des Questions</h2>

<!-- Formulaire de création ou modification -->
<form method="POST">
    <input type="hidden" name="idquestion" value="<?= isset($edit_questions) ? htmlspecialchars($edit_questions['idquestion']) : '' ?>">
    <input type="text" name="texte" placeholder="Texte de la question" value="<?= isset($edit_questions) ? htmlspecialchars($edit_questions['texte']) : '' ?>" >
    <input type="text" name="type" placeholder="Type (ex: QCM)" value="<?= isset($edit_questions) ? htmlspecialchars($edit_questions['type']) : '' ?>" >
    <input type="text" name="reponsepossible" placeholder="Réponses possibles (séparées par des virgules)" value="<?= isset($edit_questions) ? htmlspecialchars($edit_questions['reponsepossible']) : '' ?>">
    <input type="text" name="reponsecorrecte" placeholder="Réponse correcte" value="<?= isset($edit_questions) ? htmlspecialchars($edit_questions['reponsecorrecte']) : '' ?>" >
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
                <td>
                    <a href="?edit_id=<?= $q['idquestion'] ?>">Modifier</a>
                    <a href="?delete_id=<?= $q['idquestion'] ?>">Supprimer</a>
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
            document.querySelectorAll('.section').forEach(sec => sec.style.display = 'none');
            document.getElementById(section).style.display = 'block';
        }
        showSection('certificats');
    </script>

<div id="Cours" class="section">
            <h2>Gestion des Cours</h2>

<!-- Formulaire de création ou modification -->
<form method="POST">
    <input type="hidden" name="NomC" value="<?= isset($NomC) ? htmlspecialchars($NomC['NomC']) : '' ?>">
    <input type="text" name="texte" placeholder="Nom de Cours" value="<?= isset($NomC) ? htmlspecialchars($NomC['texte']) : '' ?>" >
    <?php if (isset($NomC)): ?>
        <button type="submit" name="Read">Lire</button>
</form>

<!-- Liste des questions -->
<table>
    <thead>
        <tr>
            <th>Nom_Cours</th>
            <th>Image</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($NomC as $NC ): ?>
            <tr>
                <td><?= htmlspecialchars($NC['NomC']) ?></td>
                <td><?= htmlspecialchars($NC['ImageC']) ?></td>
                <td><?= htmlspecialchars($NC['DescriptionC']) ?></td>
                <td>
                    <a href="?edit_NomC=<?= $NC['NomC'] ?>">Modifier</a>
                    <a href="?delete_NomC=<?= $NC['NomC'] ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
        </div>
    </div>

    <div id="Chapitre" class="section">
            <h2>Gestion des Chapitres</h2>

<!-- Formulaire de création ou modification -->
<form method="POST">
    <input type="hidden" name="NomCh" value="<?= isset($NomCh) ? htmlspecialchars($NomCh['NomCh']) : '' ?>">
    <input type="text" name="texte" placeholder="Nom de Chapitre" value="<?= isset($NomCh) ? htmlspecialchars($NomCh['texte']) : '' ?>" >
    <?php if (isset($NomCh)): ?>
        <button type="submit" name="Read">Lire</button>
</form>

<!-- Liste des questions -->
<table>
    <thead>
        <tr>
            <th>Nom_Chapitre</th>
            <th>Numero_Chapitre</th>
            <th>Contenue</th>
            <th>NomC</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($NomCH as $NCh ): ?>
            <tr>
                <td><?= htmlspecialchars($NCh['NomCh']) ?></td>
                <td><?= htmlspecialchars($NCh['NumeroCh']) ?></td>
                <td><?= htmlspecialchars($NCh['Contenue']) ?></td>
                <td><?= htmlspecialchars($NCh['NomC']) ?></td>
                <td>
                    <a href="?edit_NomCh=<?= $NCh['NomC'] ?>">Modifier</a>
                    <a href="?delete_NomCh=<?= $NCh['NomC'] ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
        </div>
    </div>
</body>
</html>