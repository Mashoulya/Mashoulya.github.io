<?php
session_start();

// Récupérer les erreurs et les données soumises depuis la session
$errors = $_SESSION['errors'] ?? [];
$submittedData = $_SESSION['submittedData'] ?? [];

// Nettoyer les données de la session après affichage
unset($_SESSION['errors']);
unset($_SESSION['submittedData']);
?>


<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
</head>    
<body>

<div class="fond">
  
  <!-- navbar -->

  <nav class="nav-menu"id="home">
    <a href="#home">Accueil</a>
    <a href="#about">A propos</a>
    <a href="#my-services">Sérvices</a>
    <a href="#my-portfolio">Portfolio</a>
    <a href="#my-contact">Contact</a>
  </nav>

  <!-- navbar mobile -->

  <input type="checkbox" id="burger-checkbox" class="burger-checkbox">
  <label for="burger-checkbox" class="burger">
    <span class="burger-line"></span>
  </label>
  <div class="nav-links">
    <a href="#home">Accueil</a>
    <a href="#about">À propos</a>
    <a href="#my-services">Services</a>
    <a href="#my-portfolio">Portfolio</a>
    <a href="#my-contact">Contact</a>
  </div>

  <!-- home -->
    
  <div class="home">
    <h1>Maria Ibragimova</h1>
      <p>Développeuse Full Stack</p>
      <a href="CV_M.Ibragimova.pdf"><button class="main-btn">CONSULTER MON CV</button></a>
  </div>

     <!-- dots -->

  <div class="dots">
    <a href="#home">
      <svg class="dot" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"/></svg>
      <span class="tooltip">Accueil</span>
    </a>
    <a href="#about">
      <svg class="dot" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"/></svg>
      <span class="tooltip">À propos</span>
    </a>
    <a href="#my-services">
      <svg class="dot" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"/></svg>
      <span class="tooltip">Services</span>
    </a>
    <a href="#my-portfolio">
      <svg class="dot" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"/></svg>
      <span class="tooltip">Portfolio</span>
    </a>
    <a href="#my-contact">
      <svg class="dot" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"/></svg>
      <span class="tooltip">Contact</span>
    </a>
  </div>
 
 <!-- contacts en bas -->
  
  <div class="main-contact">
    <a href="https://www.linkedin.com/in/maria-ibragimova-24743992/" target="_blank" rel="noopener noreferrer"><img src="img/logo/linkedin1.png" alt=""></a>
    <a href="https://github.com/Mashoulya" target="_blank" rel="noopener noreferrer"><img src="img/logo/github.png" alt=""></a>
  </div>

</div>

<!-- profil -->

<h2 id="about">A propos de moi</h2>

<div class="about-me">
  <div class="about-me-text">                               
    <p>Je suis une linguiste, ayant effectué une reconversion professionnelle en informatique. En tant que développeuse full-stack, je conçois et développe le front-end et le back-end des sites web et applications. Je crée des interfaces utilisateur adaptatives, s'ajustant automatiquement à la taille de l'écran, qu'il s'agisse d'ordinateurs de bureau, de tablettes ou de smartphones. Grâce à mon diplôme en linguistique, je peux également créer des sites web multilingues, offrant ainsi une expérience utilisateur optimale pour une audience internationale.
    <a href="M.Ibragimova_CV.pdf">Explorer mon expérience professionnelle.</a></p>
  </div>
  <div class="my-photo">                
    <img src="img/s-l500.jpg" alt="me" class="my-photo-img">    
  </div> 
</div>

<!-- Compétences -->

<h3>Technologies utilisées</h3>

<div class="skills">
  <div class="skills-item">
    <img src="img/logo1/figma (1).png" alt="Figma" >
    <p>Figma</p>
  </div>
    
  <div class="skills-item">
    <img src="img/logo1/html.png" alt="Html">
    <p>HTML</p>
  </div>
    
  <div class="skills-item">
    <img src="img/logo1/css-3.png" alt="Css">
    <p>CSS</p>
  </div>
           
  <div class="skills-item">
    <img src="img/logo1/bootstrap.png" alt="Bootstrap">
    <p>Bootstrap</p>
  </div>
  
  <div class="skills-item">
    <img src="img/logo1/sass.png" alt="Sass">
    <p>Sass</p>
  </div>

  <div class="skills-item">
    <img src="img/logo1/java-script.png" alt="JavaScript">
    <p>JavaScript</p>
  </div>
    
  <div class="skills-item">
    <img src="img/logo1/icons8-vue-js-144.png" alt="VueJs">
    <p>VueJs</p>
  </div>
       
  <div class="skills-item">
    <img src="img/logo1/php.png" alt="Php">
    <p>Php</p>
  </div>
    
  <div class="skills-item">
    <img src="img/logo1/mysqlworkbench_93532.png" alt="MySql">
    <p>MySQL</p>
  </div>
    
  <div class="skills-item">
    <img src="img/logo1/icons8-symfony-144.png" alt="Symfony">
    <p>Symfony</p>
  </div>
    
  <div class="skills-item">
    <img src="img/logo1/git.png" alt="Git">
    <p>Git</p>
  </div>
    
  <div class="skills-item">
    <img src="img/logo1/github.png" alt="GitHub">
    <p>GitHub</p>
  </div>
</div>
  
<!-- Services -->

<div class="services-img">
  <div class="service-img">
    <p>Création de sites web</p>
    <img src="img/logo1/site.png" alt="site">
  </div>
  <div class="service-img">
    <p>Adaptation du design</p>
      <img src="img/logo1/responsive.png" alt="site">
  </div>
  <div class="service-img">
    <p>Développement front-end</p>
    <img src="img/logo1/front-end.png" alt="site">
  </div>
  <div class="service-img">
    <p>Développement back-end</p>
    <img src="img/logo1/back-end.png" alt="site">
  </div>
</div>
      
<h2 id="my-services">Sérvices proposés</h2>
<p class="service-p">J'offre une gamme complète de services pour créer et maintenir votre site web. Je travaille à partir du <mark>cahier des charges</mark> que nous pouvons élaborer ensemble avec vous assurant ainsi que chaque étape de développement soit alignée sur vos besoins spécifiques.</p>
  
  <div class="services-container">
    <div class="service-type">
      <img src="img/logo2/web-security.png" alt="">
      <p>Création de sites web:</p>
        <ul>
          <li>Sites vitrines</li>
          <li>Blogs</li>
          <li>Portfolios en ligne</li>
          <li>Sites institutionnels</li>
          <li>Sites événementiels</li>
          <li>E-commerce</li>
        </ul>
      </div>
      <div class="service-type">
        <img src="img/logo2/maintenance.png" alt="">
        <p>Maintenance et mises à jour:</p> 
          <ul>
            <li>Ajout de nouvelles fonctionnalités</li>
            <li>Gestions des mises à jour et corrections de bugs</li>
            <li>Protection de votre site contre les menaces en ligne</li>
          </ul>
      </div>
      <div class="service-type">
        <img src="img/logo2/seo.png" alt="">
        <p>SEO (Référencement)</p>
        <ul>
          <li>Optimisation pour les moteurs de recherche pour améliorer votre visibilité en ligne et attirer davantage de visiteurs qualifiés sur votre site web</li>
        </ul>
      </div>
      <div class="service-type">
        <img src="img/logo2/responsive.png" alt="">
        <p>Design et UX/UI:</p>
        <ul>
          <li>Création d'interfaces utilisateur attractives et intuitives.</li>
        </ul>
      </div>
    </div>

 <!-- La modale -->

<div class="overlay"></div>  
<h3>Découvrez mes offres et choisissez la solution qui vous convient le mieux</h3>
<button class="btn-price">Consultez les tarifs pour en savoir plus</button>

      <div class="prices">
          <div class="price-container">
            <div class="price item1">
              <img src="img/logo2/wp.png" alt="wordpress">
              <h4>Sites créés avec le constructeur de sites WordPress</h4>
              <p>(design basique avec des modèles)</p>
              <hr>
              <p><strong>Site vitrine</strong><br>(4-5 pages de base)
              <br><strong>à partir de 500€*</strong>
              <br>Une page supplémentaire: à partir de 50€*</p>
              <hr>
              <p><strong>E-commerce</strong>
                <br>Pages essentielles (Accueil, Produits, Catégories, Panier, Contact)
                <br><strong>à partir de 2000€*</strong>
                <br> Une page supplémentaire: à partir de 150€*
              </p>  
            </div>
            
            <div class="price item2">
              <img src="img/logo2/code-sign.png" alt="code">
              <h4>Sites personnalisés (codés à la main)</h4>
              <p>(design personnalisé)</p>
              <hr>
              <p><strong>Site vitrine</strong><br>(4-5 pages de base)
              <br><strong>à partir de 800€*</strong>
              <br>Une page supplémentaire: à partir de 100€*</p>
              <hr>
              <p><strong>E-commerce</strong> 
                <br>Pages essentielles (Accueil, Produits, Catégories, Panier, Contact)
                <br><strong>à partir de 3000€*</strong>
                <br> Une page supplémentaire: à partir de 200€*
              </p>
            </div>

            <div class="price item3">
              <img src="img/logo2/maintenance (1).png" alt="code">
              <h4>Maintenance</h4>
              <hr>
              <p>50€/mois*</p>
            </div>

            <div class="price item4">
              <img src="img/logo2/seo (1).png" alt="code">
              <h4>SEO (référencement)</h4>
              <hr>
              <p>150€*</p>
            </div>
          </div>
      
          <p class="prix">*Les prix sont donnés à titre indicatif et dépendent de la complexité du projet ainsi que des fonctionnalités et animations ajoutées.</p>
         
      </div>
       

<!-- Portfolio -->

<section class="section-portfolio">

  <h2 id="my-portfolio">Portfolio</h2>

  <div class="box-portfolio">
    <div class="cartes-portfolio">
      <div class="img-portfolio">
        <img src="img/photo_magasin.jpg" alt="kalinka">
      </div>
      <p>Le site pour une épicerie (en production).</p>
    </div>
          
    <div class="cartes-portfolio">
      <div class="img-portfolio">
        <img src="img/0-day.png" alt="0-day">
      </div> 
      <p>Jeu de cartes 0-DAY (projet imaginaire)</p>
    </div>
         
    <div class="cartes-portfolio">
      <div class="img-portfolio">
        <img src="img/img1.jpg" alt="">
      </div>
      <p>Votre projet pourrait être ici.</p>
    </div>
  </div>

</section>

<!-- Contact -->

<h2 id="my-contact">Vous avez une question?</h2>
  <div class="box-contact">
         
    <div class="box-formular">

      <form method="POST" action="validate_form.php" id="contactForm" class="form">
        <div class="form-row">
          <div class="form-group">
            <label for="firstName"></label>
            <input type="text" id="firstName" name="firstName" placeholder="Prénom*" required>
            <div id="fNameError" class="error">Le prénom doit être entre 2 et 30 caractères, avec seulement des lettres et des tirets</div>

            <?php if (isset($errors['firstName'])): ?>
                    <div class="error"><?php echo htmlspecialchars($errors['firstName'], ENT_QUOTES); ?></div>
                <?php endif; ?>

          </div>
          <div class="form-group">
            <label for="lastName"></label>
            <input type="text" id="lastName" name="lastName" placeholder="Nom*" required>
            <div id="nameError" class="error">Le nom doit être entre 2 et 30 caractères, avec seulement des lettres et des tirets</div>

            <?php if (isset($errors['lastName'])): ?>
                    <div class="error"><?php echo htmlspecialchars($errors['lastName'], ENT_QUOTES); ?></div>
                <?php endif; ?>

          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <label for="email"></label>
            <input type="email" id="email" name="email" placeholder="Email*" required>
            <div id="emailError" class="error">Veuillez entrer une adresse email valide</div>

            <?php if (isset($errors['email'])): ?>
                    <div class="error"><?php echo htmlspecialchars($errors['email'], ENT_QUOTES); ?></div>
                <?php endif; ?>

          </div>
          <div class="form-group">
            <label for="tel"></label>
            <input type="tel" id="tel" name="tel" placeholder="Téléphone">
            <div id="telError" class="error">Le téléphone doit contenir exactement 10 chiffres</div>

            <?php if (isset($errors['tel'])): ?>
                    <div class="error"><?php echo htmlspecialchars($errors['tel'], ENT_QUOTES); ?></div>
                <?php endif; ?>

          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <label for="message"></label>
            <textarea id="message" name="message" placeholder="Message*" required></textarea>
            <div id="msgError" class="error">Le message doit contenir entre 5 et 500 mots</div>

            <?php if (isset($errors['message'])): ?>
                    <div class="error"><?php echo htmlspecialchars($errors['message'], ENT_QUOTES); ?></div>
                <?php endif; ?>

          </div>
        </div>
        <span>*Champs obligatoires</span>
        <div class="clientData">
          <input type="checkbox" id="acceptData" name="acceptData" >
          <label for="acceptData">En soumettant ce formulaire, j'accepte que mes données personnelles soient utilisées uniquement pour me recontacter. Pour plus d'informations, veuillez consulter la <a href="">Politique de confidentialité.</a></label>
        </div>

        <?php if (isset($errors['acceptData'])): ?>
            <div class="error"><?php echo htmlspecialchars($errors['acceptData'], ENT_QUOTES); ?></div>
        <?php endif; ?>
        
        <button type="submit" name="send" value="Envoyer">Envoyer</button>
      </form>
   
    </div>

    <div class="contacts">
      <p>Pour discuter de votre projet et demander un devis, n'hésitez pas à me contacter par le moyen qui vous convient le mieux.</p>
        <ul>
          <li>E-mail: email@gmail.com</li>
          <li>Tél: 01 23 45 67 89</li>
          <li><a href=""><img src="img/logo/telegram.png" alt="telegram"></a></li>
        </ul>
    </div>

  </div>

<!-- Footer -->
  
<footer>
  <p> © Copyright 2023 - Maria Ibragimova. Tous droits réservés.</p></br>
  <p><a href="privacy policy_maria-ibragimova.pdf">Politique de confidentialité</a> | <a href="">Mentions légales</a></p>
</footer>

<script src="script.js"></script>
</body>
</html>