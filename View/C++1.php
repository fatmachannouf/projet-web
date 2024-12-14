<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C++ - Chapitre 1 : Introduction et Bases du Langage</title>
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
    <h1>Chapitre 1 : Introduction et Bases du Langage C++</h1>
    
    <section>
        <h2>1.1 Historique et Applications de C++</h2>
        <p>C++ est un langage de programmation orienté objet dérivé du C. Il a été développé par Bjarne Stroustrup à Bell Labs dans les années 1980.</p>
        <ul>
            <li>Applications de C++ : développement logiciel, jeux vidéo, systèmes embarqués, etc.</li>
        </ul>
    </section>

    <section>
        <h2>1.2 Installation et Configuration de l'IDE</h2>
        <p>Pour programmer en C++, vous devez installer un environnement de développement intégré (IDE) tel que Code::Blocks, Visual Studio, ou CLion.</p>
    </section>

    <section>
        <h2>1.3 Structure d'un Programme C++</h2>
        <p>Un programme C++ commence généralement par une fonction <code>main()</>. Voici un exemple simple :</p>
        <pre><code>#include <iostream>
using namespace std;
int main() {
    cout << "Bonjour C++!" << endl;
    return 0;
}</code></pre>
    </section>

    <section>
        <h2>1.4 Commentaires et Instructions de Base (cout, cin)</h2>
        <p>Les commentaires en C++ peuvent être faits avec <code>//</code> pour les commentaires sur une ligne ou avec <code>/* */</code> pour les commentaires multi-lignes.</p>
        <p><code>cout</code> est utilisé pour afficher des données à l'écran, et <code>cin</code> pour obtenir des entrées de l'utilisateur.</p>
    </section>

    <section>
        <h2>1.5 Compilation et Exécution d'un Programme</h2>
        <p>Une fois le programme écrit, vous pouvez le compiler à l'aide d'un compilateur C++ tel que GCC ou Clang, puis l'exécuter à partir de l'IDE ou du terminal.</p>
    </section>

    <section>
        <div class="button-container">
            <a href="C++.php">Précédent</a>
            <a href="C++2.php">Suivant</a>
            <a href="Matiére.php">Retour à l'accueil</a>
        </div>
    </section>

</body>
</html>
