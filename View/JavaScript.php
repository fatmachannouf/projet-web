<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction à JavaScript</title>
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

<h1>Introduction à JavaScript</h1>

<section>
    <a href="JavaScript1.php">
    <h2>1. Fondamentaux de JavaScript</h2>
    </a>
    <ul>
        <li>Historique et utilisation</li>
        <li>Installation et configuration</li>
        <li>Syntaxe de base : variables, types de données, structures de contrôle</li>
    </ul>
</section>

<section>
    <a href="JavaScript2.php">
    <h2>2. Fonctions et manipulation des données</h2>
    </a>
    <ul>
        <li>Déclaration et appel de fonctions</li>
        <li>Fonctions fléchées</li>
        <li>Tableaux et objets : manipulation et itération</li>
    </ul>
</section>

<section>
    <a href="JavaScript3.php">
    <h2>3. Manipulation du DOM</h2>
    </a>
    <ul>
        <li>Sélection d'éléments HTML</li>
        <li>Modification du contenu et des attributs</li>
        <li>Événements DOM</li>
    </ul>
</section>

<section>
    <a href="JavaScript4.php">
    <h2>4. Programmation avancée</h2>
    </a>
    <ul>
        <li>Gestion des erreurs : try/catch</li>
        <li>Asynchronisme : callbacks, promesses, async/await</li>
        <li>Modules : import/export</li>
        <li>Programmation orientée objet : classes et héritage</li>
    </ul>
</section>

<section>
    <a href="JavaScript5.php">
    <h2>5. Bonnes pratiques et optimisation</h2>
        </a>
    <ul>
        <li>Optimisation du code</li>
        <li>Sécurité en JavaScript</li>
        <li>Responsiveness et compatibilité</li>
    </ul>
</section>
<a href="JavaScript1.php">Passer au Chapitre 1</a> 

<div class="button-container">
    <form action="ReadCH.php" method="post">
        <button type="submit" name="action" value="Lire">Lire</button>
    </form>
    <form action="CreateCH.php" method="post">
        <button type="submit" name="action" value="Ajouter">Ajouter</button>
    </form>
    <form action="UpdateCH.php" method="post">
        <button type="submit" name="action" value="Modifier">Modifier</button>
    </form>
    <form action="DeleteCH.php" method="post">
        <button type="Submit" value="Reset">Supprimer</button>
    </form>
</div> 
</body>
</html>
