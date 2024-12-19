<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Professeur</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            font-weight: bold;
            color: black;
        }

        form {
            margin: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }
    </style>

    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-eduwell-style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <script src="Connecter.js"></script>
</head>
<body>
    <h1>Welcome Professor</h1>

    <form action="C:\xampp\htdocs\Learnora\Controller\LearnoraController.php" method="POST" enctype="multipart/form-data">
        <label for="Nom de Cours">Nom de Cours :</label>
        <input type="text" id="NomC" name="NomC" value="Ecrire le Nom de Cours a Lire"><br>
        
        <input type="submit" value="Lire" name="Lire" >
    </form>
    <?php
    // Include the LearnoraController
    include_once __DIR__ . '/../Controller/LearnoraController.php';

    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['NomC'])) {
        $NomC = htmlspecialchars(trim($_POST['NomC'])); // Sanitize input

        // Create an instance of LearnoraController
        $learnoraC = new LearnoraController();

        // Show the specific course
        $learnoraC->showCours($NomC);
    }
    ?>
</body>
</html>