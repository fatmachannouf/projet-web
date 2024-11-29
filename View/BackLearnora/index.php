<?php
include '../../Controller/CategorieController.php';
$categorie = new CategorieController();
$categories = $categorie->listCategories();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learnora</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header">
        <div class="navbar">
            <div class="logo-container">
                <img src="logo.png" alt="Learnora Logo" class="logo" width="50px" height="50px">
            </div>
            <nav>
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">SERVICES</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </nav>
        </div>
        <!--<div class="hero">
            <h1>Explorez nos offres exclusives et boostez votre carrière avec nos opportunités !</h1>
            <div class="buttons">
                <button onclick="window.open('offres_stage.html', '_blank')">Offres de stage</button>
            <button onclick="window.open('offres_emploi.html', '_blank')">Offres d'Emploi</button>
            <button onclick="window.open('contrats.html', '_blank')">Contrats et +</button>
            </div>
        </div> -->
        <div class="hero">
            <h1>Explorez nos offres exclusives et boostez votre carrière avec nos opportunités !</h1>
            <div class="buttons">
                <?php foreach ($categories as $category): ?>
                    <button onclick="window.open('<?php echo $category['url']; ?>', '_blank')">
                        <?php echo htmlspecialchars($category['type']); ?>
                    </button>
                <?php endforeach; ?>
                <button onclick="window.open('AddCategorie.php', '_blank')">Ajouter</button>
            </div>
        </div>
    </header>
    <section class="reviews">
        <h2>VOTRE AVIS COMPTE POUR NOUS</h2>
        <div class="review-cards">
            <div class="card">
                <img src="user1.png" alt="User 1">
                <h3>Amine Labed</h3>
                <p>amine.labed@gmail.com</p>
                <p>★★★★★</p>
                <p>"Un site très professionnel avec des offres vraiment intéressantes. Je recommande vivement !"</p>
            </div>
            <div class="card">
                <img src="user2.png" alt="User 2">
                <h3>Yasmine Rouissi</h3>
                <p>rouissi.yasmine@gmail.com</p>
                <p>★★★★★</p>
                <p>"Ce site est une véritable mine d’or pour quiconque cherche à progresser dans sa carrière. Une plateforme facile et fiable."</p>
            </div>
            <div class="card">
                <img src="user3.png" alt="User 3">
                <h3>Iyed Gadhefi</h3>
                <p>iyed.gadhefi@gmail.com</p>
                <p>★★★★★</p>
                <p>"Je suis vraiment impressionné par la diversité des offres proposées sur ce site. Une expérience au top !"</p>
            </div>
        </div>
    </section>
    <footer>
        <p>© 2024 Learnora - Explorez, apprenez, progressez !</p>
    </footer>
</body>
</html>
