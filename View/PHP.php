<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Introduction à PHP</title>

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
        </style>
    </head>
    <body>
        <h1>Introduction à PHP</h1>

        <section>
            <h2>Chapitre 1 : Historique et installation</h2>
            <h3>Historique et utilisation</h3>
            <p>PHP a été créé en 1994 par Rasmus Lerdorf. Il est utilisé principalement pour le développement web côté serveur et permet de générer du contenu dynamique sur des pages web.</p>

            <h3>Installation</h3>
            <p>PHP peut être installé sur un serveur local comme XAMPP, WAMP ou MAMP. Il suffit d’installer PHP et un serveur web (Apache, Nginx) pour commencer à coder.</p>
        </section>

        <section>
            <h2>Chapitre 2 : Structure et syntaxe de base</h2>
            <h3>Structure de base d'un fichier PHP</h3>
            <p>Un fichier PHP est inclus dans un fichier HTML à l'aide de la balise <code>&lt;?php ?&gt;</code>. Le code PHP est exécuté côté serveur.</p>
            <pre><code>&lt;?php
    echo "Hello, world!";
    ?&gt;</code></pre>

            <h3>Variables et types de données</h3>
            <p>Les variables commencent par <code>$</code> et peuvent contenir différents types de données (<code>string</code>, <code>integer</code>, etc.).</p>
            <pre><code>$name = "Alice";</code></pre>

            <h3>Structures de contrôle et boucles</h3>
            <p>PHP offre des structures comme <code>if</code>, <code>switch</code>, et des boucles comme <code>for</code>, <code>while</code>.</p>
            <pre><code>if ($age >= 18) {
        echo "Vous êtes majeur";
    }</code></pre>
        </section>

        <section>
            <h2>Chapitre 3 : Fonctions et tableaux</h2>
            <h3>Fonctions</h3>
            <p>Les fonctions permettent d'organiser le code. Elles acceptent des paramètres et peuvent retourner des valeurs.</p>
            <pre><code>function add($a, $b) {
        return $a + $b;
    }
    echo add(2, 3);</code></pre>

            <h3>Tableaux</h3>
            <p>Les tableaux en PHP peuvent être indexés ou associatifs.</p>
            <pre><code>$arr = [1, 2, 3];
            $assoc = ["name" => "Alice", "age" => 25];</code></pre>
        </section>

        <section>
            <h2>Chapitre 4 : Gestion des formulaires et bases de données</h2>
            <h3>Gestion des formulaires</h3>
            <p>Les méthodes GET et POST sont utilisées pour envoyer des données via des formulaires HTML.</p>
            <pre><code>$name = $_POST['name'];</code></pre>

            <h3>Bases de données</h3>
            <p>PHP peut interagir avec MySQL via PDO ou <code>mysqli</code> pour exécuter des requêtes SQL (SELECT, INSERT, etc.).</p>
            <pre><code>$pdo = new PDO("mysql:host=localhost;dbname=test", "user", "password");</code></pre>
        </section>

        <section>
            <h2>Chapitre 5 : Sécurité et bonnes pratiques</h2>
            <h3>Sécurité</h3>
            <p>Protégez vos applications avec des requêtes préparées pour éviter les injections SQL et utilisez <code>password_hash()</code> pour les mots de passe.</p>

            <h3>Bonnes pratiques</h3>
            <p>Structurez le code pour le rendre lisible et maintenable, et utilisez des outils de débogage pour corriger les erreurs.</p>
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
