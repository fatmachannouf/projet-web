<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C++ - Chapitre 4 : POO et Gestion de la Mémoire</title>
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
    <h1>Chapitre 4 : POO et Gestion de la Mémoire</h1>

    <section>
        <h2>4.1 Classes et Objets (Constructeurs, Destructeurs)</h2>
        <p>Les classes sont les structures de base de la programmation orientée objet (POO). Un objet est une instance d'une classe. Un constructeur est une méthode spéciale qui est appelée lors de la création d'un objet, tandis qu'un destructeur est appelé lors de la destruction de l'objet.</p>
        <pre><code>class Voiture {
public:
    string marque;
    int annee;

    Voiture(string m, int a) {
        marque = m;
        annee = a;
    }

    ~Voiture() {
        cout << "La voiture " << marque << " a été détruite." << endl;
    }
};

int main() {
    Voiture maVoiture("Toyota", 2020);
    return 0;
}</code></pre>
    </section>

    <section>
        <h2>4.2 Encapsulation et Surcharge d'Opérateurs</h2>
        <p>L'encapsulation consiste à protéger les données en les rendant privées et en fournissant des méthodes publiques pour y accéder. La surcharge d'opérateurs permet de redéfinir le comportement d'un opérateur pour un type personnalisé.</p>
        <pre><code>class Rectangle {
private:
    int largeur, hauteur;

public:
    Rectangle(int l, int h) {
        largeur = l;
        hauteur = h;
    }

    int area() {
        return largeur * hauteur;
    }

    // Surcharge de l'opérateur +
    Rectangle operator+(const Rectangle& r) {
        return Rectangle(largeur + r.largeur, hauteur + r.hauteur);
    }
};

int main() {
    Rectangle r1(5, 10), r2(3, 6);
    Rectangle r3 = r1 + r2; // Surcharge de +
    cout << "Surface du rectangle r3 : " << r3.area() << endl;
    return 0;
}</code></pre>
    </section>

    <section>
        <h2>4.3 Héritage et Polymorphisme</h2>
        <p>L'héritage permet de créer une nouvelle classe à partir d'une classe existante, tandis que le polymorphisme permet à une méthode d'avoir un comportement différent selon l'objet qui l'appelle.</p>
        <pre><code>class Animal {
public:
    virtual void parler() {
        cout << "L'animal fait un bruit." << endl;
    }
};

class Chien : public Animal {
public:
    void parler() override {
        cout << "Le chien aboie." << endl;
    }
};

int main() {
    Animal* animal = new Chien();
    animal->parler(); // Appelle parler() de Chien
    delete animal;
    return 0;
}</code></pre>
    </section>

    <section>
        <h2>4.4 Allocation Dynamique (new, delete)</h2>
        <p>En C++, l'allocation dynamique de mémoire peut être effectuée avec les opérateurs <code>new</code> et <code>delete</code>.</p>
        <pre><code>int* ptr = new int; // Allocation dynamique
*ptr = 42;
cout << *ptr << endl;
delete ptr; // Libération de la mémoire</code></pre>
    </section>

    <section>
        <h2>4.5 Pointeurs et Références</h2>
        <p>Les pointeurs sont utilisés pour stocker l'adresse mémoire d'une variable. Les références sont des alias pour d'autres variables.</p>
        <pre><code>int a = 5;
int* p = &a; // Pointeur vers a
cout << *p << endl; // Affiche la valeur de a

int& ref = a; // Référence vers a
ref = 10; // Modifie a via la référence
cout << a << endl; // Affiche 10</code></pre>
    </section>

    <section>
        <div class="button-container">
            <a href="C++3.php">Précédent</a>
            <a href="C++5.php">Suivant</a>
            <a href="Matiére.php">Retour à l'accueil</a>
        </div>
    </section>

</body>
</html>
