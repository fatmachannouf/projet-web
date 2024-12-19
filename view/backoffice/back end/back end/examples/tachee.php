<?php 
include 'C:\xampp\htdocs\projet\model\ModelTache.php';
    $Tache = LoadTacheFromDb();
    $Cours = LoadCoursFromDB();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if($_POST['action'] == 'add'){
            echo 'Add';
            AddTache($_POST);
            header("Location:tache.php");
        }else if($_POST['action'] == 'edit'){
            echo 'Edit';
            ModifierTache($_POST);
            header("Location:tache.php");
        }else if($_POST['action'] =='delete'){
            DeleteTache($_POST['id']);
            header("Location:tache.php");
        }
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
    <style>
        
    </style>
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
                            <p>gestion des questions</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="../examples/tachee.php">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>to do list</p>
                        </a>
                    </li>
                    <li>
                        <a href="../examples/tables.php">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                            <p>Table List</p>
                        </a>
                    </li>
                    <li>
                        <a href="../examples/CategorieList.php">
                            <i class="now-ui-icons text_caps-small"></i>
                            <p>Formation</p>
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

            <!-- End Navbar -->
            <div class="panel-header panel-header-sm">
            </div>
            <h2>Liste des taches</h2>
    
    <table>
        <thead>
            <tr>
                <th>Tache</th>
                <th>Cours</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if($Tache): ?>
                <?php foreach($Tache as $task): ?>
                    <tr>
                        <td><?php echo($task['DES_TACHE']);?></td>
                        <td><?php echo($task['NOM_COURS']); ?></td>
                        <td>
                            <form action="tache.php" method="POST" id="form-edit">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="id" value="<?php echo($task['ID_TACHE']);?>" id="id-tache-saved-<?php echo $task['ID_TACHE']; ?>">
                                <button name="edit" class="edit-btn" type="button" onclick="LoadDatatoform('<?php echo($task['DES_TACHE']);?>', '<?php echo($task['NOM_COURS']); ?>', '<?php echo($task['ID_TACHE']); ?>')">Modifier</button>
                                <button name="delete" class="delete-btn" type="submit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else :?>
                <tr>
                    <td colspan="3">Aucune donnée disponible.</td>
                </tr>
            <?php endif; ?>
            <td colspan="3">
                <button type="button" style="display: flex;" onclick="ShowForm('from-add-task')">Ajouter une tache</button>
            </td>
        </tbody>
    </table>
    <hr>
    <br><br><br>
    <form action="tache.php" method="POST" id="from-add-task" style="display:none;">
        <input type="hidden" name="action" value="add" id="action">
        <input type="hidden" name="id" value="0" id="id-tache">
        <label for="description">Description:</label>
        <input type="text" id="description" name="description">
        <br><br>
        <select name="cours" id="cours">
            <option value="0">Selectioner un cour</option>
            <?php foreach($Cours as $cour):?>
                <option value="<?php echo $cour["ID_COURS"];?>"><?php echo($cour["NOM_COURS"]);?></option>
            <?php endforeach;?>
        </select>
        <br><br>
        <button type="submit" id="submit-button">Ajouter une tâche</button>
        <button type="button" id="cancel-button" onclick="HideForm('from-add-task')">Cancel</button>
    </form>

    <script>
        function LoadDatatoform(description, coursName, taskId) {
            document.getElementById('description').value = description;
            const form = document.getElementById('from-add-task');
            const submitButton = document.getElementById('submit-button');
            
            let coursSelect = document.getElementById('cours');
            for (let i = 0; i < coursSelect.options.length; i++) {
                if (coursSelect.options[i].text === coursName) {
                    coursSelect.selectedIndex = i;
                    break;
                }
            }

            document.getElementById('id-tache').value = taskId;
            document.getElementById('action').value = 'edit';
            form.style.display = 'block';
            submitButton.innerText = 'Modifier la tâche';
        }

        function HideForm(formId) {
            const form = document.getElementById(formId);
            form.style.display = 'none';
             // Reset the form fields
            document.getElementById('id-tache').value = 0;
            document.getElementById('action').value = 'add';
            document.getElementById('description').value = '';
            document.getElementById('cours').selectedIndex = 0;
            document.getElementById('submit-button').innerText = 'Ajouter une tâche';
        }

        function ShowForm(formId) {
            const form = document.getElementById(formId);
            const submitbutton = document.getElementById('submit-button');

           
            form.style.display = 'block';
            submitButton.innerText = 'Ajouter une tâche';

        }
    </script>
                    
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
