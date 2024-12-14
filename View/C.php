<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cours de Langage C</title>
        
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
    <h1>Cours de Langage C</h1>

    <section>
        <a href="C1.php">
        <h2>Chapitre 1 : Introduction au langage C</h2>
        </a>
        <ul>
            <li>Historique et contexte</li>
            <li>Applications du langage C</li>
            <li>Installation de l'environnement de développement</li>
            <li>Structure d'un programme en C</li>
            <li>Les commentaires</li>
            <li>Les instructions de base (printf, scanf)</li>
            <li>Compilation et exécution d'un programme C</li>
        </ul>
    </section>

    <section>
        <a href="C2.php">
        <h2>Chapitre 2 : Bases du C : Variables, Types, et Opérateurs</h2>
        </a>
        <ul>
            <li>Types de base (int, float, char, etc.)</li>
            <li>Déclaration et initialisation de variables</li>
            <li>Constantes et littéraux</li>
            <li>Opérateurs arithmétiques, logiques, de comparaison</li>
            <li>Opérateurs bit à bit</li>
            <li>Opérateurs d'assignation</li>
        </ul>
    </section>

    <section>
        <a href="C3.php">
        <h2>Chapitre 3 : Contrôle du flux et structures complexes</h2>
        </a>
        <ul>
            <li>Instructions conditionnelles (if, else, switch)</li>
            <li>Boucles (for, while, do-while)</li>
            <li>Définition et appel de fonctions</li>
            <li>Passage par valeur et par référence</li>
            <li>Fonctions récursives</li>
            <li>Tableaux unidimensionnels et multidimensionnels</li>
            <li>Manipulation des tableaux</li>
            <li>Passer des tableaux aux fonctions</li>
        </ul>
    </section>

    <section>
        <a href="C4.php">
        <h2>Chapitre 4 : Concepts avancés du C : Pointeurs et Structures</h2>
        </a>
        <ul>
            <li>Définition et utilisation des pointeurs</li>
            <li>Pointeurs et tableaux</li>
            <li>Pointeurs et fonctions</li>
            <li>Allocation dynamique de mémoire (malloc, free)</li>
            <li>Définition et utilisation de structures</li>
            <li>Accès aux membres des structures</li>
            <li>Pointeurs vers des structures</li>
            <li>Manipulation de chaînes de caractères</li>
            <li>Fonctions standard de manipulation de chaînes</li>
        </ul>
    </section>

    <section>
        <a href="C5.php">
        <h2>Chapitre 5 : Manipulation avancée et pratiques professionnelles</h2>
        </a>
        <ul>
            <li>Ouverture, lecture, et écriture de fichiers</li>
            <li>Manipulation des fichiers avec les fonctions standard (fopen, fclose, fread, fwrite)</li>
            <li>Allocation dynamique de mémoire (malloc, calloc)</li>
            <li>Libération de mémoire (free)</li>
            <li>Problèmes de gestion de mémoire (fuites de mémoire)</li>
            <li>Utilisation des bibliothèques standard C (stdio.h, stdlib.h, math.h, string.h, etc.)</li>
            <li>Bonnes pratiques de codage</li>
            <li>Gestion des erreurs</li>
            <li>Débogage et tests</li>
            <li>Manipulation des fichiers binaires</li>
            <li>Utilisation des structures de données avancées</li>
            <li>Systèmes d'exploitation et programmation système en C</li>
        </ul>
    </section>

    <section>
            <div class="button-container">
                <a href="C1.php">Suivant</a>
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
