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

    <form>
        <label for="identifiant">Identifiant :</label>
        <input type="text" id="identifiant" name="identifiant">

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom">

        <label for="prenom">Prenom :</label>
        <input type="text" id="prenom" name="prenom">

        <label for="Mot de Passe">Mot de Passe :</label>
        <input type="password" id="MDP" name="Mot de Passe">

        <label> 
            <input type="checkbox" id="cours" name="cours">
            Cours
            <input type="checkbox" id="chapitre" name="chapitre">
            Chapitre
        </label>

        
        <input type="submit" value="Connecter" onclick="return Verif2()">
        <input type="submit" value="S'inscrire" >
    </form>
</body>
</html>