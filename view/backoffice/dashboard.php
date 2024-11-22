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
    $ID_installation = $_POST['ID_installation'];
    $type_systeme = $_POST['type_systeme'];
    $methode = $_POST['methode'];
    $gestion_eau = $_POST['gestion_eau'];

    $stmt = $pdo->prepare("INSERT INTO question (ID_installation, type_systeme, methode, gestion_eau) VALUES (?, ?, ?, ?)");
    $stmt->execute([$ID_installation, $type_systeme, $methode, $gestion_eau]);
}

// Supprimer une question
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $stmt = $pdo->prepare("DELETE FROM question WHERE id = ?");
    $stmt->execute([$delete_id]);
}

// Lire toutes les questions
$stmt = $pdo->query("SELECT * FROM question");
$questions = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Agriculture</title>
    <style>
        /* Vos styles CSS ici */
        body { font-family: Arial, sans-serif; background-color: #154f09; color: #fff; }
        .CRUD { margin: 20px auto; max-width: 800px; padding: 20px; background: #fff; color: #000; border-radius: 8px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        table th, table td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        table th { background: #f4f4f4; }
    </style>
</head>
<body>
<div class="CRUD">
    <h2>CRUD Agriculture</h2>
    <form method="POST" action="">
        <input type="text" name="ID_installation" placeholder="ID Installation" required>
        <input type="text" name="type_systeme" placeholder="Type Système" required>
        <input type="text" name="methode" placeholder="Méthode" required>
        <input type="text" name="gestion_eau" placeholder="Gestion Eau" required>
        <button type="submit" name="create">Créer</button>
    </form>

    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>ID Installation</th>
            <th>Type Système</th>
            <th>Méthode</th>
            <th>Gestion Eau</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($questions as $question): ?>
            <tr>
                <td><?= $question['id'] ?></td>
                <td><?= htmlspecialchars($question['ID_installation']) ?></td>
                <td><?= htmlspecialchars($question['type_systeme']) ?></td>
                <td><?= htmlspecialchars($question['methode']) ?></td>
                <td><?= htmlspecialchars($question['gestion_eau']) ?></td>
                <td>
                    <a href="?delete_id=<?= $question['id'] ?>" onclick="return confirm('Supprimer ?')">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
