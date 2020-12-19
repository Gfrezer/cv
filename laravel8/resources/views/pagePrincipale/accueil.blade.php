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

                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#monMenu" aria-controles="monMenu" aria-label="Menu pour mobile">
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
                        <h1>Welcome</h1>
                        <p>je suis <span class="typed"></span></p>
                    </div>
                </div>
                <!-- End Hero -->
                <img src="../public/images/images/cabane.jpg" heigth="auto" width="100%">
                <section class="overflow">
                    <!--à propos-->
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="espaceTitre" id="aPropos"></div>
                                <div class="col-md-12">
                                    <h2>A PROPOS...</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 containerApropos" data-aos="fade-right" data-aos-delay="500"
                                    data-aos-duration="1000" data-aos-easing="ease-in-sine">
                                    <img src="./../public/images/images/cabanePetit.jpg" class="binary">
                                </div>
                                <div class="col-md-6 textApropos" data-aos="fade-left" data-aos-delay="500"
                                    data-aos-duration="1000" data-aos-easing="ease-in-sine">
                                    <h3>Développeur Web et Web-Mobile</h3>
                                    <p>Sortie de formation développeur web, passionné par
                                        le language informatique et plus particulièrement dans
                                        les créations de sites web, j'aime autant la partie Front-end que la partie
                                        Back-end

                                    </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul>
                                                <li>
                                                    <p><b>Anniversaire:</b> 29 Septembre 1973</p>
                                                </li>
                                                <li>
                                                    <p><b>Site Web:</b>www.moncv.com</p>
                                                </li>
                                                <li>
                                                    <p><b>Téléphone:</b>06 86 84 92 55</p>
                                                </li>
                                                <li>
                                                    <p><b>Ville:</b>Venansault</p>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-6">
                                            <ul>
                                                <li>
                                                    <p><b>Age:</b>47 ans</p>
                                                </li>
                                                <li>
                                                    <p><b>Diplôme:</b>Bac+2</p>
                                                </li>
                                                <li>
                                                    <p><b>Email:</b>gael.hamonic@yahoo.fr</p>
                                                </li>
                                                <li>
                                                    <p><b>Departement:</b>Vendée</p>
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
                        <div class="container" id="container_formations">
                            <div class="row">
                                <div class="espaceTitre" id="formations"></div>
                                <div class="col-md-12">

                                    <h2>FORMATIONS</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                                        data-aos-duration="2900" data-aos-delay="1000">

                                        <div class="card-image">
                                            <img src="./../public/images/formation/autodidacte.png" alt="Orange" />
                                        </div>

                                        <div class="card-body">

                                            <div class="card-date">
                                                <time>Depuis octobre 2019</time>
                                            </div>

                                            <div class="card-title">
                                                <h3>Auto-formation</h3>
                                            </div>

                                            <div class="card-excerpt">
                                                <p>
                                                    Développement de diverses applications web :
                                                    - application de coaching minceur (toujours en cours)
                                                    Technologies : VueJs, Node.js, Bootstrap, PostgreSQL, ORM Sequelize
                                                    - application démo temps-réel de gestion de parties de babyfoot
                                                    Technologies : Javascript avec Websockets, Node.js, PostgreSQL sans
                                                    ORM
                                                    - application de gestion de parties de palet vendéen
                                                    Technologies : Javascript, Node.js, Postgresql
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="card" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                                        data-aos-duration="2000" data-aos-delay="1500">

                                        <div class="card-image">
                                            <img src="./../public/images/formation/dev.jpeg" alt="Orange" />
                                        </div>

                                        <div class="card-body">

                                            <div class="card-date">
                                                <time>Depuis octobre 2019</time>
                                            </div>

                                            <div class="card-title">
                                                <h3>Développeur Web</h3>
                                            </div>

                                            <div class="card-excerpt">
                                                <p>
                                                    ARINFO La roche Sur Yon
                                                    Février 2019 à septembre 2019
                                                    Titre Professionnel "Développeur Web et Web-Mobile" bac+2, inscrit
                                                    au RNCP </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="card" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                                        data-aos-duration="2000" data-aos-delay="2000">

                                        <div class="card-image">
                                            <img src="./../public/images/formation/graphiste.jpg" alt="Orange" />
                                        </div>

                                        <div class="card-body">

                                            <div class="card-date">
                                                <time>Depuis octobre 2019</time>
                                            </div>

                                            <div class="card-title">
                                                <h3>Graphiste</h3>
                                            </div>

                                            <div class="card-excerpt">
                                                <p>
                                                    Ecole Pivaut (Nantes)
                                                    Septembre 1991 à juin 1993
                                                    Formation à la peinture décorative. Réalisation de fresque, décor
                                                    mural dans
                                                    édifices et habitats. Lettres à main levée.
                                                    Utilisation de logiciels d'infographie type CorelDraw et Photoshop
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container" id="container_competences">
                            <div class="row">
                                <div class="espaceTitre" id="competences"></div>
                                <div class="col-md-12">

                                    <h2>COMPETENCES</h2>
                                </div>
                            </div>
                            <div class="row">
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
                                    <h3>back-End</h3>
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
                        <div class=" container">
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
                                            <time>Janvier 2019 à décembre 2020:</time> </br>

                                        <h5>Développeur Web</h5> </br>
                                        <div class="textExperences">
                                            Auto-Formation avec OpenClassrooms (HTML CSS),
                                            cours d'algorithmie,</br>
                                            Formation de 6 mois à ARINFO (Node.js, Express, Bootstrap, Méthode Scrum
                                            Agile), diplome Bac+2.</br>
                                            Auto-Formation à Javascript et les Websockets, VueJS.</br>
                                            Auto-Formation depuis Octobre 2019 en PHP/Laravel/MySQL.</br>
                                        </div>
                                        </p>
                                    </div>

                                    <div class="cadreText" data-aos="slide-up" data-aos-duration="1200">
                                        <p>
                                            <time>Janvier 2007 à janvier 2018:</time></br>

                                        <h5> Chauffeur Livreur</h5>
                                        </br>
                                        <div class="textExperences">
                                            Chauffeur Livreur remplacent sur diverses tournées,
                                            formateur des nouveaux arrivants.
                                            Organisation de la tournée pour la livraison,
                                            Relation clientèle, résoudre les problèmes en
                                            cas de perte, détoration, envoie de pieces et leurs suivies.
                                        </div>

                                        </p>
                                    </div>
                                    <div class="cadreText" data-aos="slide-left" data-aos-duration="1200">
                                        <p>
                                            <time>Mars 1994 à janvier 2007:</time></br>

                                        <h5>Graphiste décorateur </h5> </br>
                                        <div class="textExperences">
                                            Réalisation de marquage publicitaire.
                                            Polyvalant dans le but de répondre aux besoins du client dans une multitude
                                            de choix pour attirer l'attention sur son produit.
                                            Activité exercée aux sein de diverses entreprises du Grand Ouest.
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


                    <!--MES APPLIS-->
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="espaceTitre" id="mesApplis"></div>
                                    <h2>MES APPLIS</h2>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card cardApplis" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                                        data-aos-duration="2900" data-aos-delay="1000">
                                        <div class="card-body">
                                            <div class="card-title">
                                                <h4>BABYFOOT</h4>
                                            </div>
                                            <div class="card-excerpt">
                                                <p>
                                                    Application web permetant de créer des parties de babyfoot en
                                                    collaboration et en temps réel.
                                                <ul>
                                                    <li> Node.js</li>
                                                    <li> Express.js</li>
                                                    <li> Postgresql</li>
                                                    <li> ORM Sequelize</li>
                                                </ul>
                                                <a target="_blank" type="button"
                                                    href="https://github.com/Gfrezer/babyfoot"
                                                    class="btn btn-rounded  btnValidez"><i class="fas fa-cogs pr-2"
                                                        aria-hidden="true">DEMO</i>
                                                </a>
                                                <a target="_blank" type="button"
                                                    href="https://github.com/Gfrezer/babyfoot"
                                                    class="btn btn-rounded  btnValidez"><i class="fab fa-github pr-2"
                                                        aria-hidden="true">GITHUB</i>
                                                </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card cardApplis" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                                        data-aos-duration="2000" data-aos-delay="1500">
                                        <div class="card-body">
                                            <div class="card-title">
                                                <h4>MON BLOG</h4>
                                            </div>
                                            <div class="card-excerpt">
                                                <p>
                                                    Application web permetant de créer des parties de babyfoot en
                                                    collaboration et en temps réel.
                                                <ul>
                                                    <li> Node.js</li>
                                                    <li> Express.js</li>
                                                    <li> Postgresql</li>
                                                    <li> ORM Sequelize</li>
                                                </ul>
                                                <a target="_blank" type="button"
                                                    href="https://github.com/Gfrezer/babyfoot"
                                                    class="btn btn-rounded  btnValidez"><i class="fas fa-cogs pr-2"
                                                        aria-hidden="true">DEMO</i>
                                                </a>
                                                <a target="_blank" type="button"
                                                    href="https://github.com/Gfrezer/babyfoot"
                                                    class="btn btn-rounded  btnValidez"><i class="fab fa-github pr-2"
                                                        aria-hidden="true">GITHUB</i>
                                                </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card cardApplis" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                                        data-aos-duration="2000" data-aos-delay="1500">
                                        <div class="card-body">
                                            <div class="card-title">
                                                <h4>MON CV</h4>
                                            </div>
                                            <div class="card-excerpt">
                                                <p>
                                                    Application web permetant de créer des parties de babyfoot en
                                                    collaboration et en temps réel.
                                                <ul>
                                                    <li> Node.js</li>
                                                    <li> Express.js</li>
                                                    <li> Postgresql</li>
                                                    <li> ORM Sequelize</li>
                                                </ul>
                                                <a target="_blank" type="button"
                                                    href="https://github.com/Gfrezer/babyfoot"
                                                    class="btn btn-rounded  btnValidez"><i class="fab fa-github pr-2"
                                                        aria-hidden="true">GITHUB</i>
                                                </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                    <!--LOISIRS-->
                    <section>
                        <div class="container">
                            <div class="row">

                                <div class="espaceTitre" id="loisirs"></div>
                                <div class="col-md-12">
                                    <h2>LOISIRS</h2>
                                </div>
                            </div>
                            <div class="loisirsGrid">
                                <div class="img_un galerie_img" data-aos-delay="400" data-aos-duration="2000"
                                    data-aos="flip-left">
                                    <p data-aos="fade-right" data-aos-delay="2000">PHYSIQUE</p>
                                </div>
                                <div class="img_deux galerie_img" data-aos-delay="400" data-aos-duration="2000"
                                    data-aos="flip-up">
                                    <p data-aos="fade-up" data-aos-delay="2200">VOYAGE</p>
                                </div>
                                <div class="img_trois galerie_img" data-aos-delay="400" data-aos-duration="2000"
                                    data-aos="flip-right">
                                    <p data-aos="fade-right" data-aos-delay="2400">COSMOLOGIE</p>
                                </div>
                                <div class="img_quatre galerie_img" data-aos-delay="400" data-aos-duration="2000"
                                    data-aos="flip-down">
                                    <p data-aos="fade-down" data-aos-delay="2600">WINDSURF</p>
                                </div>
                                <div class="img_cinq galerie_img" data-aos-delay="400" data-aos-duration="2000"
                                    data-aos="flip-left">
                                    <p data-aos="fade-left" data-aos-delay="2800">LECTURE</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!--MESSAGES-->
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="espaceTitre" id="vosMessages"></div>
                                <div class="col-md-12">
                                    <h2>VOS MESSAGES</h2>
                                </div>
                            </div>
                            <div class="row">
                                @include('pagePrincipale/messageModal')
                                @foreach($messagesUsers as $messagesUser)
                                @if($messagesUser-> messageAccueil == 1)
                                <div class="col-md-4">
                                    <div class="client-profil" data-aos-delay="400" data-aos-duration="2000"
                                        data-aos="flip-right">
                                        <div class="imgAlea" data-aos-delay="1400" data-aos-duration="2000"
                                            data-aos="flip-up">
                                        </div>
                                        <div class="avatar a{{$loop->iteration}}{{$messagesUser->sexe}}"></div>
                                        <blockquote>
                                            <p><i class="fas fa-quote-left"></i> {{$messagesUser->message_user}} <i
                                                    class="fas fa-quote-right"></i></p>
                                            <br />
                                            <cite>{{$messagesUser->pseudo}}</cite>
                                        </blockquote>
                                        <p>"{{$messagesUser->created_at->format('j F Y')}}"</p>
                                    </div>

                                </div>
                                @endif
                                @endforeach
                            </div>
                    </section>


                    <!--Contact et form de messages-->
                    <section>
                        <div class="container container-bottom">
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
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d87590.98061208264!2d-1.6116818781238276!3d46.68169540456109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480430c1840dcf91%3A0x24f1c5b47ba13082!2s85190%20Venansault!5e0!3m2!1sfr!2sfr!4v1603459912746!5m2!1sfr!2sfr"
                                            width="100%" height="auto" frameborder="0" style="border:0;"
                                            allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="col-md-6 formContainer">
                                        @include('pagePrincipale/formContact')
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="">
                                    </div>
                                </div>
                            </div>
                    </section>
                </section>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="copyright">
        <p>Mon cv Gaël H. - 2020.</p>
        <a href="/">Mentions Legals</a>
        <a href="{{url('login')}}" target=_blank>Administateur</a>
    </div>
</footer>
@endsection