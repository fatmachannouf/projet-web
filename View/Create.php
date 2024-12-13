<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout de Cours</title>
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
</head>
<body>
    <h1>Ajouter un Nouveau Cours</h1>

    <form method="POST" enctype="multipart/form-data">
        <label for="NomC">Nom du Cours :</label>
        <input type="text" id="NomC" name="NomC" value="" >

        <label for="ImageC">Image :</label>
        <input type="text" id="ImageC" name="ImageC" >

        <label for="DescriptionC">Description :</label>
        <textarea id="DescriptionC" name="DescriptionC" ></textarea><br>

        <input type="submit" value="Ajouter">
    </form>
</body>
</html>

<?php
// Inclure le contrôleur qui contient CoursController
include __DIR__ . '/../Controller/LearnoraController.php';

$error = "";
$CoursController = new CoursController();

// Si le formulaire est soumis
if (isset($_POST["NomC"]) && isset($_POST["ImageC"]) && isset($_POST["DescriptionC"]) &&
    !empty($_POST["NomC"]) && !empty($_POST["ImageC"]) && !empty($_POST["DescriptionC"])) {

    // Récupérer l'URL de l'image
    $imageUrl = $_POST['ImageC'];

    // Créez un objet Cours avec les données du formulaire
    $cours = new Cours(
        $_POST['NomC'],  // Nom du cours
        $imageUrl,       // URL de l'image
        $_POST['DescriptionC']  // Description du cours
    );

    // Ajouter le cours via le contrôleur
    $CoursController->addCours($cours);

    // Rediriger vers la page liste des cours après l'ajout
    header('Location: coursList.php');
    exit();
} else {
    $error = "Les informations sont manquantes.";
}

if (!empty($error)) {
    echo "<p style='color: red;'>$error</p>";
}

?>

