<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapitre 2 : Mise en Forme et Structuration du Contenu</title>
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
        <h1>Chapitre 2 : Mise en Forme et Structuration du Contenu</h1>
    </header>
    <main>
        <section>
            <h2>1. Formattage du Texte</h2>
            <p>Il est possible de formater le texte dans HTML à l'aide des balises suivantes :</p>
            <ul>
                <li><code>&lt;strong&gt;</code> pour le texte en gras</li>
                <li><code>&lt;em&gt;</code> pour le texte en italique</li>
                <li><code>&lt;u&gt;</code> pour le texte souligné</li>
                <li><code>&lt;s&gt;</code> pour le texte barré</li>
            </ul>
            <pre>
<strong>Texte en gras</strong>
<em>Texte en italique</em>
<u>Texte souligné</u>
<s>Texte barré</s>
            </pre>
        </section>

        <section>
            <h2>2. Les Entités HTML</h2>
            <p>Les entités HTML sont utilisées pour afficher des caractères spéciaux dans une page web.</p>
            <pre>
<!-- Exemple d'entité HTML -->
&lt;div&gt;Mon texte avec un caractère spécial &amp; un autre &lt;/div&gt;
            </pre>
        </section>

        <section>
            <h2>3. Structuration avec <code>&lt;div&gt;</code> et <code>&lt;span&gt;</code></h2>
            <p>Le <code>&lt;div&gt;</code> est un conteneur de bloc, tandis que le <code>&lt;span&gt;</code> est un conteneur en ligne.</p>
            <pre>
<!-- Exemple de <div> -->
<div class="conteneur">
    <p>Le contenu du div</p>
</div>

<!-- Exemple de <span> -->
<p>Le mot <span class="highlight">important</span> est mis en surbrillance.</p>
            </pre>
        </section>
    </main>
    <section>
        <div class="button-container">
            <a href="HTML1.php">Précédent</a>
            <a href="HTML3.php">Suivant</a>
            <a href="Matiére.php">Retour à l'accueil</a>
        </div>
        </section> 
</body>
</html>
