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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scores des utilisateurs</title>
    <style>
        /* Styles de base */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #1e3c72, #2a5298);
            color: #f4f4f9;
        }

        h2 {
            text-align: center;
            padding: 20px 0;
            margin: 0;
            color: #f4f4f9;
            text-transform: uppercase;
            font-size: 24px;
        }

        .section {
            max-width: 900px;
            margin: 30px auto;
            background: #ffffff;
            color: #333;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        thead {
            background: #1e3c72;
            color: #fff;
        }

        th, td {
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }

        th {
            text-transform: uppercase;
            font-size: 14px;
        }

        tr:hover {
            background-color: #f4f4f9;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody tr:nth-child(odd) {
            background-color: #fff;
        }

        a {
            text-decoration: none;
            padding: 8px 12px;
            background: #e74c3c;
            color: #fff;
            border-radius: 4px;
            transition: background 0.3s ease;
        }

        a:hover {
            background: #c0392b;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            th, td {
                font-size: 12px;
                padding: 10px;
            }

            h2 {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>
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
</body>
</html>
