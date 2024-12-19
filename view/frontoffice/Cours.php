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
            <input type="text" id="NomC" name="NomC" value="Ecrire le Nom de Cours a Modifier">

            <label for="Image">Image  :</label>
            <input type="file" id="ImageC" name="ImageC" value="Inserr L'Image de Cours a Modifier">

            <label for="Description">Description :</label>
            <input type="text" id="Desc" name="Desc" value="Ecrire La Description de Cours a Modifier"><br>

            <input type="submit" value="Modifier" >
        </form>
        
    </body>
</html>