<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours SQL</title>
    <style>
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
    </style>
</head>
<body>
    <h1>Cours SQL</h1>

    <section>
        <h2>Introduction à SQL</h2>
        <h3>Qu'est-ce que SQL ?</h3>
        <p>SQL (Structured Query Language) est un langage utilisé pour gérer et manipuler des bases de données relationnelles.</p>

        <h3>Historique et importance de SQL dans les bases de données</h3>
        <p>SQL a été créé dans les années 1970 par IBM et est devenu le standard de facto pour la gestion des bases de données relationnelles.</p>
    </section>

    <section>
        <h2>Installation et configuration</h2>
        <h3>Installation d'un SGBD (Système de Gestion de Bases de Données)</h3>
        <p>Un SGBD permet de créer, lire, mettre à jour et supprimer des données dans une base de données.</p>

        <h3>Introduction aux outils de gestion SQL (ex : phpMyAdmin, MySQL Workbench)</h3>
        <p>Les outils comme phpMyAdmin et MySQL Workbench permettent de gérer visuellement les bases de données SQL.</p>
    </section>

    <section>
        <h2>Bases de données et tables</h2>
        <h3>Création d'une base de données</h3>
        <p>Une base de données est un ensemble de tables stockant des informations.</p>

        <h3>Création et gestion des tables</h3>
        <p>Les tables sont constituées de lignes (enregistrements) et de colonnes (attributs).</p>

        <h3>Types de données (int, varchar, date, etc.)</h3>
        <p>Les types de données permettent de spécifier le format des informations dans les colonnes.</p>
    </section>

    <section>
        <h2>Manipulation des données</h2>
        <h3>Insertion de données avec <code>INSERT</code></h3>
        <p>La commande <code>INSERT</code> permet d'ajouter des données dans une table.</p>

        <h3>Mise à jour des données avec <code>UPDATE</code></h3>
        <p>La commande <code>UPDATE</code> permet de modifier des données existantes dans une table.</p>

        <h3>Suppression de données avec <code>DELETE</code></h3>
        <p>La commande <code>DELETE</code> permet de supprimer des enregistrements dans une table.</p>

        <h3>Sélection des données avec <code>SELECT</code></h3>
        <p>La commande <code>SELECT</code> permet de récupérer des données d'une ou plusieurs tables.</p>
    </section>

    <section>
        <h2>Filtres et conditions</h2>
        <h3>Utilisation de <code>WHERE</code> pour filtrer les résultats</h3>
        <p>La clause <code>WHERE</code> permet de filtrer les données selon des conditions spécifiées.</p>

        <h3>Opérateurs logiques (<code>AND</code>, <code>OR</code>, <code>NOT</code>)</h3>
        <p>Les opérateurs logiques permettent de combiner plusieurs conditions dans une requête.</p>

        <h3>Comparaison de valeurs (<code>=</code>, <code>></code>, <code><</code>, <code>LIKE</code>, etc.)</h3>
        <p>Les opérateurs de comparaison permettent de filtrer les résultats en fonction de critères spécifiques.</p>
    </section>

    <section>
        <h2>Tri et ordonnancement des résultats</h2>
        <h3>Tri des résultats avec <code>ORDER BY</code></h3>
        <p>La clause <code>ORDER BY</code> permet de trier les résultats d'une requête selon une ou plusieurs colonnes.</p>

        <h3>Utilisation de <code>ASC</code> et <code>DESC</code></h3>
        <p><code>ASC</code> trie par ordre croissant et <code>DESC</code> par ordre décroissant.</p>
    </section>

    <section>
        <h2>Fonctions d'agrégation</h2>
        <h3>Somme (<code>SUM</code>), moyenne (<code>AVG</code>), comptage (<code>COUNT</code>), minimum (<code>MIN</code>), maximum (<code>MAX</code>)</h3>
        <p>Les fonctions d'agrégation permettent de calculer des valeurs sur un ensemble de données.</p>

        <h3>Utilisation de <code>GROUP BY</code> pour regrouper les résultats</h3>
        <p>La clause <code>GROUP BY</code> permet de regrouper les données en fonction d'une ou plusieurs colonnes.</p>

        <h3>Filtrage des groupes avec <code>HAVING</code></h3>
        <p>La clause <code>HAVING</code> permet de filtrer les groupes après l'agrégation des résultats.</p>
    </section>

    <section>
        <h2>Jointures (Joins)</h2>
        <h3>Jointure interne (<code>INNER JOIN</code>)</h3>
        <p>La jointure interne permet de combiner les enregistrements de deux tables lorsque les valeurs de la clé primaire correspondent.</p>

        <h3>Jointure externe gauche (<code>LEFT JOIN</code>) et droite (<code>RIGHT JOIN</code>)</h3>
        <p>Les jointures externes incluent toutes les données d'une table même si aucune correspondance n'existe dans l'autre table.</p>

        <h3>Jointure complète (<code>FULL OUTER JOIN</code>)</h3>
        <p>La jointure complète retourne toutes les lignes des deux tables, avec des valeurs nulles pour les correspondances manquantes.</p>

        <h3>Jointure croisée (<code>CROSS JOIN</code>)</h3>
        <p>La jointure croisée retourne le produit cartésien des deux tables.</p>
    </section>

    <section>
        <h2>Sous-requêtes</h2>
        <h3>Sous-requêtes dans les clauses <code>WHERE</code>, <code>FROM</code>, et <code>SELECT</code></h3>
        <p>Les sous-requêtes permettent de faire une requête à l'intérieur d'une autre requête.</p>

        <h3>Sous-requêtes scalaires et multiligne</h3>
        <p>Les sous-requêtes peuvent retourner une seule valeur (scalaires) ou plusieurs lignes et colonnes (multiligne).</p>
    </section>

    <section>
        <h2>Indexation</h2>
        <h3>Création et utilisation des index pour améliorer la performance des requêtes</h3>
        <p>Les index sont utilisés pour accélérer la recherche de données dans les tables.</p>

        <h3>Types d'index (index simple, composé, unique)</h3>
        <p>Les types d'index diffèrent selon le nombre de colonnes et les règles de unicité des valeurs.</p>
    </section>

    <section>
        <h2>Transactions et gestion des transactions</h2>
        <h3>Utilisation des transactions (<code>BEGIN</code>, <code>COMMIT</code>, <code>ROLLBACK</code>)</h3>
        <p>Les transactions permettent de regrouper plusieurs opérations SQL sous une seule unité.</p>

        <h3>Verrouillage des enregistrements (<code>LOCK</code>)</h3>
        <p>Le verrouillage des enregistrements permet d'empêcher d'autres utilisateurs de modifier une donnée pendant qu'une transaction est en cours.</p>
    </section>

    <section>
        <h2>Vues (Views)</h2>
        <h3>Création de vues pour simplifier les requêtes complexes</h3>
        <p>Les vues sont des requêtes sauvegardées qui peuvent être utilisées comme des tables.</p>

        <h3>Mise à jour des vues</h3>
        <p>Les vues peuvent parfois être mises à jour pour refléter les changements dans les tables sous-jacentes.</p>
    </section>

    <section>
        <h2>Gestion des utilisateurs et permissions</h2>
        <h3>Création d'utilisateurs SQL</h3>
        <p>Il est possible de créer plusieurs utilisateurs avec des droits d'accès différents.</p>

        <h3>Attribution des droits d'accès (sécurisation de la base de données)</h3>
        <p>Les permissions d'accès sont attribuées pour sécuriser l'accès aux données sensibles.</p>
    </section>

    <section>
        <h2>Triggers et procédures stockées</h2>
        <h3>Création et utilisation des triggers</h3>
        <p>Les triggers sont des procédures qui se déclenchent automatiquement lorsqu'une action spécifique se produit dans la base de données.</p>

        <h3>Création et appel des procédures stockées</h3>
        <p>Les procédures stockées permettent de regrouper plusieurs commandes SQL dans un bloc exécuté par la base de données.</p>
    </section>

    <section>
        <h2>Gestion des erreurs</h2>
        <h3>Manipulation des erreurs avec <code>TRY/CATCH</code></h3>
        <p>Les blocs <code>TRY/CATCH</code> permettent de gérer les erreurs dans les requêtes SQL.</p>

        <h3>Gestion des erreurs SQL courantes</h3>
        <p>Les erreurs SQL courantes peuvent être gérées pour éviter l'échec des opérations.</p>
    </section>

    <section>
        <h2>Optimisation des performances</h2>
        <h3>Analyse des performances des requêtes</h3>
        <p>Il est possible d'analyser la performance des requêtes pour détecter et corriger les goulots d'étranglement.</p>

        <h3>Optimisation des index et des requêtes</h3>
        <p>Optimiser les index et les requêtes améliore la vitesse d'exécution des opérations SQL.</p>
    </section>

    <section>
        <h2>Sauvegardes et récupération de données</h2>
        <h3>Sauvegarde d'une base de données</h3>
        <p>La sauvegarde régulière des bases de données garantit la récupération des données en cas de problème.</p>

        <h3>Restauration des données à partir d'une sauvegarde</h3>
        <p>Il est possible de restaurer une base de données à partir d'une sauvegarde précédente.</p>
    </section>

    <section>
        <h2>Conception de bases de données</h2>
        <h3>Modélisation des données avec les diagrammes entité-relation (ER)</h3>
        <p>Les diagrammes ER sont utilisés pour concevoir la structure des bases de données relationnelles.</p>

        <h3>Normalisation des bases de données (1NF, 2NF, 3NF)</h3>
        <p>La normalisation est un processus qui permet d'éliminer la redondance des données et d'améliorer leur cohérence.</p>
    </section>

    <section>
        <h2>SQL Avancé</h2>
        <h3>SQL dynamique</h3>
        <p>Le SQL dynamique permet de créer des requêtes SQL de manière flexible au moment de l'exécution.</p>

        <h3>Fonctions et opérateurs spécifiques à chaque SGBD</h3>
        <p>Chaque SGBD (comme MySQL, PostgreSQL, etc.) propose des fonctions spécifiques adaptées à son architecture.</p>
    </section>

    <section>
        <h2>SQL et NoSQL</h2>
        <h3>Comparaison entre SQL et NoSQL</h3>
        <p>Les bases de données SQL sont relationnelles, tandis que les bases NoSQL sont orientées document, clé-valeur, ou graphe.</p>

        <h3>Cas d'utilisation de bases de données NoSQL</h3>
        <p>Les bases NoSQL sont souvent utilisées pour des applications avec des besoins de flexibilité et de scalabilité.</p>
    </section>
</body>
</html>
