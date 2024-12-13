<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Structure du Cours HTML</title>

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
  </style>
</head>
<body>
    <header>
        <h1>Structure du Cours HTML</h1>
    </header>
    <main>
        <section>
            <a href="HTML1.php">
            <h2>1. Introduction à HTML et ses Éléments de Base</h2>
            </a>
            <ul>
                <li>Histoire et rôle de HTML.</li>
                <li>Syntaxe de base et structure d’un document HTML.</li>
                <li>Titres (<code>&lt;h1&gt;</code> à <code>&lt;h6&gt;</code>).</li>
                <li>Paragraphes (<code>&lt;p&gt;</code>).</li>
                <li>Listes (<code>&lt;ul&gt;</code>, <code>&lt;ol&gt;</code>, <code>&lt;li&gt;</code>).</li>
                <li>Liens hypertextes (<code>&lt;a&gt;</code>).</li>
                <li>Images (<code>&lt;img&gt;</code>).</li>
            </ul>
        </section>

        <section>
            <a href="HTML2.php">
            <h2>2. Mise en Forme et Structuration du Contenu</h2>
            </a>
            <ul>
                <li>Formattage du texte : gras, italique, souligné, etc.</li>
                <li>Entités HTML (caractères spéciaux).</li>
                <li>Sections (<code>&lt;header&gt;</code>, <code>&lt;footer&gt;</code>, <code>&lt;main&gt;</code>, <code>&lt;section&gt;</code>, <code>&lt;article&gt;</code>).</li>
                <li>Divisions (<code>&lt;div&gt;</code>) et spans (<code>&lt;span&gt;</code>).</li>
            </ul>
        </section>

        <section>
            <a href="HTML3.php">
            <h2>3. Création de Formulaires et Tableaux</h2>
            </a>
            <ul>
                <li>Champs de formulaire (<code>&lt;input&gt;</code>, <code>&lt;textarea&gt;</code>, <code>&lt;select&gt;</code>, etc.).</li>
                <li>Boutons et validation.</li>
                <li>Création et structure de tableaux (<code>&lt;table&gt;</code>, <code>&lt;tr&gt;</code>, <code>&lt;td&gt;</code>, <code>&lt;th&gt;</code>).</li>
            </ul>
        </section>

        <section>
            <a href="HTML4.php">
            <h2>4. Multimédia et Liens</h2>
            </a>
            <ul>
                <li>Intégration de vidéos (<code>&lt;video&gt;</code>).</li>
                <li>Intégration d’audios (<code>&lt;audio&gt;</code>).</li>
                <li>Intégration d’autres médias (iframe, SVG).</li>
                <li>Attributs globaux et gestion des liens (interne, externe, ancre).</li>
            </ul>
        </section>

        <section>
            <a href="HTML5.php">
            <h2>5. HTML Sémantique et Accessibilité</h2>
            </a>
            <ul>
                <li>Importance des balises sémantiques.</li>
                <li>Amélioration de l’accessibilité et de l’expérience utilisateur.</li>
            </ul>
        </section>
    </main>
    <a href="HTML1.php">Passer au Chapitre 1</a> 
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
