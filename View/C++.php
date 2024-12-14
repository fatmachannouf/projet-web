<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>C++ - Cours complet</title>
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
    <h1>Cours de C++</h1>
    <a href="C++1.php">
    <h2>Chapitre 1 : Introduction et Bases du Langage</h2>
    </a>
    <ul>
        <li>Historique et applications de C++</li>
        <li>Installation et configuration de l'IDE</li>
        <li>Structure d'un programme C++</li>
        <li>Commentaires et instructions de base (cout, cin)</li>
        <li>Compilation et exécution d'un programme</li>
    </ul>
    <a href="C++2.php">
    <h2>Chapitre 2 : Variables, Types et Opérateurs</h2>
    </a>
    <ul>
        <li>Types de base et déclaration de variables</li>
        <li>Constantes et conversions de types</li>
        <li>Opérateurs arithmétiques, logiques et relationnels</li>
        <li>Opérateurs d'assignation et composés</li>
    </ul>
    <a href="C++3.php">
    <h2>Chapitre 3 : Structures de Contrôle et Fonctions</h2>
    </a>
    <ul>
        <li>Instructions conditionnelles (if, else, switch)</li>
        <li>Boucles (for, while, do-while)</li>
        <li>Définition et appel de fonctions</li>
        <li>Passage par valeur et par référence</li>
        <li>Fonctions récursives et surcharge de fonctions</li>
    </ul>
    <a href="C++4.php">
    <h2>Chapitre 4 : POO et Gestion de la Mémoire</h2>
    </a>
    <ul>
        <li>Classes et objets (constructeurs, destructeurs)</li>
        <li>Encapsulation et surcharge d'opérateurs</li>
        <li>Héritage et polymorphisme</li>
        <li>Allocation dynamique (new, delete)</li>
        <li>Pointeurs et références</li>
    </ul>
    <a href="C++5.php">
    <h2>Chapitre 5 : Bibliothèques et Programmation Avancée</h2>
    </a>
    <ul>
        <li>Introduction à la STL (vector, list, map, etc.)</li>
        <li>Gestion des fichiers (ifstream, ofstream)</li>
        <li>Exceptions et gestion des erreurs</li>
        <li>Multithreading et synchronisation</li>
        <li>Optimisation et bonnes pratiques</li>
    </ul>

    <section>
            <div class="button-container">
                <a href="C++1.php">Suivant</a>
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
