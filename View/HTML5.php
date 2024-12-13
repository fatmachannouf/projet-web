<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Sémantique et Accessibilité</title>
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
        </style>
</head>
<body>
    <header role="banner">
        <h1>HTML Sémantique et Accessibilité</h1>
    </header>
    
    <main role="main">
        <section>
            <h2>1. L'Importance des Balises Sémantiques</h2>
            <p>Les balises sémantiques permettent de structurer correctement une page web et d'améliorer l'accessibilité des contenus pour les utilisateurs et les moteurs de recherche.</p>
            <pre>
                <code>
&lt;header&gt; - Définir l'en-tête du document ou de la section&lt;br&gt;
&lt;footer&gt; - Définir le pied de page&lt;br&gt;
&lt;article&gt; - Utiliser pour les contenus autonomes&lt;br&gt;
&lt;section&gt; - Regrouper des contenus connexes&lt;br&gt;
                </code>
            </pre>
        </section>
        
        <section>
            <h2>2. Accessibilité des Images</h2>
            <p>Il est important de fournir une description textuelle pour chaque image afin que les utilisateurs de lecteurs d'écran puissent comprendre le contenu visuel. Cela se fait grâce à l'attribut `alt`.</p>
            <img src="image-example.jpg" alt="Description de l'image pour les utilisateurs de lecteurs d'écran">
        </section>
        
        <section>
            <h2>3. Navigation au Clavier</h2>
            <p>Pour rendre une page accessible, il est essentiel que tous les éléments interactifs (liens, boutons, formulaires) soient accessibles via le clavier.</p>
            <nav role="navigation">
                <ul>
                    <li><a href="#section1" accesskey="1">Section 1</a></li>
                    <li><a href="#section2" accesskey="2">Section 2</a></li>
                    <li><a href="#section3" accesskey="3">Section 3</a></li>
                </ul>
            </nav>
        </section>

        <section>
            <h2>4. Rôles ARIA</h2>
            <p>Les rôles ARIA (Accessible Rich Internet Applications) peuvent être utilisés pour améliorer l'accessibilité des éléments interactifs sur une page.</p>
            <aside role="complementary">
                <h3>Conseils d'accessibilité</h3>
                <ul>
                    <li>Utilisez des balises sémantiques appropriées.</li>
                    <li>Fournissez des descriptions d'images avec l'attribut alt.</li>
                    <li>Assurez-vous que la page est navigable au clavier.</li>
                </ul>
            </aside>
        </section>
    </main>
    <a href="JEUXHTML.php">Passer au Jeux</a> 
</body>
</html>
