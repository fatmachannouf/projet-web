<!-- Chapitre 1: Introduction et Syntaxe de Base -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapitre 1 :Introduction et Syntaxe de Base</title>
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
    <h1>Chapitre 1 : Introduction et Syntaxe de Base</h1>
    <h2>1. Historique et applications</h2>
    <p>Python est un langage de programmation créé en 1991 par Guido van Rossum. Connu pour sa simplicité et sa lisibilité, il est utilisé dans divers domaines tels que :</p>
    <ul>
        <li>Développement web</li>
        <li>Analyse de données</li>
        <li>Intelligence artificielle</li>
        <li>Automatisation</li>
    </ul>

    <h2>2. Installation et configuration</h2>
    <p>Pour installer Python :</p>
    <ol>
        <li>Téléchargez Python depuis le site officiel <a href="https://www.python.org/">python.org</a>.</li>
        <li>Installez un éditeur de code comme VSCode ou PyCharm.</li>
    </ol>

    <h2>3. Structure d'un programme</h2>
    <pre><code># Exemple minimal
print("Bonjour, monde !")</code></pre>

    <h2>4. Variables et types de données</h2>
    <p>Python est typé dynamiquement. Quelques types courants :</p>
    <ul>
        <li><code>int</code>: Entiers</li>
        <li><code>float</code>: Nombres à virgule</li>
        <li><code>str</code>: Chaînes de caractères</li>
        <li><code>bool</code>: Booléens</li>
    </ul>

    <h2>5. Opérateurs</h2>
    <p>Exemples :</p>
    <ul>
        <li>Arithmétiques : <code>+, -, *, /</code></li>
        <li>Comparaison : <code>==, !=, <, ></code></li>
        <li>Logiques : <code>and, or, not</code></li>
    </ul>

    <h2>6. Conditions et boucles</h2>
    <pre><code># Conditionnel
x = 10
if x > 5:
    print("x est grand")

# Boucle
for i in range(5):
    print(i)</code></pre>

    <section>
        <div class="button-container">
            <a href="PYTHON.php">Précédent</a>
            <a href="PYTHON2.php">Suivant</a>
            <a href="Matiére.php">Retour à l'accueil</a>
        </div>
        </section>
</body>
</html>


