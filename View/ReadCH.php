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
        
        <input type="submit" value="Lire" name="Lire" >
    </form>
    <?php
// Connexion à la base de données (Assurez-vous que les informations suivantes sont correctes)
$servername = "localhost"; // Serveur de la base de données
$username = "root"; // Nom d'utilisateur de la base de données
$password = ""; // Mot de passe de la base de données
$dbname = "learnora"; // Nom de la base de données

$conn = mysql_connect($servername, $username, $password);

// Vérifier la connexion
if (!$conn) {
    die("Connection failed: " . mysql_error());
}

// Sélectionner la base de données
mysql_select_db($dbname, $conn);

// Vérifier si un nom de chapitre a été envoyé
if (isset($_POST['NomCH'])) {
    $NomCH = $_POST['NomCH'];

    // Préparer la requête SQL pour récupérer le contenu du chapitre
    $query = "SELECT * FROM chapitre WHERE NomCH = '$NomCH'";  

    // Exécuter la requête SQL
    $result = mysql_query($query, $conn);

    // Vérifier si la requête a retourné des résultats
    if ($result) {
        // Vérifier si un chapitre existe avec ce nom
        if (mysql_num_rows($result) > 0) {
            // Récupérer le titre et le contenu du chapitre
            $row = mysql_fetch_assoc($result);
            $NomCH = $row['NomCH'];
            $NumeroCH = $row['NumeroCH'];
            $contenue = $row['contenue'];
            $NomC = $row['NomC'];

            // Afficher le titre et le contenu du chapitre
            echo "<h1>" . htmlspecialchars($NomCH) . "</h1>";
            echo "<p>" . nl2br(htmlspecialchars($contenue)) . "</p>";
        } else {
            // Si aucun chapitre trouvé
            echo "<h1>Chapitre introuvable</h1>";
        }
    } else {
        // Si la requête échoue
        echo "<h1>Erreur lors de la récupération des données</h1>";
    }
} else {
    // Si aucun nom de chapitre n'est sélectionné
    echo "<h1>Aucun chapitre sélectionné</h1>";
}

// Fermer la connexion à la base de données
mysql_close($conn);
?>

</body>
</html>