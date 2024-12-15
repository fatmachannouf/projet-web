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
                    <li class="active">
                        <a href="../examples/certificat.php">
                            <i class="now-ui-icons education_atom"></i>
                            <p>gestion des certificat</p>
                        </a>
                    </li>
                    <li>
                        <a href="../examples/score.php">
                            <i class="now-ui-icons location_map-big"></i>
                            <p>gestion des scores</p>
                        </a>
                    </li>
                    <li>
                        <a href="../examples/questionn.php">
                            <i class="now-ui-icons ui-1_bell-53"></i>
                            <p>gestion des question</p>
                        </a>
                    </li>
                    <li>
                        <a href="../examples/user.html">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="../examples/tables.html">
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
            
        </div>
    </div>
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

</html>
