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

// Supprimer un certificat si demandé
if (isset($_GET['delete_certificat_id'])) {
    $id = intval($_GET['delete_certificat_id']);
    $stmt = $pdo->prepare("DELETE FROM certificat WHERE id_certificat = ?");
    $stmt->execute([$id]);
    header("Location: certif.php");
    exit();
}

// Gérer la recherche
$search_query = '';
if (isset($_GET['search'])) {
    $search_query = $_GET['search'];
}

// Lire tous les certificats ou appliquer le filtre de recherche
if (!empty($search_query)) {
    $stmt = $pdo->prepare("SELECT * FROM certificat WHERE nom LIKE :search ORDER BY date_certificat DESC");
    $stmt->execute([':search' => '%' . $search_query . '%']);
} else {
    $stmt = $pdo->query("SELECT * FROM certificat ORDER BY date_certificat DESC");
}

$certificats = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificat des utilisateurs</title>
    <style>
        /* Les styles restent inchangés */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: #333;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            color: #fff;
            margin-top: 20px;
        }

        .section {
            max-width: 800px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: 40px auto;
            padding: 20px;
        }

        form {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        input[type="text"] {
            flex: 1;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            margin-left: 10px;
            padding: 10px 15px;
            background: #2575fc;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #6a11cb;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background: #2575fc;
            color: #fff;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background: #f9f9f9;
        }

        tr:hover {
            background: #f1f1f1;
        }

        a {
            color: #2575fc;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #6a11cb;
        }
    </style>
</head>
<body>
    <!-- Section Certificats -->
    <div id="certificats" class="section">
        <h2>Gestion des Certificats</h2>
        <form method="get">
            <input type="text" name="search" placeholder="Rechercher par nom" value="<?= htmlspecialchars($search_query) ?>">
            <button type="submit">Rechercher</button>
        </form>
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
</body>
</html>
