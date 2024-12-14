<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapitre 2 : Structure et syntaxe de base</title>
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
    <h1>Chapitre 2 : Structure et syntaxe de base</h1>

    <section>
        <h2>1. Structure de base d'un fichier PHP</h2>
        <p>Un fichier PHP est intégré dans un fichier HTML en utilisant la balise <code>&lt;?php ?&gt;</code>. Le code PHP est exécuté côté serveur pour générer du contenu dynamique.</p>
        <pre><code>&lt;?php
echo "Bonjour, monde !";
?&gt;</code></pre>
    </section>

    <section>
        <h2>2. Variables et types de données</h2>
        <p>En PHP, les variables commencent par le symbole <code>$</code>. Les types de données incluent :</p>
        <ul>
            <li><code>string</code> : Chaîne de caractères</li>
            <li><code>integer</code> : Nombre entier</li>
            <li><code>float</code> : Nombre à virgule flottante</li>
            <li><code>boolean</code> : Valeurs <code>true</code> ou <code>false</code></li>
            <li><code>array</code> : Tableau</li>
        </ul>
        <pre><code>$nom = "Alice";
$age = 25;
$estMajeur = true;</code></pre>
    </section>

    <section>
        <h2>3. Structures de contrôle</h2>
        <p>PHP offre plusieurs structures de contrôle pour exécuter du code selon certaines conditions :</p>
        <ul>
            <li><strong>Conditionnelle :</strong> <code>if</code>, <code>else</code>, <code>elseif</code>, <code>switch</code></li>
            <li><strong>Boucles :</strong> <code>for</code>, <code>while</code>, <code>do-while</code>, <code>foreach</code></li>
        </ul>
        <pre><code>if ($age >= 18) {
    echo "Vous êtes majeur.";
} else {
    echo "Vous êtes mineur.";
}</code></pre>
    </section>

    <section>
        <div class="button-container">
            <a href="PHP1.php">Précédent</a>
            <a href="PHP3.php">Suivant</a>
            <a href="Matiére.php">Retour à l'accueil</a>
        </div>
        </section>
</body>
</html>
