<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fondamentaux de JavaScript</title>
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
            color: #2c3e50;
            text-align: center;
        }
        h2 {
            color: #16a085;
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
                text-align: center; /* Centre le contenu du conteneur */
                display: flex;
                justify-content: center;
                gap: 20px; /* Espace entre les boutons */
                margin-top: 30px; /* Espacement vers le haut */
            }

            .button-container form {
                margin: 0;
            }   
            .button-container button {
                background-color: #007bff; /* Bleu clair */
                color: white; /* Texte en blanc */
                border: none;
                border-radius: 8px; /* Coins arrondis */
                padding: 15px 30px; /* Taille du bouton */
                font-size: 16px; /* Taille du texte */
                cursor: pointer; /* Curseur de souris pointer */
                transition: background-color 0.3s ease, transform 0.2s ease; /* Transition douce */
            }

            .button-container button:hover {
                background-color: #0056b3; /* Couleur bleue plus foncée au survol */
                transform: scale(1.05); /* Légère animation d'agrandissement */
            }

            .button-container button:active {
                background-color: #004085; /* Couleur encore plus foncée quand le bouton est cliqué */
                transform: scale(1); /* Revenir à la taille originale */
            }

            .button-container button[type="submit"] {
                background-color: #28a745; /* Vert pour 'Ajouter' */
            }

            .button-container button[type="submit"]:hover {
                background-color: #218838; /* Vert foncé au survol */
            }

            .button-container button[type="submit"]:active {
                background-color: #1e7e34; /* Vert encore plus foncé au clic */
            }

            .button-container button[type="reset"] {
                background-color: #dc3545; /* Rouge pour 'Supprimer' */
            }

            .button-container button[type="reset"]:hover {
                background-color: #c82333; /* Rouge plus foncé au survol */
            }

            .button-container button[type="reset"]:active {
                background-color: #bd2130; /* Rouge encore plus foncé au clic */
            }
    </style>
</head>
<body>
    <h1>Fondamentaux de JavaScript</h1>

    <section>
        <h2>1. Historique et utilisation</h2>
        <p>JavaScript est un langage de programmation développé initialement par Netscape comme un moyen d'ajouter des interactions dynamiques sur les pages web. Aujourd'hui, il est utilisé pour une grande variété de tâches, du côté client et côté serveur (Node.js).</p>
    </section>

    <section>
        <h2>2. Installation et configuration</h2>
        <p>Pour commencer à utiliser JavaScript, vous n'avez besoin que d'un navigateur web. Il est recommandé d'utiliser un éditeur de texte comme Visual Studio Code pour une meilleure expérience de développement.</p>
    </section>

    <section>
        <h2>3. Syntaxe de base : variables, types de données, structures de contrôle</h2>
        <p>En JavaScript, nous déclarons des variables avec `var`, `let`, ou `const`. Voici un exemple de déclaration de variable :</p>
        <pre>
let x = 10;
const pi = 3.14;
        </pre>
        <p>Les types de données les plus courants sont :</p>
        <ul>
            <li>String : chaîne de caractères</li>
            <li>Number : nombres entiers ou flottants</li>
            <li>Boolean : valeur vraie ou fausse</li>
            <li>Array : tableau de valeurs</li>
        </ul>
        <p>Les structures de contrôle incluent `if`, `for`, `while`, etc.</p>
    </section>

    <a href="JavaScript2.php">Passer au Chapitre 2</a> 
    <div class="button-container">
        <a href="Matiére.php"><button type="button">Retour à la page d'accueil</button></a>
    </div>
</body>
</html>
