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
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Now UI Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-dashboard.css?v=1.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="orange">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                    CT
                </a>
                <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                    Creative Tim
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="../examples/dashboard.html">
                            <i class="now-ui-icons design_app"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="../examples/certificat.php">
                            <i class="now-ui-icons education_atom"></i>
                            <p>gestion des certificats</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="../examples/score.php">
                            <i class="now-ui-icons location_map-big"></i>
                            <p>gestion des scores</p>
                        </a>
                    </li>
                    <li>
                        <a href="../examples/questionn.php">
                            <i class="now-ui-icons ui-1_bell-53"></i>
                            <p>gestion des questions</p>
                        </a>
                    </li>
                    <li>
                        <a href="../examples/user.html">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="../tables.php">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                            <p>Table List</p>
                        </a>
                    </li>
                    <li>
                        <a href="../examples/typography.html">
                            <i class="now-ui-icons text_caps-small"></i>
                            <p>Typography</p>
                        </a>
                    </li>
                    <li class="active-pro">
                        <a href="../examples/upgrade.html">
                            <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <!-- Section Scores -->
    <div id="scores" class="section">
        <h2>Scores des utilisateurs</h2>

        <!-- Bouton de tri -->
        <div style="text-align: center; margin-bottom: 10px;">
            <a class="btn-sort" href="?order_by=<?= ($order_by === 'ASC') ? 'DESC' : 'ASC' ?>">
                Trier par score (<?= ($order_by === 'ASC') ? 'Décroissant' : 'Croissant' ?>)
            </a>
        </div>

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
            <!-- End Navbar -->
            
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="../assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-dashboard.js?v=1.0.1"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initGoogleMaps();
    });
</script>

</html>
