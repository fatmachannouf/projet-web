<?php
include('C:\xampp\htdocs\projet\controller\CategorieController.php');
include('C:\xampp\htdocs\projet\controller\OffreController.php');

$categorieCtrl = new CategorieController();
$offreCtrl = new OffreController();

$categories = $categorieCtrl->listCategories();
$offres = [];

if (isset($_POST['id_categorie'])) {
    $id_categorie = $_POST['id_categorie'];
    $offres = $offreCtrl->listOffresByCategorie($id_categorie);
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
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text logo-mini">CT</a>
                <a href="http://www.creative-tim.com" class="simple-text logo-normal">Creative Tim</a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="../examples/dashboard.php">
                            <i class="now-ui-icons design_app"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="CategorieList.php">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                            <p>Categorie List</p>
                        </a>
                    </li>
                    <li>
                        <a href="AddCategorie.php">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                            <p>Add Categorie</p>
                        </a>
                    </li>
                    <li>
                        <a href="OffreList.php">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                            <p>Offre List</p>
                        </a>
                    </li>
                    <li>
                        <a href="AddOffre.php">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                            <p>Add Offre</p>
                        </a>
                    </li>
                    <!-- Other sidebar items -->
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute bg-primary fixed-top">
                <!-- <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="#">Table List</a>
                    </div>
                </div> -->
            </nav>

            <!-- Table content -->
            <div class="content mt-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Ajout d'une nouvelle catégorie</h4>
                                </div>
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-md-8">
                                                <form id="myForm" name="myForm" action="uploadCategorie.php" method="POST" enctype="multipart/form-data">
                                                    <label for="type">Type de catégorie:</label><br>
                                                    <input class="form-control form-control-user" type="text" id="type" name="type" required>
                                                    <span id="type_error"></span><br>

                                                    <label for="image">Image de catégorie:</label><br>
                                                    <input class="form-control form-control-user" type="file" id="image" name="image" accept="image/*" required>
                                                    <span id="image_error"></span><br>

                                                    <label for="description">Description:</label><br>
                                                    <input class="form-control form-control-user" type="text" id="description" name="description" required>
                                                    <span id="description_error"></span><br>

                                                    <br>
                                                    <button type="submit" class="btn btn-primary btn-user"
                                                        style="width: auto; padding: 5px 10px; font-size: 14px;">Add Categorie</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul>
                            <li><a href="https://www.creative-tim.com">Creative Tim</a></li>
                            <li><a href="http://presentation.creative-tim.com">About Us</a></li>
                            <li><a href="http://blog.creative-tim.com">Blog</a></li>
                        </ul>
                    </nav>
                    <div class="copyright">
                        &copy; <script>
                            document.write(new Date().getFullYear())
                        </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Core JS Files -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Other JS Files -->
    <script src="../assets/js/now-ui-dashboard.js?v=1.0.1"></script>
    <!-- Scripts -->
    <script src="js/addCategorie.js"></script>

</body>

</html>