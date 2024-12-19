<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapitre 1 : Introduction à HTML et ses Éléments de Base</title>
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
    <header>
        <h1>Chapitre 1 : Introduction à HTML et ses Éléments de Base</h1>
    </header>
    <main>
        <section>
            <h2>1. Qu'est-ce que HTML ?</h2>
            <p>HTML (HyperText Markup Language) est le langage standard utilisé pour créer des pages web. Il permet de structurer et de présenter le contenu d'une page web.</p>
            <p>HTML utilise des éléments appelés <b>balises</b> pour structurer le contenu. Une balise HTML est composée de deux parties : une balise d'ouverture et une balise de fermeture.</p>
        </section>

        <section>
            <h2>2. Structure de Base d'un Document HTML</h2>
            <pre>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ma Première Page</title>
    </head>
    <body>
        <h1>Bienvenue sur ma page HTML</h1>
        <p>Ceci est un paragraphe d'exemple.</p>
    </body>
</html>
            </pre>
            <p>La structure de base d'une page HTML est composée de la déclaration <code>&lt;!DOCTYPE html&gt;</code>, suivie des éléments <code>&lt;html&gt;</code>, <code>&lt;head&gt;</code> et <code>&lt;body&gt;</code>.</p>
        </section>

        <section>
            <h2>3. Les Éléments HTML</h2>
            <ul>
                <li><code>&lt;h1&gt;</code> à <code>&lt;h6&gt;</code> pour les titres</li>
                <li><code>&lt;p&gt;</code> pour les paragraphes</li>
                <li><code>&lt;ul&gt;</code>, <code>&lt;ol&gt;</code>, et <code>&lt;li&gt;</code> pour les listes</li>
                <li><code>&lt;a&gt;</code> pour les liens</li>
                <li><code>&lt;img&gt;</code> pour les images</li>
            </ul>
        </section>

        <section>
            <h2>4. Exemples de Code</h2>
            <p>Voici quelques exemples d'éléments HTML courants :</p>
            <pre>
<!-- Exemple d'un lien -->
<a href="Index.php">Visitez notre site</a>

<!-- Exemple d'une image -->
<img src="image.jpg" alt="Description de l'image">

<!-- Exemple de liste -->
<ul>
    <li>Item 1</li>
    <li>Item 2</li>
    <li>Item 3</li>
</ul>
            </pre>
        </section>
    </main>
    <section>
        <div class="button-container">
            <a href="HTML.php">Précédent</a>
            <a href="HTML2.php">Suivant</a>
            <a href="Matiére.php">Retour à l'accueil</a>
        </div>
        </section> 
</body>
</html>
