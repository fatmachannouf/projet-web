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
                    <li>
                        <a href="../examples/score.php">
                            <i class="now-ui-icons location_map-big"></i>
                            <p>gestions des scores</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="../examples/questionn.php">
                            <i class="now-ui-icons ui-1_bell-53"></i>
                            <p>gestions des questions</p>
                        </a>
                    </li>
                    <li>
                        <a href="../examples/user.html">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="../examples/tables.php">
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
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form>
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                                </span>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <i class="now-ui-icons media-2_sound-wave"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Stats</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="now-ui-icons location_world"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Some Actions</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <i class="now-ui-icons users_single-02"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Account</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            
           <br><br><br><br> <div class="content">
                <div class="row">
                    <div class="col-md-6">
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
                    
                    
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul>
                            <li>
                                <a href="https://www.creative-tim.com">
                                    Creative Tim
                                </a>
                            </li>
                            <li>
                                <a href="http://presentation.creative-tim.com">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="http://blog.creative-tim.com">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, Designed by
                        <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
                        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
                    </div>
                </div>
            </footer>
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
