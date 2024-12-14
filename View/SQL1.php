<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chapitre 1 : Introduction à SQL</title>
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
        <h1>Chapitre 1 : Introduction à SQL</h1>

        <h2>Qu'est-ce que SQL ?</h2>
        <p>SQL (Structured Query Language) est un langage standard utilisé pour communiquer avec les bases de données relationnelles. Il permet de créer, lire, mettre à jour et supprimer des données stockées dans une base de données.</p>

        <h2>Les caractéristiques principales de SQL</h2>
        <ul>
            <li><strong>Langage déclaratif :</strong> Vous indiquez à SQL ce que vous voulez, sans préciser comment l'obtenir.</li>
            <li><strong>Indépendant du système :</strong> SQL est utilisé dans divers systèmes de gestion de bases de données (SGBD) comme MySQL, PostgreSQL, Oracle, et SQL Server.</li>
            <li><strong>Standardisé :</strong> SQL suit des normes établies par l'ANSI et l'ISO.</li>
        </ul>

        <h2>Historique de SQL</h2>
        <p>SQL a été développé dans les années 1970 par IBM dans le cadre de leur projet de base de données relationnelle. En 1986, il est devenu un standard de l'ANSI.</p>

        <h2>Pourquoi apprendre SQL ?</h2>
        <ul>
            <li>SQL est essentiel pour manipuler des bases de données.</li>
            <li>Les entreprises utilisent SQL pour gérer leurs données clients, ventes, finances, etc.</li>
            <li>SQL est facile à apprendre et à utiliser.</li>
        </ul>
        <section>
        <div class="button-container">
            <a href="SQL.php">Précédent</a>
            <a href="SQL2.php">Suivant</a>
            <a href="Matiére.php">Retour à l'accueil</a>
        </div>
        </section>
    </body>
</html>
