 @extends('layouts/template')
 @section('content')
     <section>
         <div class="container-fluid">
             <div class="row">
                 <div class="col-md-2 navbarLaterale">
                     @include('pagePrincipale/navbarLateral')
                 </div>
                 <div class="col-md-10">
                     <section>
                         <div class="fake-header">
                             <div class="navbar-horizontale">
                                 <div class="navbar navbar-expand-md  navbar-light fixed-top">
                                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#monMenu"
                                         aria-controles="monMenu" aria-label="Menu pour mobile">
                                         <span class="navbar-toggler-icon"></span>
                                     </button>
                                     <div class="collapse navbar-collapse navbar-to-collapse" id="monMenu">
                                         <div class="navbar-nav" ml="auto">
                                             <a class="nav-item nav-link" href="#aPropos">A Propos </a>
                                             <a class="nav-item nav-link" href="#formations">Formations</a>
                                             <a class="nav-item nav-link" href="#competences">Compétences</a>
                                             <a class="nav-item nav-link" href="#experiences">Experiences</a>
                                             <a class="nav-item nav-link" href="#mesApplis">Mes Applis</a>
                                             <a class="nav-item nav-link" href="#loisirs">Loisirs</a>
                                             <a class="nav-item nav-link" href="#vosMessages">Messages</a>
                                             <a class="nav-item nav-link" href="#contact">Contact</a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </section>
                     <!--navbar Photo-->
                     <!-- ======= Hero Section ======= -->
                     <div id="hero" class="d-flex flex-column justify-content-center align-items-center">
                         <div class="hero-container" data-aos="fade-in">
                             <h1>Bienvenue</h1>
                             <p>je suis <span class="typed"></span></p>
                         </div>
                     </div>
                     <!-- End Hero -->
                     <img src="../public/images/images/cabane.jpg" heigth="auto" width="100%">
                     <section class="overflow">
                         <!--à propos-->
                         <section>
                             <div class="container cv">
                                 <div class="row">
                                     <div class="espaceTitre" id="aPropos"></div>
                                     <div class="col-md-12">
                                         <h2>A PROPOS...</h2>
                                     </div>
                                 </div>
                                 <div class="row  card__image ">
                                     <div class="col-md-6 containerApropos" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000"
                                         data-aos-easing="ease-in-sine">
                                         <img src="./../public/images/images/cabanePetit.jpg" class="binary">
                                     </div>
                                     <div class="col-md-6 textApropos" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000"
                                         data-aos-easing="ease-in-sine">
                                         <h3>Développeur Web et Web-Mobile</h3>
                                         <p>Sortie de formation développeur web, passionné par
                                             le language informatique et plus particulièrement dans
                                             les créations de sites web, j'aime autant la partie Front-end que la partie
                                             Back-end.
                                         </p>
                                         <div class="row">
                                             <div class="col-md-6">
                                                 <ul>
                                                     <li>
                                                         <p><i class="fas fa-cog fa-spin"></i><b>Anniversaire:</b> 29
                                                             Septembre 1973</p>
                                                     </li>
                                                     <li>
                                                         <p><i class="fas fa-spinner fa-spin"></i><b>Site Web:</b>
                                                             www.moncv.com
                                                         </p>
                                                     </li>
                                                     <li>
                                                         <p><i class="fas fa-circle-notch fa-spin"></i><b>Téléphone:</b> 06
                                                             86 84 92
                                                             55</p>
                                                     </li>
                                                     <li>
                                                         <p><i class="fas fa-sync fa-spin"></i><b>Ville:</b> Venansault</p>
                                                     </li>
                                                 </ul>
                                             </div>

                                             <div class="col-md-6">
                                                 <ul>
                                                     <li>
                                                         <p><i class="fas fa-spinner fa-spin"></i><b>Age:</b> 47 ans</p>
                                                     </li>
                                                     <li>
                                                         <p><i class="fas fa-stroopwafel fa-spin"></i><b>Diplôme:</b> Bac+2
                                                         </p>
                                                     </li>
                                                     <li>
                                                         <p><i class="fas fa-atom fa-spin"></i><b>Email:</b>
                                                             gael.hamonic@yahoo.fr</p>
                                                     </li>
                                                     <li>
                                                         <p><i class="fas fa-snowflake fa-spin"></i><b>Departement:</b>
                                                             Vendée</p>
                                                     </li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </section>

                         <!--formations-->
                         <section>
                             <div class="container cv" id="container_formations">
                                 <div class="row">
                                     <div class="espaceTitre" id="formations"></div>
                                     <div class="col-md-12">
                                         <h2>FORMATIONS</h2>
                                     </div>
                                 </div>
                                 <div class="row introFormation">
                                     <div class="col-md-4">
                                         <div class="card" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2900"
                                             data-aos-delay="1000">
                                             <div class="card-image">
                                                 <img src="./../public/images/formation/autodidacte.png" alt="Orange" />
                                             </div>
                                             <div class="card-body">
                                                 <div class="card-date">
                                                     <time>2020</time>
                                                 </div>
                                                 <div class="card-title">
                                                     <h3>Auto-formation</h3>
                                                 </div>
                                                 <div class="card-excerpt">
                                                     <p>
                                                         Développement de diverses applications web.</br>
                                                         <span>- Application démo temps-réel de gestion de parties de
                                                             babyfoot:</span>
                                                         (Technologies : Javascript avec Websockets, Node.js, PostgreSQL,
                                                         sans
                                                         ORM)</br>
                                                         <span>- Mon cv en ligne :</span>
                                                         (Technologies : PHP, Laravel 8, MySQL)</br>
                                                         <span>- application de coaching minceur (toujours en
                                                             cours):</span>
                                                         (Technologies : VueJs, Node.js, Bootstrap, PostgreSQL, ORM
                                                         Sequelize)</br>
                                                     </p>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>

                                     <div class="col-md-4">
                                         <div class="card" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000"
                                             data-aos-delay="1500">
                                             <div class="card-image">
                                                 <img src="./../public/images/formation/dev.jpeg" alt="Orange" />
                                             </div>
                                             <div class="card-body">
                                                 <div class="card-date">
                                                     <time>2019</time>
                                                 </div>
                                                 <div class="card-title">
                                                     <h3>Développeur Web</h3>
                                                 </div>
                                                 <div class="card-excerpt">
                                                     <p>
                                                         <span>ARINFO</span> (La roche Sur Yon)</br>
                                                         Mars 2019 à septembre 2019</br>
                                                         <span>-Titre Professionnel:</span>(Développeur Web et Web-Mobile"
                                                         bac+2,
                                                         inscrit au RNCP.)</br>
                                                         <span> Logiciels et outils abordés:</span></br>
                                                         <span>- Environnement serveur:</span>(Hébergement de site web, Ligne
                                                         de commande
                                                         SSH)</br>
                                                         <span>- Langages:</span></br>
                                                         (HTML-CSS, Bootstrap, Javascript, Node JS) </br>
                                                         <span>- CMS:</span></br>
                                                         (Wordpress "survoler")</br>
                                                         <span>- Gestion de projet Web:</span></br>
                                                         (Méthode Scrum Agile)
                                                     </p>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>


                                     <div class="col-md-4">
                                         <div class="card" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000"
                                             data-aos-delay="2000">

                                             <div class="card-image">
                                                 <img src="./../public/images/formation/graphiste.jpg" alt="Orange" />
                                             </div>
                                             <div class="card-body">
                                                 <div class="card-date">
                                                     <time>1991 à 1995</time>
                                                 </div>
                                                 <div class="card-title">
                                                     <h3>Graphiste Décorateur</h3>
                                                 </div>
                                                 <div class="card-excerpt">
                                                     <p>
                                                         <span>-Ecole Pivaut</span> (Nantes)</br>
                                                         Septembre 1991 à juin 1993.</br>
                                                         Formation aux métiers de la communication visuelle - designers
                                                         graphiques - illustrateurs graphistes.</br>
                                                         <span>-Ecole Bonnec</span> (Auray)</br>
                                                         Septembre 1993 à juin 1994.</br>
                                                         Formation à la peinture décorative. Réalisation de
                                                         décor mural dans les édifices et habitats. Lettres à main
                                                         levée.</br>
                                                         <span>-Ecole de formation Inslow en PAO DAO</span> (La
                                                         Rochelle)</br>
                                                         Septembre 1994 à juin 1995.</br>
                                                         Utilisation de logiciels d'infographie type CorelDraw et
                                                         Photoshop.
                                                     </p>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="container cv" id="container_competences">
                                 <div class="row">
                                     <div class="espaceTitre" id="competences"></div>
                                     <div class="col-md-12">

                                         <h2>COMPETENCES</h2>
                                     </div>
                                 </div>
                                 <div class="row introCompetences">
                                     <div class="col-md-6 competencesProgress">
                                         <h3>Front-End</h3>
                                         <p>HTML</p>
                                         <div class="progress">
                                             <small></small>
                                             <div class="progress-done" id="html" data-value="80">
                                             </div>
                                         </div>
                                         <p>CSS</p>
                                         <div class="progress">
                                             <small></small>
                                             <div class="progress-done" id="css" data-value="20">
                                             </div>
                                         </div>
                                         <p>Javascript</p>
                                         <div class=" progress">
                                             <small></small>
                                             <div class="progress-done" id="php" data-value="50">
                                             </div>
                                         </div>
                                         <p>Vue.js</p>
                                         <div class=" progress">
                                             <small></small>
                                             <div class="progress-done" id="php" data-value="50">
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-6 competencesProgress">
                                         <h3>Back-End</h3>
                                         <p>PHP</p>
                                         <div class="progress">
                                             <small></small>
                                             <div class="progress-done" id="NodeJS" data-value="80">
                                             </div>
                                         </div>
                                         <p>Laravel</p>
                                         <div class=" progress">
                                             <small></small>
                                             <div class="progress-done" id="php" data-value="50">
                                             </div>
                                         </div>
                                         <p>Node.js</p>
                                         <div class="progress">
                                             <small></small>
                                             <div class="progress-done" id="MySQL" data-value="20">
                                             </div>
                                         </div>
                                         <p>Express.js</p>
                                         <div class=" progress">
                                             <small></small>
                                             <div class="progress-done" id="php" data-value="50">
                                             </div>
                                         </div>
                                     </div>
                                 </div>

                             </div>
                         </section>
                         <!--EXPERIENCES-->
                         <section>
                             <div class="container cv">
                                 <div class="row">
                                     <div class="espaceTitre" id="experiences"></div>
                                     <div class="col-md-12">
                                         <h2>EXPERIENCES</h2>
                                     </div>
                                 </div>
                                 <div class="photoExperience">
                                     <div class="containerExperiences">
                                         <div class="cadreText" data-aos="slide-right" data-aos-duration="1200">
                                             <p>
                                                 <time>Janvier 2019 à aujourd'hui:</time> </br>

                                             <h5>Développeur Web</h5> </br>
                                             <div class="textExperences">
                                                 - Auto-Formation avec OpenClassrooms (HTML CSS),
                                                 cours d'algorithmie.</br>
                                                 - Formation à ARINFO (Node.js, Express, Bootstrap, Méthode Scrum
                                                 Agile), diplôme Bac+2.</br>
                                                 - Auto-Formation à Javascript et les Websockets, VueJS.</br>
                                                 - Auto-Formation depuis Octobre 2019 en PHP/Laravel/MySQL.</br>
                                             </div>
                                             </p>
                                         </div>

                                         <div class="cadreText" data-aos="slide-up" data-aos-duration="1200">
                                             <p>
                                                 <time>Janvier 2007 à janvier 2018:</time></br>

                                             <h5> Chauffeur Livreur</h5>
                                             </br>
                                             <div class="textExperences">
                                                 - Chauffeur Livreur remplacent sur diverses tournées.</br>
                                                 - Formateur des nouveaux arrivants.</br>
                                                 - Organisation de la tournée pour la livraison.</br>
                                                 - Relation clientèle, résoudre les problèmes en
                                                 cas de perte, détoration, envoie de pieces et leurs suivies.
                                             </div>

                                             </p>
                                         </div>
                                         <div class="cadreText" data-aos="slide-left" data-aos-duration="1200">
                                             <p>
                                                 <time>Mars 1994 à janvier 2007:</time></br>

                                             <h5>Graphiste décorateur </h5> </br>
                                             <div class="textExperences">
                                                 - Réalisation de marquage publicitaire.</br>
                                                 - Polyvalant dans le but de répondre aux besoins du client dans une
                                                 multitude
                                                 de choix pour attirer l'attention sur son produit.</br>
                                                 - Activité exercée aux sein de diverses entreprises du Grand Ouest.
                                                 Les principales :
                                             </div>
                                             <ul>
                                                 <li> Calvez Publicité (4 ans)</li>
                                                 <li> Labbe Publicité (3 ans)</li>
                                                 <li> Ateliers Chenu (2 ans)</li>
                                                 <li> Ouest Enseignes (3 ans)</li>
                                             </ul>

                                             </p>
                                         </div>
                                     </div>
                                 </div>
                         </section>

                         @include('pagePrincipale/mesApplis')

                         @include('pagePrincipale/messages')

                         <!--LOISIRS-->
                         <section>
                             <div class="container cv">
                                 <div class="row">

                                     <div class="espaceTitre" id="loisirs"></div>
                                     <div class="col-md-12">
                                         <h2>LOISIRS</h2>
                                     </div>
                                 </div>
                                 <div class="loisirsGrid">
                                     <div class="img_un galerie_img" data-aos-delay="400" data-aos-duration="2000" data-aos="flip-left">
                                         <p data-aos="fade-right" data-aos-delay="2000">PHYSIQUE</p>
                                     </div>
                                     <div class="img_deux galerie_img" data-aos-delay="400" data-aos-duration="2000" data-aos="flip-up">
                                         <p data-aos="fade-up" data-aos-delay="2200">VOYAGE</p>
                                     </div>
                                     <div class="img_trois galerie_img" data-aos-delay="400" data-aos-duration="2000" data-aos="flip-right">
                                         <p data-aos="fade-right" data-aos-delay="2400">COSMOLOGIE</p>
                                     </div>
                                     <div class="img_quatre galerie_img" data-aos-delay="400" data-aos-duration="2000" data-aos="flip-down">
                                         <p data-aos="fade-down" data-aos-delay="2600">WINDSURF</p>
                                     </div>
                                     <div class="img_cinq galerie_img" data-aos-delay="400" data-aos-duration="2000" data-aos="flip-left">
                                         <p data-aos="fade-left" data-aos-delay="2800">LECTURE</p>
                                     </div>
                                 </div>
                             </div>
                         </section>




                         <!--Contact et form de messages-->
                         <section>
                             <div class="container cv container-bottom">
                                 <div class="row">
                                     <div class="espaceTitre" id="contact"></div>
                                     <div class="col-md-12">
                                         <h2>Contact</h2>
                                     </div>
                                 </div>
                                 <div class="row">
                                     <div class="col-md-6 ">
                                         <div class="containerAdresse">
                                             <div class="adresse">
                                                 <div class="icone">
                                                     <i class="fas fa-map-marker-alt"></i>
                                                     <h5>Ville:
                                                         <p>Venansault</p>
                                                     </h5>
                                                 </div>
                                                 <div class="icone">
                                                     <i class="fas fa-at"></i>
                                                     <h5>Email:
                                                         <p>gael.hamonic@yahoo.fr</p>
                                                     </h5>

                                                 </div>
                                                 <div class="icone">
                                                     <i class="fas fa-mobile-alt"></i>
                                                     <h5>Télephone:
                                                         <p>06 86 84 92 55</p>
                                                     </h5>
                                                 </div>
                                             </div>
                                             <iframe
                                                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d87590.98061208264!2d-1.6116818781238276!3d46.68169540456109!2m3!1f0!2f0!3f0!3m2!1i1366!2i768!4f13.1!3m3!1m2!1s0x480430c1840dcf91%3A0x24f1c5b47ba13082!2s85190%20Venansault!5e0!3m2!1sfr!2sfr!4v1603459912746!5m2!1sfr!2sfr"
                                                 width="100%" height="auto" frameborder="0" style="border:0;" allowfullscreen=""
                                                 aria-hidden="false" tabindex="0"></iframe>
                                         </div>
                                     </div>

                                     <div class="col-md-6 formContainer">
                                         @include('pagePrincipale/formContact')
                                     </div>
                                 </div>
                         </section>
                     </section>
                 </div class="finDemo">
             </div>
         </div>
     </section>
     <footer>
         <div class="copyright">
             <p>Mon cv Gaël H. - 2021.</p>
             <a href="/">Mentions Legals</a>
             <a class="admin" href="{{ url('login') }}" target=_blank>Administateur</a>
         </div>
     </footer>
 @endsection
