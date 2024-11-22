<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction à PHP</title>
    <style>
        <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
            padding: 0;
        }
        h1 {
            color: #2c3e50;
            text-align: center;
        }
        h2 {
            color: #16a085;
            border-bottom: 2px solid #16a085;
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
    </style>
</head>
<body>
    <h1>Introduction à PHP</h1>

    <section>
        <h2>Historique et utilisation de PHP</h2>
        <p>PHP a été créé en 1994 par Rasmus Lerdorf. Il est utilisé principalement pour le développement web côté serveur. PHP permet de générer du contenu dynamique sur des pages web.</p>
    </section>

    <section>
        <h2>Installation et configuration de l'environnement</h2>
        <p>PHP peut être installé sur un serveur local comme XAMPP, WAMP, ou MAMP, ou sur un serveur web distant. Il suffit d'installer PHP et un serveur web (Apache, Nginx) pour commencer à coder.</p>
    </section>

    <section>
        <h2>Structure de base d'un fichier PHP</h2>
        <p>Un fichier PHP est généralement inclus dans un fichier HTML à l'aide de la balise <code>&lt;?php ?&gt;</code>. Le code PHP est exécuté côté serveur.</p>
        <pre><code>&lt;?php
echo "Hello, world!";
?&gt;</code></pre>
    </section>

    <section>
        <h2>Syntaxe de base</h2>
        <h3>Variables et types de données</h3>
        <p>Les variables en PHP commencent par un signe dollar (<code>$</code>) et peuvent contenir différents types de données comme <code>string</code>, <code>integer</code>, <code>float</code>, <code>boolean</code>, etc.</p>
        <pre><code>$name = "Alice";</code></pre>

        <h3>Opérateurs et expressions</h3>
        <p>PHP utilise des opérateurs arithmétiques, relationnels, logiques et d'affectation.</p>

        <h3>Structures de contrôle</h3>
        <p>Les structures conditionnelles <code>if</code>, <code>else</code>, et <code>switch</code> sont utilisées pour tester des conditions.</p>
        <pre><code>if ($age >= 18) {
    echo "Vous êtes majeur";
}</code></pre>

        <h3>Boucles</h3>
        <p>Les boucles <code>for</code>, <code>while</code>, et <code>do-while</code> permettent de répéter des actions.</p>
        <pre><code>for ($i = 0; $i < 5; $i++) {
    echo $i;
}</code></pre>
    </section>

    <section>
        <h2>Fonctions</h2>
        <h3>Déclaration et appel de fonctions</h3>
        <p>Les fonctions sont déclarées avec <code>function</code> et appelées par leur nom.</p>
        <pre><code>function sayHello() {
    echo "Bonjour!";
}
sayHello();</code></pre>

        <h3>Paramètres et valeurs de retour</h3>
        <p>Les fonctions peuvent accepter des paramètres et retourner des valeurs avec <code>return</code>.</p>
        <pre><code>function add($a, $b) {
    return $a + $b;
}
echo add(2, 3);</code></pre>

        <h3>Portée des variables</h3>
        <p>Les variables peuvent être locales à une fonction ou globales.</p>

        <h3>Fonctions anonymes (closures)</h3>
        <p>Les fonctions anonymes peuvent être utilisées directement sans nom.</p>
        <pre><code>$greet = function($name) {
    return "Hello, " . $name;
};
echo $greet("Alice");</code></pre>
    </section>

    <section>
        <h2>Tableaux</h2>
        <h3>Tableaux indexés et associatifs</h3>
        <p>Les tableaux peuvent être indexés numériquement ou utiliser des clés associatives.</p>
        <pre><code>$arr = [1, 2, 3];
$assoc = ["name" => "Alice", "age" => 25];</code></pre>

        <h3>Fonctions de manipulation des tableaux</h3>
        <p>PHP offre plusieurs fonctions pour manipuler des tableaux, telles que <code>array_push()</code>, <code>array_pop()</code>, etc.</p>

        <h3>Itération sur des tableaux</h3>
        <p>Les tableaux peuvent être parcourus avec <code>foreach</code>.</p>
        <pre><code>foreach ($arr as $value) {
    echo $value;
}</code></pre>
    </section>

    <section>
        <h2>Gestion des formulaires</h2>
        <h3>Méthodes GET et POST</h3>
        <p>Les méthodes GET et POST sont utilisées pour envoyer des données via des formulaires HTML.</p>

        <h3>Traitement des données de formulaire</h3>
        <p>Les données envoyées par un formulaire sont accessibles via <code>$_GET</code> ou <code>$_POST</code>.</p>
        <pre><code>$name = $_POST['name'];</code></pre>

        <h3>Validation et sécurisation des données</h3>
        <p>Il est essentiel de valider et sécuriser les données pour éviter les attaques comme les injections SQL.</p>
    </section>

    <section>
        <h2>Manipulation des chaînes de caractères</h2>
        <h3>Fonctions pour les chaînes</h3>
        <p>PHP offre de nombreuses fonctions pour manipuler les chaînes, comme <code>strlen()</code>, <code>str_replace()</code>, et <code>substr()</code>.</p>

        <h3>Expressions régulières</h3>
        <p>Les expressions régulières permettent de rechercher et manipuler des chaînes complexes.</p>
    </section>

    <section>
        <h2>Gestion des fichiers</h2>
        <h3>Ouverture, lecture, écriture de fichiers</h3>
        <p>PHP peut ouvrir, lire et écrire des fichiers avec des fonctions comme <code>fopen()</code>, <code>fread()</code>, et <code>fwrite()</code>.</p>

        <h3>Téléchargement et gestion des fichiers</h3>
        <p>PHP permet de gérer les téléchargements de fichiers via des formulaires HTML et le code PHP.</p>

        <h3>Sécurisation des accès aux fichiers</h3>
        <p>Il est important de sécuriser les fichiers pour éviter les accès non autorisés.</p>
    </section>

    <section>
        <h2>Sessions et cookies</h2>
        <h3>Gestion des sessions en PHP</h3>
        <p>Les sessions permettent de stocker des informations persistantes sur le serveur.</p>

        <h3>Utilisation des cookies</h3>
        <p>Les cookies sont utilisés pour stocker des informations côté client.</p>

        <h3>Sécurisation des sessions</h3>
        <p>Il est crucial de sécuriser les sessions pour éviter les détournements.</p>
    </section>

    <section>
        <h2>Programmation orientée objet (POO)</h2>
        <h3>Classes et objets</h3>
        <p>La POO permet de créer des classes et des objets pour organiser le code de manière modulaire.</p>

        <h3>Propriétés et méthodes</h3>
        <p>Les objets ont des propriétés (variables) et des méthodes (fonctions).</p>

        <h3>Constructeurs et destructeurs</h3>
        <p>Les constructeurs sont utilisés pour initialiser des objets, et les destructeurs pour les nettoyer.</p>

        <h3>Héritage et polymorphisme</h3>
        <p>PHP prend en charge l'héritage et le polymorphisme pour réutiliser et étendre le code.</p>
    </section>

    <section>
        <h2>Bases de données avec MySQL</h2>
        <h3>Connexion à une base de données</h3>
        <p>PHP se connecte aux bases de données MySQL avec l'extension <code>mysqli</code> ou PDO.</p>

        <h3>Requêtes SQL (SELECT, INSERT, UPDATE, DELETE)</h3>
        <p>Les requêtes SQL permettent d'interagir avec les bases de données.</p>

        <h3>Préparation et exécution de requêtes sécurisées</h3>
        <p>Les requêtes préparées sont utilisées pour prévenir les injections SQL.</p>
    </section>

    <section>
        <h2>Gestion des erreurs et exceptions</h2>
        <h3>Gestion des erreurs avec try/catch</h3>
        <p>Les blocs <code>try/catch</code> permettent de gérer les exceptions.</p>

        <h3>Types d'exceptions</h3>
        <p>Les exceptions en PHP permettent de gérer les erreurs de manière structurée.</p>

        <h3>Personnalisation des messages d'erreur</h3>
        <p>Il est possible de personnaliser les messages d'erreur pour les utilisateurs.</p>
    </section>

    <section>
        <h2>Sécurité en PHP</h2>
        <h3>Protection contre les injections SQL</h3>
        <p>Les requêtes préparées sont un moyen efficace de protéger les applications contre les injections SQL.</p>

        <h3>Gestion des mots de passe (hashage)</h3>
        <p>Les mots de passe doivent être stockés de manière sécurisée en utilisant des fonctions de hashage comme <code>password_hash()</code>.</p>

        <h3>Sécurisation des données de formulaire et des sessions</h3>
        <p>Il est important de valider et de nettoyer les données des formulaires pour éviter les failles de sécurité.</p>
    </section>

    <section>
        <h2>Utilisation de frameworks PHP</h2>
        <h3>Introduction aux frameworks (Laravel, Symfony, etc.)</h3>
        <p>Les frameworks PHP permettent de gagner du temps en utilisant des bibliothèques et des outils déjà construits.</p>

        <h3>Structure MVC (Modèle-Vue-Contrôleur)</h3>
        <p>Les frameworks suivent souvent l'architecture MVC pour séparer les différentes parties de l'application.</p>

        <h3>Installation et utilisation de composants de framework</h3>
        <p>Les composants d'un framework permettent de réutiliser des fonctionnalités courantes dans une application web.</p>
    </section>

    <section>
        <h2>Bonnes pratiques et optimisation</h2>
        <h3>Structure du code et lisibilité</h3>
        <p>Un code bien structuré et lisible est essentiel pour faciliter la maintenance du projet.</p>

        <h3>Optimisation des performances PHP</h3>
        <p>Il existe plusieurs techniques pour améliorer les performances de PHP, comme l'utilisation du cache ou la gestion de la mémoire.</p>

        <h3>Débogage et tests unitaires</h3>
        <p>Les tests unitaires et le débogage sont des pratiques importantes pour assurer la qualité du code.</p>
    </section>
</body>
</html>
