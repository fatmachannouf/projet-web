<?php
include '../../Controller/CategorieController.php';
include '../../Controller/OffreController.php';

$categorieCtrl = new CategorieController();
$offreCtrl = new OffreController();

$categorie = $categorieCtrl->showCategorie($_GET['id_categorie']);
$offres = [];

if (isset($_GET['id_categorie'])) {
  $id_categorie = $_GET['id_categorie'];
  $offres = $offreCtrl->listOffresByCategorie($id_categorie);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

  <title>EduWell - Education HTML5 Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-eduwell-style.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/lightbox.css">
  <!--

TemplateMo 573 EduWell

https://templatemo.com/tm-573-eduwell

-->
  <style>
    chatbot-container {
      max-width: 800px;
      /* Limit chatbot width for responsiveness */
      margin: 50px auto;
      /* Center chatbot container */
      border-radius: 10px;
      /* Add a subtle rounded border */
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      /* Add a light shadow */
    }

    /* Optional styles for additional customization (comment out if not desired): */

    #chatbot-iframe {
      border: none;
      /* Remove default iframe border */
    }

    /* Style du bouton emoji */
    .emoji-button {
      position: fixed;
      top: 10px;
      right: 10px;
      font-size: 80px;
      /* Augmente la taille de l'emoji */
      width: 100px;
      /* Largeur du bouton */
      height: 100px;
      /* Hauteur du bouton */
      background: none;
      /* Pas de fond pour le bouton */
      border: none;
      /* Pas de bordure */
      cursor: pointer;
      /* Curseur de type "pointer" */
      z-index: 1000;
      /* Toujours au-dessus des autres éléments */
      display: flex;
      /* Centre l'emoji à l'intérieur */
      justify-content: center;
      align-items: center;
    }

    /* Style du conteneur du chatbot */
    #chatbot-wrapper {
      display: none;
      /* Masqué par défaut */
      position: fixed;
      bottom: 20px;
      right: 20px;
      width: 400px;
      height: 600px;
      background-color: #fff;
      border: 1px solid #ddd;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      overflow: hidden;
      z-index: 999;
    }
  </style>
</head>

<body>


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="assets/images/templatemo-eduwell.png" alt="EduWell Template">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#services">COURSES</a></li>
              <li class="scroll-to-section"><a href="#courses">CERTIFICATION</a></li>
              <li class="has-sub">
                <a href="javascript:void(0)">Pages</a>
                <ul class="sub-menu">
                  <li><a href="about-us.html">About Us</a></li>
                  <li><a href="our-services.html">Our Services</a></li>
                  <li><a href="contact-us.html">Contact Us</a></li>
                </ul>
              </li>
              <li class="scroll-to-section"><a href="#testimonials">Testimonials</a></li>
              <li class="scroll-to-section"><a href="#contact-section">Contact Us</a></li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
  <!-- ***** Main Banner Area End ***** -->

  <section class="testimonials" id="testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h6>Formation</h6>
            <h4>Explorez nos offres exclusives et boostez votre carrière avec <em>nos opportunités</em> !</h4>
          </div>
        </div>
        <div class="container-fluid">

          <!-- Content Row -->
          <div class="container mt-5">
            <!-- Affichage du champ input pour la catégorie -->
            <h1 class="text-center">Catégorie <?= isset($categorie) ? htmlspecialchars($categorie['type']) : ''; ?></h1>
            <section class="offers">
              <?php if (!empty($offres)): ?>
                <?php foreach ($offres as $offre): ?>
                  <div class="offer">
                    <?php if (!empty($offre['image'])): ?>
                      <img src="<?php echo htmlspecialchars('assets/images/' . $offre['image']); ?>" alt="<?php echo htmlspecialchars($offre['titre']); ?>" style="max-width: 100%; height: auto;">
                    <?php else: ?>
                      <img src="assets/images/default-placeholder.png" alt="Image non disponible" style="max-width: 100%; height: auto;">
                    <?php endif; ?>

                    <h3>
                      <i class="icon"></i>
                      <a href="OffreDetails.php?id_offre=<?php echo urlencode($offre['id_offre']); ?>">
                        <?php echo htmlspecialchars($offre['titre']); ?>
                      </a>
                    </h3>

                    <p><?php echo htmlspecialchars($offre['description']); ?></p>
                    <p><strong>Durée :</strong> <?php echo htmlspecialchars($offre['duree']); ?></p>
                  </div>
                <?php endforeach; ?>
              <?php else: ?>
                <p class="text-center">Aucune offre trouvée.</p>
              <?php endif; ?>
            </section>
          </div>




        </div>
      </div>
    </div>
  </section>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/lightbox.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/video.js"></script>
  <script src="assets/js/slick-slider.js"></script>
  <script src="assets/js/custom.js"></script>
  <script>
    //according to loftblog tut
    $('.nav li:first').addClass('active');

    var showSection = function showSection(section, isAnimate) {
      var
        direction = section.replace(/#/, ''),
        reqSection = $('.section').filter('[data-section="' + direction + '"]'),
        reqSectionPos = reqSection.offset().top - 0;

      if (isAnimate) {
        $('body, html').animate({
            scrollTop: reqSectionPos
          },
          800);
      } else {
        $('body, html').scrollTop(reqSectionPos);
      }

    };

    var checkSection = function checkSection() {
      $('.section').each(function() {
        var
          $this = $(this),
          topEdge = $this.offset().top - 80,
          bottomEdge = topEdge + $this.height(),
          wScroll = $(window).scrollTop();
        if (topEdge < wScroll && bottomEdge > wScroll) {
          var
            currentId = $this.data('section'),
            reqLink = $('a').filter('[href*=\\#' + currentId + ']');
          reqLink.closest('li').addClass('active').
          siblings().removeClass('active');
        }
      });
    };

    $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
      e.preventDefault();
      showSection($(this).attr('href'), true);
    });

    $(window).scroll(function() {
      checkSection();
    });
    const emojiButton = document.getElementById('emojiButton');
    const chatbotWrapper = document.getElementById('chatbot-wrapper');

    // Toggle chatbot visibility
    emojiButton.addEventListener('click', () => {
      if (chatbotWrapper.style.display === 'none' || chatbotWrapper.style.display === '') {
        chatbotWrapper.style.display = 'block';
      } else {
        chatbotWrapper.style.display = 'none';
      }
    });
  </script>

</body>

</html>