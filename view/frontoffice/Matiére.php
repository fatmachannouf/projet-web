
<?php 
    session_start();
    
?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Matière</title>

        <!-- CSS Links -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/fontawesome.css">
        <link rel="stylesheet" href="assets/css/templatemo-eduwell-style.css">
        <link rel="stylesheet" href="assets/css/owl.css">
        <link rel="stylesheet" href="assets/css/lightbox.css">
        

        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
            }
            .section-heading h6, .section-heading h4 {
                text-align: center;
            }
            .service-item img {
                width: 500%; /* L'image prendra toute la largeur de son conteneur */
                max-width: 1000px; /* Limite la largeur maximale de l'image */
                height: 250px; /* Fixe la hauteur des images */
                object-fit: cover; /* Garantit que l'image couvre tout l'espace sans déformation */

            }

            .owl-service-item .item {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            header {
                display: flex;
                align-items: center;
                padding: 10px 20px;
                background-color: #f4f4f4;
                border-bottom: 1px solid #ddd;
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
    <section class="Cours" id="Cours">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h6>Our Courses</h6>
                    <h4 id="cours-title" name="cours-title">Cours</h4> <!-- Titre -->
                </div>
                <div style="text-align: center; margin-top: 20px;">
                    <input type="text" id="search-bar" placeholder="Rechercher un cours..." style="width: 50%; padding: 10px; font-size: 16px; border-radius: 25px; border: 1px solid #ddd; outline: none; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);"/><p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="owl-service-item owl-carousel">
                    <!-- HTML Course -->
                    <div class="item">
                        <div class="service-item">
                            <div class="icon">
                                <a href="HTML.php">
                                    <img src="html.png" alt="HTML" width="20" height="10" id="html-image" name="html-image">
                                </a>
                            </div>
                            <h4 id="html-title" name="html-title">HTML</h4>
                            <p id="html-description" name="html-description">HTML is the standard markup language for Web pages. With HTML you can create your own Website. HTML is easy to learn - You will enjoy it!</p>
                        </div>
                    </div>
                    <!-- CSS Course -->
                    <div class="item">
                        <div class="service-item">
                            <div class="icon">
                                <a href="CSS.php">
                                    <img src="css.png" alt="CSS" id="css-image" name="css-image">
                                </a>
                            </div>
                            <h4 id="css-title" name="css-title">CSS</h4>
                            <p id="css-description" name="css-description">CSS is the language we use to style an HTML document. CSS describes how HTML elements should be displayed. This tutorial will teach you CSS from basic to advanced.</p>
                        </div>
                    </div>
                    <!-- JavaScript Course -->
                    <div class="item">
                        <div class="service-item">
                            <div class="icon">
                                <a href="JavaScript.php">
                                    <img src="JS.png" alt="JS" id="js-image" widht="5" height="10" name="js-image">
                                </a>
                            </div>
                            <h4 id="js-title" name="js-title">JavaScript</h4>
                            <p id="js-description" name="js-description">JavaScript is the world's most popular programming language. JavaScript is the programming language of the Web. JavaScript is easy to learn. This tutorial will teach you JavaScript from basic to advanced.</p>
                        </div>
                    </div>
                    <!-- PHP Course -->
                    <div class="item">
                        <div class="service-item">
                            <div class="icon">
                                <a href="PHP.php">
                                    <img src="php.png" alt="PHP" id="php-image" name="php-image">
                                </a>
                            </div>
                            <h4 id="php-title" name="php-title">PHP</h4>
                            <p id="php-description" name="php-description">PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages. PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft's ASP.</p>
                        </div>
                    </div>
                    <!-- SQL Course -->
                    <div class="item">
                        <div class="service-item">
                            <div class="icon">
                                <a href="SQL.php">
                                    <img src="sql.png" alt="SQL" id="sql-image" name="sql-image">
                                </a>
                            </div>
                            <h4 id="sql-title" name="sql-title">SQL</h4>
                            <p id="sql-description" name="sql-description">SQL is a standard language for storing, manipulating and retrieving data in databases. Our SQL tutorial will teach you how to use SQL in: MySQL, SQL Server, MS Access, Oracle, Sybase, Informix, Postgres, and other database systems.</p>
                        </div>
                    </div>
                    <!-- MySQL Course -->
                    <div class="item">
                        <div class="service-item">
                            <div class="icon">
                                <a href="MySQL.php">
                                    <img src="Images/MySQL.png" alt="MySQL" id="mysql-image" name="mysql-image">
                                </a>
                            </div>
                            <h4 id="mysql-title" name="mysql-title">MySQL</h4>
                            <p id="mysql-description" name="mysql-description">MySQL is a widely used relational database management system (RDBMS). MySQL is free and open-source. MySQL is ideal for both small and large applications.</p>
                        </div>
                    </div>
                    <!-- C Course -->
                    <div class="item">
                        <div class="service-item">
                            <div class="icon">
                                <a href="C.php">
                                    <img src="Images/C.png" alt="C" id="c-image" name="c-image">
                                </a>
                            </div>
                            <h4 id="c-title" name="c-title">C</h4>
                            <p id="c-description" name="c-description">C is a general-purpose programming language that has been widely used for over 50 years. C is very powerful; it has been used to develop operating systems, databases, applications, etc.</p>
                        </div>
                    </div>
                    <!-- C++ Course -->
                    <div class="item">
                        <div class="service-item">
                            <div class="icon">
                                <a href="C++.php">
                                    <img src="Images/C++.png" alt="C++" id="cpp-image" name="cpp-image">
                                </a>
                            </div>
                            <h4 id="cpp-title" name="cpp-title">C++</h4>
                            <p id="cpp-description" name="cpp-description">C++ is a popular programming language. C++ is used to create computer programs, and is one of the most used language in game development. C++ was developed as an extension of C, and both languages have almost the same syntax.</p>
                        </div>
                    </div>
                    <!-- Python Course -->
                    <div class="item">
                        <div class="service-item">
                            <div class="icon">
                                <a href="PYTHON.php">
                                    <img src="python.jpg" alt="PYTHON" id="python-image" name="python-image">
                                </a>
                            </div>
                            <h4 id="python-title" name="python-title">PYTHON</h4>
                            <p id="python-description" name="python-description">Python is a popular programming language. Python can be used on a server to create web applications.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="button-container">
            <form action="Read.php" method="post">
                <button type="submit" name="action" value="Lire">Lire</button>
            </form>
            <form action="Create.php" method="post">
                <button type="submit" name="action" value="Ajouter">Ajouter</button>
            </form>
            <form action="Update.php" method="post">
                <button type="submit" name="action" value="Modifier">Modifier</button>
            </form>
            <form action="Delete.php" method="post">
                <button type="Submit" value="Reset">Supprimer</button>
            </form>
        </div>  
    </section>

    <div class="button-container">
        <a href="Index.php"><button type="button">Retour à la page Home</button></a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.owl-service-item').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: { items: 1 },
                    600: { items: 2 },
                    1000: { items: 3 }
                }
            });
        });
    </script>
    </body>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const searchInput = document.getElementById("search-bar"); // Id correspondant à votre barre de recherche
        const courseItems = document.querySelectorAll(".owl-service-item .item"); // Sélecteur pour les cours

        function filterCourses() {
            const query = searchInput.value.toLowerCase();

            courseItems.forEach(function (item) {
                // Variables pour chaque champ
                const title = item.querySelector("h4").textContent.toLowerCase(); // Titre du cours
                const description = item.querySelector("p").textContent.toLowerCase(); // Description du cours
                const matchesQuery = title.includes(query) || description.includes(query);

                if (matchesQuery) {
                    item.style.display = ""; // Afficher l'élément
                } else {
                    item.style.display = "none"; // Masquer l'élément
                }
            });
        }

        searchInput.addEventListener("input", filterCourses); // Détecte les changements dans la barre de recherche
        $('.owl-service-item').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: { items: 1 },
                600: { items: 2 },
                1000: { items: 3 }
            }
        });

    });
</script>


</html>

