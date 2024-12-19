<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapitre 4 : Gestion et Optimisation</title>
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
    <h1>Chapitre 4 : Gestion et Optimisation</h1>

    <section>
        <h2>1. Indexation et Performance</h2>
        <p>Les index permettent d’optimiser les performances des requêtes en réduisant le temps d’accès aux données. MySQL supporte plusieurs types d’index : PRIMARY, UNIQUE, et FULLTEXT.</p>
        <h3>Pourquoi utiliser des index ?</h3>
        <ul>
            <li>Accélérer les recherches de données.</li>
            <li>Optimiser les opérations de tri et de jointure.</li>
            <li>Minimiser le nombre de lectures de disques.</li>
        </ul>
    </section>

    <section>
        <h2>2. Transactions et Gestion des Transactions</h2>
        <p>Les transactions garantissent l’intégrité des données en permettant d’exécuter un ensemble d’opérations comme une seule unité.</p>
        <h3>Principales commandes :</h3>
        <ul>
            <li><strong>BEGIN:</strong> Démarre une transaction.</li>
            <li><strong>COMMIT:</strong> Valide toutes les opérations de la transaction.</li>
            <li><strong>ROLLBACK:</strong> Annule toutes les opérations depuis le dernier BEGIN.</li>
        </ul>
    </section>

    <section>
        <h2>3. Gestion des Utilisateurs et Permissions</h2>
        <p>La gestion des utilisateurs est essentielle pour sécuriser l’accès aux bases de données.</p>
        <h3>Principales commandes :</h3>
        <ul>
            <li><strong>CREATE USER:</strong> Créer un nouvel utilisateur.</li>
            <li><strong>GRANT:</strong> Attribuer des permissions à un utilisateur.</li>
            <li><strong>REVOKE:</strong> Révoquer des permissions.</li>
            <li><strong>DROP USER:</strong> Supprimer un utilisateur.</li>
        </ul>
    </section>

    <section>
        <h2>4. Optimisation des Requêtes</h2>
        <p>L’optimisation des requêtes permet d’améliorer la vitesse et l’efficacité des opérations SQL.</p>
        <h3>Outils et techniques :</h3>
        <ul>
            <li><strong>EXPLAIN:</strong> Analyse la performance d’une requête.</li>
            <li><strong>Indexes:</strong> Utiliser les index pour améliorer la recherche.</li>
            <li><strong>Partitionnement:</strong> Diviser les tables pour mieux gérer les grandes quantités de données.</li>
        </ul>
    </section>

    <section>
        <h2>5. Sauvegarde et Récupération des Données</h2>
        <p>La sauvegarde et la restauration des données sont essentielles pour assurer la continuité des activités en cas de problème.</p>
        <h3>Méthodes :</h3>
        <ul>
            <li><strong>mysqldump:</strong> Exporter une base de données dans un fichier SQL.</li>
            <li><strong>phpMyAdmin:</strong> Utiliser l’interface graphique pour sauvegarder et restaurer.</li>
            <li><strong>Automatisation:</strong> Planifier des sauvegardes régulières avec des scripts.</li>
        </ul>
    </section>

    <section>
        <div class="button-container">
            <a href="MySQL3.php">Précédent</a>
            <a href="MySQL5.php">Suivant</a>
            <a href="Matiére.php">Retour à l'accueil</a>
        </div>
    </section>
</body>
</html>
