<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C++ - Chapitre 2 : Variables, Types et Opérateurs</title>
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
    <h1>Chapitre 2 : Variables, Types et Opérateurs</h1>

    <section>
        <h2>2.1 Types de Base et Déclaration de Variables</h2>
        <p>En C++, les types de base incluent <code>int</code>, <code>float</code>, <code>double</code>, et <code>char</code>.</p>
        <pre><code>int x = 5;
float y = 3.14;</code></pre>
    </section>

    <section>
        <h2>2.2 Constantes et Conversions de Types</h2>
        <p>Les constantes peuvent être déclarées avec <code>const</code>. La conversion entre types peut être faite explicitement avec les castings.</p>
        <pre><code>const int MAX_VALUE = 100;
float pi = 3.14;
int intPi = (int)pi;</code></pre>
    </section>

    <section>
        <h2>2.3 Opérateurs Arithmétiques, Logiques et Relationnels</h2>
        <p>Les opérateurs arithmétiques incluent <code>+</code>, <code>-</code>, <code>*</code>, <code>/</code>. Les opérateurs logiques incluent <code>&&</code>, <code>||</code>, et les opérateurs relationnels incluent <code>==</code>, <code>!=</code>, <code>&lt;</code>.</p>
    </section>

    <section>
        <h2>2.4 Opérateurs d'Assignation et Composés</h2>
        <p>Les opérateurs d'assignation incluent <code>=</code>, <code>+=</code>, <code>-=</code>, <code>*=</code>, etc.</p>
        <pre><code>int a = 10;
a += 5; // a devient 15</code></pre>
    </section>

    <section>
        <div class="button-container">
            <a href="C++1.php">Précédent</a>
            <a href="C++3.php">Suivant</a>
            <a href="Matiére.php">Retour à l'accueil</a>
        </div>
    </section>

</body>
</html>
