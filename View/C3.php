<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chapitre 3 : Contrôle du flux et structures complexes</title>

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
        <h1>Chapitre 3 : Contrôle du flux et structures complexes</h1>

        <section>
            <h2>Instructions conditionnelles</h2>
            <p>Le langage C propose plusieurs instructions conditionnelles qui permettent de contrôler le flux d'exécution :</p>
            <ul>
                <li><strong>if</strong> : Permet d'exécuter un bloc de code si une condition est vraie.</li>
                <li><strong>else</strong> : Fournit une alternative si la condition de l'if est fausse.</li>
                <li><strong>else if</strong> : Chaîne plusieurs conditions.</li>
                <li><strong>switch</strong> : Une structure alternative pour gérer plusieurs cas.</li>
            </ul>
        </section>

        <section>
            <h2>Boucles</h2>
            <p>Les boucles permettent de répéter un bloc de code plusieurs fois :</p>
            <ul>
                <li><strong>for</strong> : Idéal pour un nombre fixe d'itérations.</li>
                <li><strong>while</strong> : Répète tant qu'une condition est vraie.</li>
                <li><strong>do-while</strong> : Exécute au moins une fois le bloc avant de vérifier la condition.</li>
            </ul>
        </section>

        <section>
            <h2>Définition et appel de fonctions</h2>
            <p>Les fonctions sont des blocs de code réutilisables. Elles permettent de structurer un programme et d'éviter la duplication.</p>
            <ul>
                <li>Déclaration et définition de fonctions</li>
                <li>Passage de paramètres par valeur</li>
                <li>Retourner des valeurs</li>
            </ul>
        </section>

        <section>
            <h2>Passage par valeur et par référence</h2>
            <p>En C, les paramètres des fonctions peuvent être passés par valeur ou par référence :</p>
            <ul>
                <li><strong>Par valeur</strong> : Une copie de l'argument est transmise à la fonction.</li>
                <li><strong>Par référence</strong> : Un pointeur vers l'argument est transmis, permettant de modifier l'original.</li>
            </ul>
        </section>

        <section>
            <h2>Fonctions récursives</h2>
            <p>Une fonction est dite récursive si elle s'appelle elle-même. Cela permet de résoudre certains problèmes comme :</p>
            <ul>
                <li>Calcul du factoriel</li>
                <li>Recherche dans un arbre</li>
                <li>Problèmes de type "diviser pour régner"</li>
            </ul>
        </section>

        <section>
            <h2>Tableaux</h2>
            <p>Les tableaux sont des structures qui permettent de stocker plusieurs valeurs :</p>
            <ul>
                <li>Déclaration et initialisation des tableaux unidimensionnels</li>
                <li>Manipulation des tableaux multidimensionnels</li>
                <li>Passage des tableaux aux fonctions</li>
            </ul>
        </section>

        <div class="button-container">
            <a href="C2.php">Précédent</a>
            <a href="C4.php">Suivant</a>
            <a href="Matiére.php">Retour à l'accueil</a>
        </div>
    </body>
</html>
