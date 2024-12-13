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

// Lire tous les certificats
$stmt = $pdo->query("SELECT * FROM certificat ORDER BY date_certificat DESC");
$certificats = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>certificat des utilisateurs</title>
    <style>
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

        .section p {
            font-size: 16px;
            color: #666;
        }

        .btn {
            display: inline-block;
            padding: 10px 15px;
            background: #2575fc;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-transform: uppercase;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background: #6a11cb;
        }

        @media (max-width: 600px) {
            table, th, td {
                display: block;
                width: 100%;
            }

            th {
                text-align: center;
            }

            td {
                text-align: center;
                border-bottom: none;
            }

            td:before {
                content: attr(data-label);
                font-weight: bold;
                display: block;
                margin-bottom: 5px;
            }
        }
    </style>


</head>
<body>
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
            <script>
        function showSection(section) {
            document.querySelectorAll('.section').forEach(sec => sec.style.display = 'none');
            document.getElementById(section).style.display = 'block';
        }
        showSection('certificats');
    </script>
    
</body>
</html>