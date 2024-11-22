<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction à JavaScript</title>
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

<h1>Introduction à JavaScript</h1>

<section>
    <h2>Historique et utilisation de JavaScript</h2>
    <p>JavaScript a été créé en 1995 par Brendan Eich chez Netscape. C'est un langage de programmation principalement utilisé pour rendre les pages web interactives. Il est souvent associé à HTML et CSS pour le développement front-end.</p>
</section>

<section>
    <h2>Installation et configuration</h2>
    <p>JavaScript est intégré directement dans les navigateurs web, il n'y a donc pas besoin d'une installation spécifique. Vous pouvez écrire du code JavaScript directement dans des fichiers HTML en utilisant la balise <code>&lt;script&gt;</code>.</p>
</section>

<section>
    <h2>Syntaxe de base</h2>
    <h3>Variables</h3>
    <p>Les variables peuvent être déclarées en utilisant <code>var</code>, <code>let</code>, ou <code>const</code>.</p>
    <pre><code>let x = 5;</code></pre>
    <h3>Types de données</h3>
    <p>Les types de données incluent <code>string</code>, <code>number</code>, <code>boolean</code>, <code>object</code>, et <code>array</code>.</p>
</section>

<section>
    <h2>Structures de contrôle</h2>
    <h3>Conditionnelles</h3>
    <p>Les structures conditionnelles permettent de tester des conditions avec <code>if</code>, <code>else</code> et <code>switch</code>.</p>
    <pre><code>if (x > 10) { console.log('x est supérieur à 10'); }</code></pre>

    <h3>Boucles</h3>
    <p>Les boucles permettent de répéter des actions. Par exemple, <code>for</code>, <code>while</code>, et <code>do-while</code>.</p>
    <pre><code>for (let i = 0; i < 5; i++) { console.log(i); }</code></pre>
</section>

<section>
    <h2>Fonctions et portée</h2>
    <h3>Déclaration et appel de fonctions</h3>
    <p>Les fonctions sont déclarées avec <code>function</code> et appelées par leur nom.</p>
    <pre><code>function sayHello() { console.log('Hello!'); }</code></pre>

    <h3>Portée des variables</h3>
    <p>Les variables peuvent avoir une portée <code>locale</code> (à l'intérieur d'une fonction) ou <code>globale</code> (en dehors de toute fonction).</p>

    <h3>Fonctions fléchées</h3>
    <p>Les fonctions fléchées (<code>arrow functions</code>) sont une syntaxe plus concise pour écrire des fonctions.</p>
    <pre><code>const add = (a, b) => a + b;</code></pre>
</section>

<section>
    <h2>Tableaux et objets</h2>
    <h3>Manipulation des tableaux</h3>
    <p>Les tableaux permettent de stocker des collections d'éléments.</p>
    <pre><code>let arr = [1, 2, 3, 4];</code></pre>

    <h3>Objets JavaScript</h3>
    <p>Les objets permettent de stocker des paires clé-valeur.</p>
    <pre><code>let person = { name: 'Alice', age: 25 }; </code></pre>

    <h3>Itération sur des structures de données</h3>
    <p>Les boucles <code>for</code> et <code>forEach</code> peuvent être utilisées pour itérer sur des tableaux et objets.</p>
</section>

<section>
    <h2>Manipulation du DOM</h2>
    <h3>Sélection d'éléments HTML</h3>
    <p>Le DOM (Document Object Model) permet de manipuler les éléments HTML d'une page.</p>
    <pre><code>let element = document.getElementById('myElement');</code></pre>

    <h3>Modification du contenu et des attributs</h3>
    <p>Les éléments HTML peuvent être modifiés en changeant leurs attributs ou leur contenu.</p>
    <pre><code>element.textContent = 'Nouveau texte';</code></pre>

    <h3>Événements DOM</h3>
    <p>Les événements permettent de réagir aux actions de l'utilisateur, comme un clic.</p>
    <pre><code>element.addEventListener('click', function() { alert('Clicked!'); });</code></pre>
</section>

<section>
    <h2>Gestion des erreurs</h2>
    <h3>Try/catch</h3>
    <p>Le bloc <code>try/catch</code> permet de gérer les erreurs sans arrêter l'exécution du programme.</p>
    <pre><code>try { let result = riskyFunction(); } catch (error) { console.error(error); }</code></pre>

    <h3>Exceptions et gestion des erreurs</h3>
    <p>Les exceptions peuvent être lancées manuellement avec <code>throw</code>.</p>
</section>

<section>
    <h2>Asynchronisme et Promesses</h2>
    <h3>Callbacks</h3>
    <p>Les callbacks permettent d'exécuter du code après qu'une action soit terminée.</p>

    <h3>Promesses et async/await</h3>
    <p>Les promesses et la syntaxe <code>async/await</code> facilitent la gestion des opérations asynchrones.</p>
    <pre><code>async function fetchData() { let data = await fetch('url'); }</code></pre>
</section>

<section>
    <h2>Modules et import/export</h2>
    <h3>Utilisation de modules</h3>
    <p>Les modules permettent d'organiser le code JavaScript en plusieurs fichiers.</p>

    <h3>Importation et exportation de fonctionnalités</h3>
    <p>Les fonctionnalités peuvent être exportées d'un module et importées dans un autre.</p>
    <pre><code>export const myFunction = () => {}; </code></pre>
    <pre><code>import { myFunction } from './module.js';</code></pre>
</section>

<section>
    <h2>Programmation orientée objet (POO)</h2>
    <h3>Classes et objets</h3>
    <p>La programmation orientée objet permet de créer des classes et des objets pour organiser le code.</p>
    <pre><code>class Person { constructor(name, age) { this.name = name; this.age = age; } }</code></pre>

    <h3>Héritage, polymorphisme</h3>
    <p>L'héritage permet de créer des classes dérivées, et le polymorphisme permet de redéfinir des méthodes.</p>
</section>

<section>
    <h2>Bonnes pratiques et optimisation</h2>
    <h3>Optimisation du code</h3>
    <p>Il est important de rédiger un code efficace et lisible.</p>

    <h3>Sécurité en JavaScript</h3>
    <p>La sécurité est cruciale lors de l'écriture de code JavaScript, notamment contre les attaques comme les injections de code.</p>
</section>
</body>
</html>
