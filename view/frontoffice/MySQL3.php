<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapitre 3 : Fonctionnalités Avancées</title>
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
    <h1>Chapitre 3 : Fonctionnalités Avancées</h1>

    <section>
        <h2>Tri et ordonnancement des résultats</h2>
        <p>Organiser les résultats des requêtes avec <code>ORDER BY</code>, en utilisant les options <code>ASC</code> (ordre croissant) et <code>DESC</code> (ordre décroissant).</p>
        <pre><code>SELECT * FROM utilisateurs ORDER BY nom ASC;</code></pre>

        <h2>Fonctions d'agrégation</h2>
        <p>Utiliser des fonctions telles que <code>SUM</code>, <code>AVG</code>, <code>COUNT</code>, <code>MIN</code>, <code>MAX</code>, et <code>GROUP BY</code> pour effectuer des calculs sur les données.</p>
        <pre><code>SELECT categorie, COUNT(*) AS nombre FROM produits GROUP BY categorie;</code></pre>

        <h2>Jointures (Joins)</h2>
        <p>Combiner les données de plusieurs tables avec des jointures : <code>INNER JOIN</code>, <code>LEFT JOIN</code>, <code>RIGHT JOIN</code>, et <code>FULL OUTER JOIN</code>.</p>
        <pre><code>SELECT commandes.id, clients.nom
FROM commandes
INNER JOIN clients ON commandes.client_id = clients.id;</code></pre>

        <h2>Sous-requêtes</h2>
        <p>Utiliser des sous-requêtes pour résoudre des problèmes complexes dans les clauses <code>WHERE</code>, <code>FROM</code>, et <code>SELECT</code>.</p>
        <pre><code>SELECT nom FROM produits WHERE prix > (SELECT AVG(prix) FROM produits);</code></pre>
    </section>

    <section>
        <div class="button-container">
            <a href="MySQL2.php">Précédent</a>
            <a href="MySQL4.php">Suivant</a>
            <a href="Matiére.php">Retour à l'accueil</a>
        </div>
    </section>
</body>
</html>
