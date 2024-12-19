<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapitre 5 : Manipulation avancée et pratiques professionnelles</title>
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
    <h1>Chapitre 5 : Manipulation avancée et pratiques professionnelles</h1>

    <section>
        <h2>1. Ouverture, lecture, et écriture de fichiers</h2>
        <p>Le langage C permet de manipuler des fichiers grâce à des fonctions standard comme <code>fopen()</code>, <code>fclose()</code>, <code>fread()</code>, et <code>fwrite()</code>.</p>
        <ul>
            <li><b>Exemple d'ouverture et lecture de fichier :</b></li>
            <pre><code>#include &lt;stdio.h&gt;

int main() {
    FILE *file;
    char buffer[100];

    file = fopen("exemple.txt", "r");
    if (file == NULL) {
        printf("Erreur d'ouverture du fichier\n");
        return 1;
    }

    while (fgets(buffer, sizeof(buffer), file)) {
        printf("%s", buffer);
    }

    fclose(file);
    return 0;
}</code></pre>
        </ul>
    </section>

    <section>
        <h2>2. Allocation dynamique de mémoire</h2>
        <p>Les fonctions <code>malloc()</code> et <code>calloc()</code> sont utilisées pour allouer de la mémoire dynamique pendant l'exécution du programme.</p>
        <ul>
            <li><b>Exemple d'allocation dynamique de mémoire :</b></li>
            <pre><code>#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;

int main() {
    int *ptr;
    ptr = (int *)malloc(5 * sizeof(int));

    if (ptr == NULL) {
        printf("Erreur d'allocation mémoire\n");
        return 1;
    }

    for (int i = 0; i < 5; i++) {
        ptr[i] = i + 1;
    }

    for (int i = 0; i < 5; i++) {
        printf("%d ", ptr[i]);
    }

    free(ptr);
    return 0;
}</code></pre>
        </ul>
    </section>

    <section>
        <h2>3. Gestion de la mémoire et fuites de mémoire</h2>
        <p>Il est crucial de libérer toute mémoire allouée avec <code>free()</code> pour éviter les fuites de mémoire.</p>
    </section>

    <section>
        <h2>4. Utilisation des bibliothèques standard C</h2>
        <p>Le langage C offre de nombreuses bibliothèques standard telles que <code>stdio.h</code>, <code>stdlib.h</code>, <code>math.h</code>, et <code>string.h</code> pour diverses opérations.</p>
        <ul>
            <li><b>Exemple d'utilisation de la bibliothèque <code>math.h</code> :</b></li>
            <pre><code>#include &lt;stdio.h&gt;
#include &lt;math.h&gt;

int main() {
    double result = sqrt(25.0);
    printf("La racine carrée de 25 est : %f\n", result);
    return 0;
}</code></pre>
        </ul>
    </section>

    <section>
        <h2>5. Bonnes pratiques de codage</h2>
        <ul>
            <li>Commenter le code correctement.</li>
            <li>Utiliser des noms de variables clairs.</li>
            <li>Diviser le code en fonctions réutilisables.</li>
            <li>Tester régulièrement le code pour assurer son bon fonctionnement.</li>
        </ul>
    </section>

    <section>
        <h2>6. Gestion des erreurs et débogage</h2>
        <p>Il est essentiel de gérer les erreurs dans votre programme pour éviter des plantages imprévus et faciliter le débogage.</p>
    </section>

    <section>
        <div class="button-container">
            <a href="C4.php">Précédent</a>
            <a href="JEUXC.php">Suivant</a>
            <a href="Matiére.php">Retour à l'accueil</a>
        </div>
    </section>
</body>
</html>
