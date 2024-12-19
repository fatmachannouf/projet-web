<?php
session_start();
include('C:\xampp\htdocs\projet\controller\CategorieController.php');
$categorie = new CategorieController();
$categories = $categorie->listCategories();
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
<style>chatbot-container {
            max-width: 800px; /* Limit chatbot width for responsiveness */
            margin: 50px auto; /* Center chatbot container */
            border-radius: 10px; /* Add a subtle rounded border */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a light shadow */
        }

        /* Optional styles for additional customization (comment out if not desired): */
        
        #chatbot-iframe {
            border: none; /* Remove default iframe border */
        }
/* Style du bouton emoji */
.emoji-button {
            position: fixed;
            top: 10px;
            right: 10px;
            font-size: 80px; /* Augmente la taille de l'emoji */
            width: 100px; /* Largeur du bouton */
            height: 100px; /* Hauteur du bouton */
            background: none; /* Pas de fond pour le bouton */
            border: none; /* Pas de bordure */
            cursor: pointer; /* Curseur de type "pointer" */
            z-index: 1000; /* Toujours au-dessus des autres éléments */
            display: flex; /* Centre l'emoji à l'intérieur */
            justify-content: center;
            align-items: center;
        }

        /* Style du conteneur du chatbot */
        #chatbot-wrapper {
            display: none; /* Masqué par défaut */
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
        body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      display: flex;
      align-items: center;
      padding: 10px 20px;
      background-color: #f4f4f4;
      border-bottom: 1px solid #ddd;
    }

    .logo {
      display: flex;
      align-items: center;
      text-decoration: none;
      gap: 10px;
    }

    .logo-image {
      width: 80px;
      height: 80px;
      margin-right: 10px;
    }

    .site-name {
      font-size: 24px;
      font-weight: bold;
      color:aliceblue;
    }


    .image-container {
      display: flex;
      justify-content: center; /* Centre horizontalement */
      margin: 20px 20px;          /* Ajoute un espace autour de l'image */
    }

    .image-container img {
      max-width: 500px; /* Ajuste la largeur de l'image */
      width: 300px; /* Définit une taille par défaut pour l'image */
      height: 200px;   /* Maintient les proportions */
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


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="indexp.php" class="logo">
              <img src="assets/images/templatemo-eduwell.png" alt="EduWell Template">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#Cours">COURSES</a></li>
              <li class="scroll-to-section"><a href="#courses">CERTIFICATION</a></li>
              <li class="has-sub">
                <a href="javascript:void(0)">Pages</a>
                <ul class="sub-menu">
                  <li><a href="about-us.html">About Us</a></li>
                  <li><a href="our-services.php">Our Services</a></li>
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

  <!-- ***** Main Banner Area Start ***** -->
  <section class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="header-text">
            <h6>Welcome to our school</h6>
            <h2>Best Place To Learn Programming <em>Language!</em></h2>
            <div class="main-button-gradient">
              <div class="scroll-to-section"><a href="#contact-section">Join Us Now!</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-image">
            <img src="assets/images/body.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="Cours" id="Cours">
    <div class="container">
      <div class="row">
        <!-- Titre centré en haut -->
        <div class="col-lg-12">
          <div class="section-heading" style="text-align: center;">
            <h6>Our Courses</h6>
            <h4>Cours</h4>
          </div>
        </div>
      </div>
      <div class="row align-items-center">

        <div class="col-lg-6 image-container">
            <div class="icon">
                <img src="image.jpg" alt="WEB">
            </div>
          <div class="col-lg-6" >
            <p>Notre plateforme de formation propose une vaste gamme de cours adaptés aux besoins des apprenants, allant des langages de programmation essentiels aux outils avancés pour le développement web et la gestion de données. 
                      Les cours incluent <strong>HTML</strong> et <strong>CSS</strong> pour concevoir des interfaces utilisateur, <strong>JavaScript</strong> pour créer des fonctionnalités dynamiques, et <strong>PHP</strong> pour le développement backend.
                      Nous offrons également une formation approfondie sur <strong>SQL</strong> et <strong>MySQL</strong> pour gérer des bases de données de manière efficace. 
                      En complément, les langages de programmation traditionnels comme <strong>C</strong> et <strong>C++</strong> permettent de développer une compréhension approfondie de la logique informatique et des bases des systèmes.
                      De plus, <strong>Python</strong>, connu pour sa simplicité et sa polyvalence, est parfait pour les débutants et les développeurs expérimentés. 
                      À cela s’ajoutent des matières comme <strong>Ruby</strong>, un langage simple et élégant pour les projets web, et <strong>Java</strong>, une technologie clé pour développer des applications mobiles et des systèmes d'entreprise. 
                      Que vous soyez débutant ou expert, notre plateforme est conçue pour vous accompagner dans votre apprentissage et votre maîtrise des technologies modernes.</p>
          </div> 
          </section>
          <div class="button-container">
              <form action="Matiére.php" method="post">
                  <button type="submit" name="action" value="Lets GO">Lets GO</button>
              </form>
          </div> 
        </div>
      </div>
    </div>
  </section>
  

  <section class="our-courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h2>Our tests</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="tabs">
              <div class="row">
                <div class="col-lg-3">
                  <div class="menu">
                    <div class="active gradient-border"><span>PHP</span></div>
                    <div class="gradient-border"><span>JavaScript</span></div>
                    <div class="gradient-border"><span>JAVA</span></div>
                    <div class="gradient-border"><span>C++</span></div>
                    <button class="emoji-button" id="emojiButton">🙋</button>
                    <!-- Chatbot wrapper containing the iframe -->
                    <div id="chatbot-wrapper">
                      <iframe
                        src="https://www.chatbase.co/chatbot-iframe/liL8fZs9tL5P72Air11OE"
                        width="100%"
                        height="100%"
                        frameborder="0"></iframe>
                    </div>
                  </div>
                </div>
                <div class="col-lg-9">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="left-image">
                          <img src="assets/images/courses-01.jpg" alt="">
                          <div class="price">
                            <h6>$128</h6>
                          </div>
                        </div>
                        <div class="right-content">
                          <h4>PHP</h4>

                          <span>36 Hours</span>
                          <span>4 Weeks</span>
                          <span class="last-span">1 Certificates</span>
                          <div class="text-button">
                            <a href="gg.php">testez-vous ici</a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="assets/images/courses-02.jpg" alt="">
                          <div class="price">
                            <h6>$156</h6>
                          </div>
                        </div>
                        <div class="right-content">
                          <h4>javascript</h4>

                          <span>48 Hours</span>
                          <span>6 Weeks</span>
                          <span class="last-span">1 Certificate</span>
                          <div class="text-button">
                            <a href="js.php">testez-vous ici</a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="assets/images/courses-03.jpg" alt="">
                          <div class="price">
                            <h6>$184</h6>
                          </div>
                        </div>
                        <div class="right-content">
                          <h4>JAVA</h4>

                          <span>28 Hours</span>
                          <span>4 Weeks</span>
                          <span class="last-span">1 Certificate</span>
                          <div class="text-button">
                            <a href="java.php">testez-vous ici</a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="assets/images/courses-04.jpg" alt="">
                          <div class="price">
                            <h6>$76</h6>
                          </div>
                        </div>
                        <div class="right-content">
                          <h4>C++</h4>
                          <span>48 Hours</span>
                          <span>4 Weeks</span>
                          <span class="last-span">2 Certificates</span>
                          <div class="text-button">
                            <a href="c++.php">testez-vous ici</a>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 offset-lg-1">
          <div class="left-image">
            <img src="assets/images/cta-left-image.png" alt="">
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <h6>Get the sale right now!</h6>
          <h4>Up to 50% OFF For 1+ courses</h4>
          <p>Kogi VHS freegan bicycle rights try-hard green juice probably haven't heard of them cliche la croix af chillwave.</p>
          <div class="white-button">
            <a href="contact-us.html">View Courses</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="testimonials" id="testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h6>Formation</h6>
            <h4>Explorez nos offres exclusives et boostez votre carrière avec <em>nos opportunités</em> !</h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">



            <?php foreach ($categories as $categorie): ?>
              <div class="item">
                <p><img src="<?php echo htmlspecialchars('assets/images/' . $categorie['image']); ?>" alt="<?php echo htmlspecialchars($categorie['type']); ?>"></p>
                <h4><i class="icon"></i>
                  <a href="OffreList.php?id_categorie=<?php echo urlencode($categorie['id_categorie']); ?>">
                    <?php echo htmlspecialchars($categorie['type']); ?>
                  </a>
                </h4>
                <span>
                  Cette offre propose un stage immersif et enrichissant permettant aux jeunes talents de découvrir le secteur de l'assurance, de développer leurs compétences et de contribuer à des projets concrets aux côtés de pro.
                </span>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us" id="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div id="map">

            <!-- You just need to go to Google Maps for your own map point, and copy the embed code from Share -> Embed a map section -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7151.84524236698!2d-122.19494600413192!3d47.56605883252286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5490695e625f8965%3A0xf99b055e76477def!2sNewcastle%20Beach%20Park%20Playground%2C%20Bellevue%2C%20WA%2098006%2C%20USA!5e0!3m2!1sen!2sth!4v1644335269264!5m2!1sen!2sth" width="100%" height="420px" frameborder="0" style="border:0; border-radius: 15px; position: relative; z-index: 2;" allowfullscreen=""></iframe>
            <div class="row">
              <div class="col-lg-4 offset-lg-1">
                <div class="contact-info">
                  <div class="icon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <h4>Phone</h4>
                  <span>010-020-0340</span>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="contact-info">
                  <div class="icon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <h4>Mobile</h4>
                  <span>090-080-0760</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6>Contact us</h6>
                  <h4>Say <em>Hello</em></h4>
                  <p>IF you need a working contact form by PHP script, please visit TemplateMo's contact page for more info.</p>
                </div>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="Full Name" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" id="message" placeholder="Your Message"></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-gradient-button">Send Message</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-12">
          <ul class="social-icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-rss"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-12">
          <p class="copyright">Copyright © 2022 EduWell Co., Ltd. All Rights Reserved.

            <br>Design: <a rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a>
            <br>Distribution: <a rel="sponsored" href="https://themewagon.com" target="_blank">ThemeWagon</a>
          </p>
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