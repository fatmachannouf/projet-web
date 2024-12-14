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

    <form action="DeleteCH.php" method="POST" enctype="multipart/form-data">
        <label for="Nom de Cours">Nom de Cours :</label>
        <input type="text" id="NomC" name="NomC" value="Ecrire le Nom de Cours pour Supprimer"><br>
        <label for="Nom de Chapitre">Nom de Chapitre :</label>
        <input type="text" id="NomCH" name="NomCH" value="Ecrire le Nom de Chapitre pour Supprimer"><br>
        
        <input type="submit" value="Supprimer" name="Supprimer">
    </form>

    <?php
    // Connexion à la base de données (Assurez-vous que les informations suivantes sont correctes)
    $servername = "localhost"; // Serveur de la base de données
    $username = "root"; // Nom d'utilisateur de la base de données
    $password = ""; // Mot de passe de la base de données
    $dbname = "learnora"; // Nom de la base de données

    // Créer une connexion
    $conn = mysql_connect($servername, $username, $password);

    // Vérifier la connexion
    if (!$conn) {
        die("Connection failed: " . mysql_error());
    }

    // Sélectionner la base de données
    mysql_select_db($dbname, $conn);

    // Vérifier si le bouton "Supprimer" est cliqué
    if (isset($_POST['Supprimer'])) {
        // Récupérer les valeurs du formulaire
        $NomC = $_POST['NomC'];
        $NomCH = $_POST['NomCH'];

        // Préparer la requête SQL pour supprimer le chapitre
        $query = "DELETE FROM chapitre WHERE NomCH = '$NomCH' AND NomC = '$NomC'";

        // Exécuter la requête SQL
        $result = mysql_query($query, $conn);

        // Vérifier si la suppression a réussi
        if ($result) {
            echo "<h1>Le chapitre '$NomCH' a été supprimé avec succès.</h1>";
        } else {
            echo "<h1>Erreur lors de la suppression du chapitre.</h1>";
        }
    }

    // Fermer la connexion à la base de données
    mysql_close($conn);
    ?>

</body>
</html>
