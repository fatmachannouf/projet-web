<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapitre 5 : Sécurité et bonnes pratiques</title>
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
    <h1>Chapitre 5 : Sécurité et bonnes pratiques</h1>

    <section>
        <h2>1. Sécurité</h2>
        <p>La sécurité est un aspect essentiel du développement en PHP. Voici quelques bonnes pratiques :</p>

        <h3>1.1. Éviter les injections SQL</h3>
        <p>Utilisez des requêtes préparées pour protéger votre base de données contre les attaques par injection SQL :</p>
        <pre><code>&lt;?php
$pdo = new PDO("mysql:host=localhost;dbname=test", "root", "");
$stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE email = :email");
$stmt->bindParam(':email', $email);
$email = "exemple@domaine.com";
$stmt->execute();
$result = $stmt->fetchAll();
?&gt;</code></pre>

        <h3>1.2. Protéger les mots de passe</h3>
        <p>Utilisez la fonction <code>password_hash()</code> pour stocker les mots de passe de manière sécurisée :</p>
        <pre><code>&lt;?php
$mot_de_passe = "monmotdepasse";
$hash = password_hash($mot_de_passe, PASSWORD_BCRYPT);
if (password_verify("monmotdepasse", $hash)) {
    echo "Mot de passe valide";
}
?&gt;</code></pre>
    </section>

    <section>
        <h2>2. Bonnes pratiques</h2>
        <p>Pour écrire un code PHP propre, maintenable et performant, suivez ces conseils :</p>

        <h3>2.1. Organisez votre code</h3>
        <p>Utilisez des fichiers bien structurés et des conventions de nommage cohérentes.</p>

        <h3>2.2. Utilisez des outils de débogage</h3>
        <p>Les outils comme <code>var_dump()</code>, <code>error_log()</code>, ou des extensions comme Xdebug peuvent vous aider à trouver des bugs rapidement.</p>

        <h3>2.3. Évitez les erreurs courantes</h3>
        <ul>
            <li>Validez et assainissez toutes les entrées utilisateur.</li>
            <li>Évitez d'afficher des messages d'erreur en production.</li>
            <li>Activez les rapports d'erreurs en mode développement.</li>
        </ul>
    </section>

    <section>
        <div class="button-container">
            <a href="PHP4.php">Précédent</a>
            <a href="JEUXPHP.php">Suivant</a>
            <a href="Matiére.php">Retour à l'accueil</a>
        </div>
        </section>
</body>
</html>
