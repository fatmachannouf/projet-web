<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C++ - Chapitre 5 : Bibliothèques et Programmation Avancée</title>
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
    <h1>Chapitre 5 : Bibliothèques et Programmation Avancée</h1>

    <section>
        <h2>5.1 Introduction à la STL (vector, list, map, etc.)</h2>
        <p>La Standard Template Library (STL) est une bibliothèque C++ qui fournit des structures de données génériques et des algorithmes optimisés. Voici quelques exemples de structures STL populaires :</p>
        
        <h3>Vector</h3>
        <pre><code>#include <vector>
#include <iostream>
using namespace std;

int main() {
    vector<int> vec = {1, 2, 3, 4, 5};
    vec.push_back(6);
    for (int val : vec) {
        cout << val << " ";
    }
    cout << endl;
    return 0;
}</code></pre>

        <h3>List</h3>
        <pre><code>#include <list>
#include <iostream>
using namespace std;

int main() {
    list<int> lst = {1, 2, 3, 4, 5};
    lst.push_back(6);
    for (int val : lst) {
        cout << val << " ";
    }
    cout << endl;
    return 0;
}</code></pre>

        <h3>Map</h3>
        <pre><code>#include <map>
#include <iostream>
using namespace std;

int main() {
    map<string, int> m;
    m["Alice"] = 30;
    m["Bob"] = 25;
    cout << "Alice : " << m["Alice"] << endl;
    cout << "Bob : " << m["Bob"] << endl;
    return 0;
}</code></pre>
    </section>

    <section>
        <h2>5.2 Gestion des Fichiers (ifstream, ofstream)</h2>
        <p>Les flux de fichiers en C++ sont utilisés pour lire et écrire des données dans des fichiers externes. Voici un exemple de lecture et d'écriture dans un fichier :</p>
        
        <h3>Écriture dans un fichier</h3>
        <pre><code>#include <fstream>
#include <iostream>
using namespace std;

int main() {
    ofstream fichier("exemple.txt");
    if (fichier.is_open()) {
        fichier << "Ceci est une ligne de texte dans le fichier." << endl;
        fichier.close();
    } else {
        cout << "Impossible d'ouvrir le fichier!" << endl;
    }
    return 0;
}</code></pre>

        <h3>Lecture d'un fichier</h3>
        <pre><code>#include <fstream>
#include <iostream>
#include <string>
using namespace std;

int main() {
    ifstream fichier("exemple.txt");
    string ligne;
    if (fichier.is_open()) {
        while (getline(fichier, ligne)) {
            cout << ligne << endl;
        }
        fichier.close();
    } else {
        cout << "Impossible d'ouvrir le fichier!" << endl;
    }
    return 0;
}</code></pre>
    </section>

    <section>
        <h2>5.3 Exceptions et Gestion des Erreurs</h2>
        <p>Les exceptions permettent de gérer les erreurs et les situations anormales pendant l'exécution d'un programme en C++. Voici un exemple de gestion d'exception :</p>
        
        <pre><code>#include <iostream>
#include <stdexcept>
using namespace std;

int diviser(int a, int b) {
    if (b == 0) {
        throw invalid_argument("Division par zéro!");
    }
    return a / b;
}

int main() {
    try {
        cout << diviser(10, 2) << endl;
        cout << diviser(10, 0) << endl;
    } catch (const invalid_argument& e) {
        cout << "Erreur: " << e.what() << endl;
    }
    return 0;
}</code></pre>
    </section>

    <section>
        <h2>5.4 Multithreading et Synchronisation</h2>
        <p>Le multithreading permet d'exécuter plusieurs parties d'un programme en parallèle. Voici un exemple de base d'utilisation des threads :</p>
        
        <pre><code>#include <iostream>
#include <thread>
using namespace std;

void afficherMessage() {
    cout << "Hello from the thread!" << endl;
}

int main() {
    thread t(afficherMessage);
    t.join(); // Attendre la fin du thread
    return 0;
}</code></pre>
    </section>

    <section>
        <h2>5.5 Optimisation et Bonnes Pratiques</h2>
        <p>Lors du développement d'un programme C++, il est important d'optimiser son code pour qu'il soit performant. Voici quelques bonnes pratiques :</p>
        <ul>
            <li>Utiliser les structures de données adaptées pour les besoins spécifiques (ex: <code>std::vector</code>, <code>std::map</code>).</li>
            <li>Limiter l'utilisation des allocations dynamiques et libérer la mémoire lorsque nécessaire.</li>
            <li>Éviter les copies inutiles d'objets en utilisant des références et des pointeurs.</li>
            <li>Profiter des fonctionnalités de la STL pour réduire le code redondant et améliorer la lisibilité.</li>
        </ul>
    </section>

    <section>
        <div class="button-container">
            <a href="C++4.php">Précédent</a>
            <a href="JEUXC++.php">Suivant</a>
            <a href="Matiére.php">Retour à l'accueil</a>
        </div>
    </section>

</body>
</html>
