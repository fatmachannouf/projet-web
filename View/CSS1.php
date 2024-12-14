<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapitre 1 : Introduction et Concepts de Base</title>

    <!-- CSS Links -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-eduwell-style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="styles.css"> <!-- Custom styles -->

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
            padding: 0;
        }
        section {
            counter-increment: section;
        }
        h1 {
            color: red;
            text-align: center;
        }
        h2 {
            color: blue;
            border-bottom: 2px solid #16a085;
            content: counter(section) ". ";
        }
        h3 {
            color: #2980b9;
        }
        p {
            margin: 10px 0;
        }
        ul {
            margin: 10px 20px;
        }
        li {
            margin: 5px 0;
        }
        .button-container {
            text-align: center;
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .button-container form {
            margin: 0;
        }   

        .button-container button {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 15px 30px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .button-container button:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .button-container button:active {
            background-color: #004085;
            transform: scale(1);
        }

        .button-container button[type="submit"] {
            background-color: #28a745;
        }

        .button-container button[type="submit"]:hover {
            background-color: #218838;
        }

        .button-container button[type="submit"]:active {
            background-color: #1e7e34;
        }

        .button-container button[type="reset"] {
            background-color: #dc3545;
        }

        .button-container button[type="reset"]:hover {
            background-color: #c82333;
        }

        .button-container button[type="reset"]:active {
            background-color: #bd2130;
        }

        .button-container {
            margin-top: 20px;
            text-align: center;
        }

        .button-container a {
            text-decoration: none;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 0 10px;
        }

        .button-container a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Chapitre 1 : Introduction et Concepts de Base</h1>
    <h2>1. Qu'est-ce que CSS ?</h2>
    <p>CSS (Cascading Style Sheets) est un langage de style utilisé pour décrire la présentation d'un document écrit en HTML ou XML. CSS définit l'apparence des éléments, comme les couleurs, les polices, les espacements et la mise en page.</p>

    <h2>2. Histoire et rôle de CSS</h2>
    <p>Le CSS a été créé par Håkon Wium Lie en 1994. Avant l'existence de CSS, tout le style d'une page web était inclus directement dans le HTML. Avec CSS, on peut séparer le contenu de la présentation, ce qui rend le code plus propre et plus facile à maintenir.</p>

    <h2>3. Intégration CSS : inline, interne, externe</h2>
    <ul>
        <li><strong>CSS inline :</strong> Appliqué directement dans l'élément HTML via l'attribut `style`.</li>
        <li><strong>CSS interne :</strong> Inclus dans la section `<head>` du document HTML avec la balise `<style> </li>
        <li><strong>CSS externe :</strong> Déclaré dans un fichier (`css`) séparé, lié au fichier HTML via la balise `<link>`.</li>
    </ul>

    <h2>4. Sélecteurs de base : élément, classe, ID</h2>
    <ul>
        <li><strong>Élément :</strong> Sélectionne un type d'élément HTML (ex. `p`, `h1`).</li>
        <li><strong>Classe :</strong> Sélectionne tous les éléments ayant une certaine classe (ex. `.className`).</li>
        <li><strong>ID :</strong> Sélectionne un élément unique par son identifiant (ex. `#idName`).</li>
    </ul>

    <section>
        <div class="button-container">
            <a href="CSS.php">Précédent</a>
            <a href="CSS2.php">Suivant</a>
            <a href="Matiére.php">Retour à l'accueil</a>
        </div>
    </section>
</body>
</html>
