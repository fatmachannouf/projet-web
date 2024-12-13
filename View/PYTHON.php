<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cours Python</title>
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
    <h1>Cours Python</h1>
    <a href="PYTHON1.php">
    <h2>Chapitre 1 : Introduction et Syntaxe de Base</h2>
    </a>
    <ul>
        <li>Historique et applications</li>
        <li>Installation et configuration</li>
        <li>Structure d'un programme</li>
        <li>Variables, types de données, et opérateurs</li>
        <li>Conditions et boucles (if, for, while)</li>
    </ul>
    
    <a href="PYTHON2.php">
    <h2>Chapitre 2 : Fonctions et Structures de Données</h2>
    </a>
    <ul>
        <li>Définition et appel de fonctions</li>
        <li>Paramètres, valeurs de retour et lambda</li>
        <li>Portée des variables (locales, globales)</li>
        <li>Listes, tuples, dictionnaires et ensembles</li>
        <li>Indexation, tranchage et méthodes des collections</li>
    </ul>

    <a href="PYTHON3.php">
    <h2>Chapitre 3 : Gestion des Fichiers et Programmation Orientée Objet</h2>
    </a>
    <ul>
        <li>Lecture et écriture de fichiers (texte et binaire)</li>
        <li>Utilisation de context managers (with)</li>
        <li>Concepts POO : classes et objets</li>
        <li>Encapsulation, héritage et polymorphisme</li>
        <li>Méthodes spéciales (constructeurs, destructeurs)</li>
    </ul>

    <a href="PYTHON4.php">
    <h2>Chapitre 4 : Modules, Bibliothèques et Programmation Avancée</h2>
    </a>
    <ul>
        <li>Modules standards et création de packages</li>
        <li>Installation de bibliothèques avec pip</li>
        <li>Bibliothèques standards : math, datetime, os, etc.</li>
        <li>Introduction au multithreading et asyncio</li>
        <li>Développement web avec Flask/Django</li>
    </ul>

    <a href="PYTHON5.php">
    <h2>Chapitre 5 : Applications Avancées et Bases de Données</h2>
    </a>
    <ul>
        <li>Traitement de données avec Pandas et NumPy</li>
        <li>Tests et débogage (unittest, pytest, pdb)</li>
        <li>Connexion à des bases de données (SQLite, MySQL)</li>
        <li>Création d'API RESTful avec Flask</li>
        <li>Scripts d'automatisation et programmation graphique</li>
    </ul>
    <a href="PYTHON1.php">Passer au Chapitre 1</a> 

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
