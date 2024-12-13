<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cours MySQL</title>
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
    <h1>Cours MySQL</h1>

    <!-- Chapitre 1: Introduction et Bases Fondamentales -->
    <section>
        <h2>Chapitre 1 : Introduction et Bases Fondamentales</h2>
        <h3>Introduction à MySQL</h3>
        <p>MySQL est un système de gestion de base de données relationnelle open-source, utilisé pour stocker et gérer des données dans des applications web et autres systèmes.</p>
        <h3>Bases de données et tables</h3>
        <p>Apprendre à créer, modifier et gérer des bases de données et des tables dans MySQL, ainsi que les types de données disponibles.</p>
    </section>

    <!-- Chapitre 2: Manipulation des Données -->
    <section>
        <h2>Chapitre 2 : Manipulation des Données</h2>
        <h3>Insertion, mise à jour et suppression de données</h3>
        <p>Ajouter, mettre à jour et supprimer des données avec les commandes INSERT, UPDATE et DELETE.</p>
        <h3>Sélection des données avec SELECT</h3>
        <p>Récupérer des données avec la commande SELECT, y compris la sélection de colonnes spécifiques ou toutes les colonnes.</p>
        <h3>Filtres et conditions</h3>
        <p>Utiliser WHERE, les opérateurs logiques (AND, OR, NOT) et les comparaisons pour filtrer les données.</p>
    </section>

    <!-- Chapitre 3: Fonctionnalités Avancées -->
    <section>
        <h2>Chapitre 3 : Fonctionnalités Avancées</h2>
        <h3>Tri et ordonnancement des résultats</h3>
        <p>Organiser les résultats avec ORDER BY, ASC et DESC.</p>
        <h3>Fonctions d'agrégation</h3>
        <p>Utiliser SUM, AVG, COUNT, MIN, MAX, et GROUP BY pour effectuer des calculs sur les données.</p>
        <h3>Jointures (Joins)</h3>
        <p>Combiner des tables avec INNER JOIN, LEFT JOIN, RIGHT JOIN, FULL OUTER JOIN et CROSS JOIN.</p>
        <h3>Sous-requêtes</h3>
        <p>Utiliser des sous-requêtes pour des cas complexes dans les clauses WHERE, FROM et SELECT.</p>
    </section>

    <!-- Chapitre 4: Gestion et Optimisation -->
    <section>
        <h2>Chapitre 4 : Gestion et Optimisation</h2>
        <h3>Indexation et performance</h3>
        <p>Créer des index pour optimiser les performances et comprendre les différents types d'index.</p>
        <h3>Transactions et gestion des transactions</h3>
        <p>Garantir l'intégrité des données avec BEGIN, COMMIT et ROLLBACK, ainsi que les verrouillages.</p>
        <h3>Gestion des utilisateurs et permissions</h3>
        <p>Créer des utilisateurs et gérer leurs permissions avec GRANT et REVOKE.</p>
        <h3>Optimisation des requêtes</h3>
        <p>Analyser et optimiser les requêtes avec EXPLAIN et les index.</p>
        <h3>Sauvegarde et récupération des données</h3>
        <p>Sauvegarder et restaurer des bases de données pour assurer la sécurité des données.</p>
    </section>

    <!-- Chapitre 5: Intégration et Avancées Pratiques -->
    <section>
        <h2>Chapitre 5 : Intégration et Avancées Pratiques</h2>
        <h3>Sécurisation de MySQL</h3>
        <p>Protéger les données avec SSL/TLS et une bonne gestion des permissions.</p>
        <h3>MySQL Avancé</h3>
        <p>Utiliser SQL dynamique, les fonctions spécifiques et les vues matérialisées.</p>
        <h3>Répartition des bases de données (Sharding)</h3>
        <p>Partitionner les données pour améliorer la scalabilité.</p>
        <h3>MySQL et PHP (intégration)</h3>
        <p>Connecter PHP à MySQL et exécuter des requêtes SQL dans une application web.</p>
        <h3>Utilisation de frameworks avec MySQL</h3>
        <p>Découvrir l'intégration de frameworks comme Laravel ou Symfony avec MySQL.</p>
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
