<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours CSS</title>

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
    <h1>Cours CSS</h1>
    <a href="CSS1.php">
    <h2>1. Introduction et Concepts de Base</h2>
    </a>
    <ul>
        <li>Qu'est-ce que CSS ?</li>
        <li>Histoire et rôle de CSS.</li>
        <li>Intégration CSS : inline, interne, externe.</li>
        <li>Sélecteurs de base : élément, classe, ID.</li>
    </ul>

    <a href="CSS2.php">
    <h2>2. Propriétés CSS et Mise en Page</h2>
    </a>
    <ul>
        <li>Couleurs (color, background-color).</li>
        <li>Texte (font-family, font-size, line-height).</li>
        <li>Marges, bordures, padding.</li>
        <li>Box model.</li>
        <li>Positionnement (static, relative, absolute, fixed, sticky).</li>
        <li>Display (block, inline, inline-block, none).</li>
    </ul>

    <a href="CSS3.php">
    <h2>3. Positionnement Avancé et Mise en Page Dynamique</h2>
    </a>
    <ul>
        <li>Flexbox : bases et utilisation.</li>
        <li>Grid : bases et utilisation.</li>
        <li>Transitions et animations.</li>
        <li>Transformations (rotate, scale, skew).</li>
        <li>Filtres et ombrages (box-shadow, text-shadow, filters).</li>
    </ul>

    <a href="CSS4.php">
    <h2>4. Design Responsive et Optimisation</h2>
    </a>
    <ul>
        <li>Concepts de design responsive.</li>
        <li>Media queries : syntaxe et exemples.</li>
        <li>Unités CSS adaptées : %, em, rem, vw, vh.</li>
        <li>Gestion des performances CSS.</li>
        <li>Structuration de code (BEM, conventions).</li>
        <li>Accessibilité et compatibilité navigateur.</li>
    </ul>

    <a href="CSS5.php">
    <h2>5. Outils Avancés et Projets Pratiques</h2>
    </a>
    <ul>
        <li>Introduction aux préprocesseurs (SASS, LESS).</li>
        <li>Utilisation de frameworks CSS (Bootstrap, Tailwind).</li>
        <li>CSS Variables (Custom properties).</li>
        <li>Nouveautés modernes : CSS Houdini, container queries, etc.</li>
        <li>Exercices pratiques : création de maquettes et sites responsives.</li>
    </ul>
    <section>
            <div class="button-container">
                <a href="CSS1.php">Suivant</a>
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
            <button type="submit" value="Reset">Supprimer</button>
        </form>
    </div>  
</body>
</html>
