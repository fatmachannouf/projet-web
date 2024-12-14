<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cours SQL</title>
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
    <h1>Cours SQL</h1>

    <!-- Chapitre 1: Introduction à SQL -->
    <section>
        <a href="SQL1.php">
        <h2>Chapitre 1 : Introduction à SQL</h2>
        </a>
        <h3>Qu'est-ce que SQL ?</h3>
        <p>SQL (Structured Query Language) est un langage utilisé pour gérer et manipuler des bases de données relationnelles.</p>

        <h3>Historique et importance</h3>
        <p>SQL a été créé dans les années 1970 par IBM et est devenu le standard pour la gestion des bases de données relationnelles.</p>
    </section>

    <!-- Chapitre 2: Bases de données et tables -->
    <section>
        <a href="SQL2.php">
        <h2>Chapitre 2 : Bases de données et tables</h2>
        </a>
        <h3>Création d'une base de données</h3>
        <p>Une base de données est un ensemble de tables stockant des informations.</p>

        <h3>Création et gestion des tables</h3>
        <p>Les tables sont constituées de lignes (enregistrements) et de colonnes (attributs).</p>

        <h3>Types de données</h3>
        <p>Les types de données permettent de spécifier le format des informations dans les colonnes, comme <code>int</code>, <code>varchar</code>, et <code>date</code>.</p>
    </section>

    <!-- Chapitre 3: Manipulation des données -->
    <section>
        <a href="SQL3.php">
        <h2>Chapitre 3 : Manipulation des données</h2>
        </a>
        <h3>Insertion et mise à jour</h3>
        <p>La commande <code>INSERT</code> permet d'ajouter des données, et <code>UPDATE</code> permet de les modifier.</p>

        <h3>Suppression de données</h3>
        <p>La commande <code>DELETE</code> permet de supprimer des enregistrements.</p>

        <h3>Sélection des données</h3>
        <p>La commande <code>SELECT</code> permet de récupérer des données d'une ou plusieurs tables.</p>
    </section>

    <!-- Chapitre 4: Filtres, conditions et jointures -->
    <section>
        <a href="SQL4.php">
        <h2>Chapitre 4 : Filtres, conditions et jointures</h2>
        </a>
        <h3>Utilisation de <code>WHERE</code></h3>
        <p>La clause <code>WHERE</code> filtre les résultats selon des conditions.</p>

        <h3>Jointures</h3>
        <p>Les jointures permettent de combiner les données de plusieurs tables. Exemples : <code>INNER JOIN</code>, <code>LEFT JOIN</code>, <code>RIGHT JOIN</code>.</p>
    </section>

    <!-- Chapitre 5: Optimisation et transactions -->
    <section>
        <a href="SQL5.php">
        <h2>Chapitre 5 : Optimisation et transactions</h2>
        </a>
        <h3>Indexation</h3>
        <p>Les index améliorent la performance des requêtes en accélérant la recherche de données.</p>

        <h3>Gestion des transactions</h3>
        <p>Les commandes <code>BEGIN</code>, <code>COMMIT</code>, et <code>ROLLBACK</code> permettent de contrôler les opérations SQL comme une seule unité.</p>

        <h3>Analyse des performances</h3>
        <p>Analyser et optimiser les requêtes aide à éviter les goulots d'étranglement.</p>
    </section>
        <section>
        <div class="button-container">
            <a href="SQL1.php">Suivant</a>
            <a href="Matiére.php">Retour à l'accueil</a>
        </div>
        </section>

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
