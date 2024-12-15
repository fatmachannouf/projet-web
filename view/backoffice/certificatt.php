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
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Certificats</title>
    <style>
        /* Corps de la page */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: #f3f4f7;
            color: #333;
        }

        /* Section Certificats */
        #certificats {
            padding: 20px;
            margin: 20px auto;
            background: white;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            max-width: 95%;
        }

        /* Titre de la section */
        #certificats h2 {
            text-align: center;
            font-size: 28px;
            color: #2575fc;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1.2px;
        }

        /* Tableau des certificats */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 16px;
        }

        /* En-têtes de colonnes */
        table th {
            background: linear-gradient(90deg, #6a11cb, #2575fc);
            color: white;
            padding: 12px 15px;
            text-align: left;
            text-transform: uppercase;
            font-weight: bold;
        }

        /* Cellules des lignes */
        table td {
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
        }

        /* Lignes impaires */
        table tbody tr:nth-child(odd) {
            background: #f9f9f9;
        }

        /* Lignes paires */
        table tbody tr:nth-child(even) {
            background: #f1f1f1;
        }

        /* Effet au survol des lignes */
        table tbody tr:hover {
            background: rgba(37, 117, 252, 0.1);
            transform: scale(1.01);
            transition: all 0.3s ease;
        }

        /* Liens des actions */
        table a {
            color: #2575fc;
            text-decoration: none;
            font-weight: bold;
            padding: 5px 10px;
            border: 1px solid #2575fc;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        /* Style des liens au survol */
        table a:hover {
            background: #2575fc;
            color: white;
            transform: scale(1.05);
        }

        /* Section vide (si aucun certificat) */
        .empty-message {
            text-align: center;
            font-size: 18px;
            color: #666;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div id="certificats" class="section">
        <h2>Gestion des Certificats</h2>
        <?php if (empty($certificats)): ?>
            <p class="empty-message">Aucun certificat trouvé pour le moment.</p>
        <?php else: ?>
            <table>
                <thead>
                    <tr>
                        <th>ID Certificat</th>
                        <th>Nom Utilisateur</th>
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
                            <td>
                                <a href="?delete_certificat_id=<?= $cert['id_certificat'] ?>" onclick="return confirm('Supprimer ce certificat ?')">Supprimer</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</body>
</html>
