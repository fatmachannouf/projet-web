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

    <form action="LearnoraController.php" method="POST" enctype="multipart/form-data">
        <label for="Nom de Cours">Nom de Cours :</label>
        <input type="text" id="NomC" name="NomC" value="Ecrire le Nom de Cours a Lire"><br>
        <label for="Nom de Chapitre">Nom de Chapitre :</label>
        <input type="text" id="NomCH" name="NomCH" value="Ecrire le Nom de Chapitre a Lire"><br>
        <label for="Numero de Chapitre">Numero de Chapitre :</label>
        <input type="text" id="NumeroCH" name="NumeroCH" value="Ecrire le Numero de Chapitre a Ajouter"><br>
        <label for="Contenue de Chapitre">Contenue de Chapitre :</label>
        <input type="text" id="Contenue" name="Contenue" value="Ecrire le Contenue de Chapitre a Ajouter"><br>
        
        
        <input type="submit" value="Lire" name="Lire" >
    </form>
    <?php
// Connexion à la base de données (Assurez-vous que les informations suivantes sont correctes)
$servername = "localhost"; // Serveur de la base de données
$username = "root"; // Nom d'utilisateur de la base de données
$password = ""; // Mot de passe de la base de données
$dbname = "learnora"; // Nom de la base de données

// Connexion à la base de données
$conn = mysql_connect($servername, $username, $password);

// Vérifier la connexion
if (!$conn) {
    die("Connection failed: " . mysql_error());
}

// Sélectionner la base de données
mysql_select_db($dbname, $conn);

// Vérifier si le formulaire a été soumis
if (isset($_POST['ajouterChapitre'])) {
    // Récupérer les valeurs du formulaire
    $NomC = mysql_real_escape_string($_POST['NomC']);
    $NomCH = mysql_real_escape_string($_POST['NomCH']);
    $NumeroCH = (int)$_POST['NumeroCH'];
    $Contenue = mysql_real_escape_string($_POST['Contenue']);

    // Préparer la requête SQL pour insérer le nouveau chapitre
    $query = "INSERT INTO chapitre (NomC, NomCH, NumeroCH, contenue) VALUES ('$NomC', '$NomCH', $NumeroCH, '$Contenue')";

    // Exécuter la requête
    if (mysql_query($query, $conn)) {
        echo "<h1>Chapitre ajouté avec succès</h1>";
    } else {
        echo "<h1>Erreur lors de l'ajout du chapitre : " . mysql_error($conn) . "</h1>";
    }
}

// Fermer la connexion à la base de données
mysql_close($conn);
?>



</body>
</html>