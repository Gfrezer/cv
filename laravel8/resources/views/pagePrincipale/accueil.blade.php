@extends('layouts/template')
@section('content')
<section>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 navbarLaterale">

<<<<<<< HEAD


<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 navbarLaterale">
                <a class="curri-vitae">Curriculum </br>Vitae</a>
                <div class=navbarLaterale>
                    <div class="oeilBeauf">
                        @include('pagePrincipale/navbarLateral')
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <!--navbar Photo-->
                <section>

                    <div class="navbar-horizontale">
                        <div class="navbar navbar-expand-md  navbar-light fixed-top">

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#monMenu"
                                aria-controles="monMenu" aria-label="Menu pour mobile">
                                <span class="navbar-toggler-icon"></span>
                            </button>


                            <div class="collapse navbar-collapse" id="monMenu">
                                <div class="navbar-nav" ml="auto">
                                    <a class="nav-item nav-link" href="#aPropos">A Propos </a>
                                    <a class="nav-item nav-link" href="#formations">Formations</a>
                                    <a class="nav-item nav-link" href="#experiences">Experiences</a>
                                    <a class="nav-item nav-link" href="#mesApplis">Mes Applis</a>
                                    <a class="nav-item nav-link" href="#loisirs">Loisirs</a>
                                    <a class="nav-item nav-link" href="#vosMessages">Vos Messages</a>
                                    <a class="nav-item nav-link" href="#contact">Contact</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </section>
                <!-- ======= Hero Section ======= -->
                <div id="hero" class="d-flex flex-column justify-content-center align-items-center">
                    <div class="hero-container" data-aos="fade-in">
                        <h1>Gaël Hamonic</h1>
                        <p>je suis <span class="typed"></span></p>
                    </div>
                </div>
                <!-- End Hero -->
                <img src="../public/images/images/plage.jpg" heigth="auto" width="100%">


                <header>
=======
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

                                <div class="collapse navbar-collapse" id="monMenu">
                                    <div class="navbar-nav" ml="auto">
                                        <a class="nav-item nav-link" href="#aPropos">A Propos </a>
                                        <a class="nav-item nav-link" href="#formations">Formations</a>
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
                                    <img src="./../public/images/images/binary.jpg" class="binary">
                                </div>
                                <div class="col-md-6 textApropos" data-aos="fade-left" data-aos-delay="500"
                                    data-aos-duration="1000" data-aos-easing="ease-in-sine">
                                    <p>Diplomé du Titre Professionnel
                                        "Développeur Web et Web-
                                        Mobile" bac +2 depuis le 1er
                                        octobre 2019, je souhaiterais
                                        approfondir mes
                                        connaissances dans le domaine
                                        vers un niveau Bac+3.</br> Mes
                                        expériences en auto-
                                        apprentissage, puis à l'école de
                                        formation m'ont convaincu que
                                        la pratique quotidienne et
                                        l'imprégnation de cas
                                        d'utilisation réels sont la clé qui
                                        permet de progresser
                                        rapidement dans ce métier.</br>
                                        C'est pourquoi je suis à la
                                        recherche d'une entreprise qui
                                        saurait m'accompagner dans
                                        une démarche de contrat pro
                                        "Concepteur Développeur
                                        d'applications" niveau II pour
                                        un an, et à qui je saurais
                                        apporter mon dynamisme et
                                        ma motivation dans la
                                        réalisation de ses projets. </br>Je
                                        suis à votre disposition pour
                                        échanger sur ce projet lors
                                        d'un entretien.</p>
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
                                                    Migration en cours vers PHP pour approfondir ce langage </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
>>>>>>> front

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

<<<<<<< HEAD
                    <!--à propos-->
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">

                                    <h2 id="aPropos">A Propos...</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <img src="./../public/images/images/the2.jpeg">
                                </div>
                                <div class="col-md-5">
                                    <div class="produits_plus">
                                        <div class="row">
                                            <div class="col-md2">
                                                <div class="prod_icon">
                                                    <i class="fab fa-angellist"></i>
                                                </div>

                                            </div>
                                            <div class="col-md-10">
                                                <h3>De moi...</h3>
                                                <p>Diplomé du Titre Professionnel
                                                    "Développeur Web et Web-
                                                    Mobile" bac +2 depuis le 1er
                                                    octobre 2019, je souhaiterais
                                                    approfondir mes
                                                    connaissances dans le domaine
                                                    vers un niveau Bac+3. Mes
                                                    expériences en auto-
                                                    apprentissage, puis à l'école de
                                                    formation m'ont convaincu que
                                                    la pratique quotidienne et
                                                    l'imprégnation de cas
                                                    d'utilisation réels sont la clé qui
                                                    permet de progresser
                                                    rapidement dans ce métier.
                                                    C'est pourquoi je suis à la
                                                    recherche d'une entreprise qui
                                                    saurait m'accompagner dans
                                                    une démarche de contrat pro
                                                    "Concepteur Développeur
                                                    d'applications" niveau II pour
                                                    un an, et à qui je saurais
                                                    apporter mon dynamisme et
                                                    ma motivation dans la
                                                    réalisation de ses projets. Je
                                                    suis à votre disposition pour
                                                    échanger sur ce projet lors
                                                    d'un entretien.</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md2">
                                                <div class="prod_icon">
                                                    <i class="fab fa-app-store"></i>
                                                </div>

                                            </div>
                                            <div class="col-md-10">
                                                <h3>En détail...</h3>
                                                <p>Anniversaire: 29 septembre 1973
                                                    Age: 47 ans
                                                    Diplome: BTS dev.
                                                    Téléphone: 06 86 84 92 55
                                                    Email:gael.hamonic@yahoo.fr
                                                    Ville: Venansault,Vendée
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!--formations-->
                    <section>
                        <div class="container formation">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 id="formations">FORMATIONS</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="famille_forma">
                                        <img src="./../public/images/formation/autodidacte.png">
                                        <div class="color_bande">
                                            <h4>Auto-formation</h4>
                                        </div>

                                        <p>
                                            Depuis octobre 2019,</br>

                                            Développement de diverses applications web :
                                            - application de coaching minceur (toujours en cours)
                                            Technologies : VueJs, Node.js, Bootstrap, PostgreSQL, ORM Sequelize
                                            - application démo temps-réel de gestion de parties de babyfoot
                                            Technologies : Javascript avec Websockets, Node.js, PostgreSQL sans ORM
                                            - application de gestion de parties de palet vendéen
                                            Technologies : Javascript, Node.js, Postgresql
                                            Migration en cours vers PHP pour approfondir ce langage
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="famille_forma">
                                        <img src="./../public/images/formation/dev.jpeg">
                                        <div class="color_bande">
                                            <h4>Développeur Web</h4>
                                        </div>
                                        <p>
                                            ARINFO La roche Sur Yon
                                            Février 2019 à septembre 2019
                                            Titre Professionnel "Développeur Web et Web-Mobile" bac+2, inscrit au RNCP
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="famille_forma">
                                        <img src="./../public/images/formation/graphiste.jpg">
                                        <div class="color_bande">
                                            <h4>Graphiste</h4>
                                        </div>
                                        <p>
                                            Ecole Pivaut (Nantes)
                                            Septembre 1991 à juin 1993
                                            Formation à la peinture décorative. Réalisation de fresque, décor mural dans
                                            édifices et habitats. Lettres à main levée.
                                            Utilisation de logiciels d'infographie type CorelDraw et Photoshop
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="container" id="container_competences">

                                <div class="row">
                                    <div class="col-md-6">
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
                                        <p>php</p>
                                        <div class=" progress">
                                            <small></small>
                                            <div class="progress-done" id="php" data-value="50">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p>HTML</p>
                                        <div class="progress">
                                            <small></small>
                                            <div class="progress-done" id="NodeJS" data-value="80">
                                            </div>
                                        </div>
                                        <p>CSS</p>
                                        <div class="progress">
                                            <small></small>
                                            <div class="progress-done" id="MySQL" data-value="20">
                                            </div>
                                        </div>
                                        <p>php</p>
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
                                <div class="col-md-12">
                                    <h2 id="experiences">EXPERIENCES</h2>
                                    Auto-Formation Développement
                                    OpenClassroomsJuillet 2018 à janvier 2019
                                    Cours d'algorithmie
                                    Formation Développement Web
                                    Formation Javascript
                                    Découverte de PHP/MySQL

                                    Modifier
                                    Déplacer
                                    Supprimer
                                    Chauffeur Livreur
                                    France Alliance 85Juillet 2007 à février 2018

                                    Modifier
                                    Déplacer
                                    Supprimer
                                    Peintre en Lettres
                                    Diverses entreprisesMars 1994 à juin 2007
                                    Les principales :
                                    - Calvez Publicité (4 ans)
                                    - Labbe Publicité (3 ans)
                                    - Ateliers Chenu (2 ans)
                                    - Ouest Enseignes (3 ans)
                                </div>
                            </div>
                        </div>
                    </section>


                    <!--MES APPLIS-->
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 id="mesApplis">MES APPLIS</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="pack">
                                        <div class="pack_title">
                                            <h3>Basique</h3>
                                            <h4>Gratuit</h4>
                                            <p>2 jours gratuit</p>
                                        </div>
                                        <div class="pack_content">
                                            <ul>
                                                <li>5 thés</li>
                                                <li>10 thés</li>
                                                <li>1 kit</li>
                                                <li>10 bières</li>
                                            </ul>
                                        </div>
                                        <div class="pack_signup">
                                            <a href="/" class="btn">Je m'inscris</a>

                                        </div>

                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="pack">
                                        <div class="pack_title">
                                            <h3>En Forme</h3>
                                            <h4>20 € </h4>
                                            <p>1 jour gratuit</p>
                                        </div>
                                        <div class="pack_content">
                                            <ul>
                                                <li>50 thés</li>
                                                <li>10 thés</li>
                                                <li>10 kit</li>
                                                <li>100 bières</li>
                                            </ul>
                                        </div>
                                        <div class="pack_signup">
                                            <a href="*" class="btn">Je m'inscris</a>

                                        </div>

                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="pack">
                                        <div class="pack_title">
                                            <h3>Haut Niveau</h3>
                                            <h4>500€</h4>
                                            <p>Aucun jour gratuit</p>
                                        </div>
                                        <div class="pack_content">
                                            <ul>
                                                <li>45 thés</li>
                                                <li>15 thés</li>
                                                <li>3 kit</li>
                                                <li>400 bières</li>
                                            </ul>
                                        </div>
                                        <div class="pack_signup">
                                            <a href="/" class="btn" type="mouseover">Je m'inscris</a>

                                        </div>

                                    </div>

                                </div>
                            </div>

                    </section>

=======
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
                            <h6>Compétences:</h6>
                            <div class="row">

                                <div class="col-md-6">
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
                                <div class="col-md-6">
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
                                            <time>Novembre 2019 à décembre 2020:</time> </br>
                                            </br>
                                            Auto-Formation Développement
                                            OpenClassrooms
                                            Cours d'algorithmie
                                            Formation Développement Web
                                            Formation Javascript
                                            Découverte de PHP/MySQL
                                            formation 6 mois à ARINFO.
                                        </p>
                                    </div>

                                    <div class="cadreText" data-aos="slide-up" data-aos-duration="1200">
                                        <p>
                                            <time>Novembre 2019 à décembre 2020:</time></br>
                                            </br>
                                            Chauffeur Livreur
                                            France Alliance 85
                                        </p>
                                    </div>
                                    <div class="cadreText" data-aos="slide-left" data-aos-duration="1200">
                                        <p>
                                            <time>Novembre 2019 à décembre 2020:</time></br>
                                            </br>
                                            Peintre en Lettres
                                            Diverses entreprises
                                            Les principales :
                                            - Calvez Publicité (4 ans)
                                            - Labbe Publicité (3 ans)
                                            - Ateliers Chenu (2 ans)
                                            - Ouest Enseignes (3 ans)
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
                                    <div class="card" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                                        data-aos-duration="2900" data-aos-delay="1000">
                                        <div class="card-body">
                                            <div class="card-title">
                                                <h3>BABYFOOT</h3>
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
                                                    class="btn btn-rounded btn-outline-secondary"><i
                                                        class="fas fa-cogs pr-2" aria-hidden="true"></i>DEMO
                                                </a>
                                                <a target="_blank" type="button"
                                                    href="https://github.com/Gfrezer/babyfoot"
                                                    class="btn btn-rounded btn-outline-secondary"><i
                                                        class="fab fa-github pr-2" aria-hidden="true"></i>GITHUB
                                                </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                                        data-aos-duration="2000" data-aos-delay="1500">
                                        <div class="card-body">
                                            <div class="card-title">
                                                <h3>MON BLOG</h3>
                                            </div>
                                            <div class="card-excerpt">
                                                <p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                                        data-aos-duration="2000" data-aos-delay="2000">
                                        <div class="card-body">
                                            <div class="card-title">
                                                <h3>MON CV</h3>
                                            </div>
                                            <div class="card-excerpt">
                                                <p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

>>>>>>> front
                    <!--LOISIRS-->
                    <section>
                        <div class="container">
                            <div class="row">
<<<<<<< HEAD
                                <div class="col-md-12">
                                    <h2 id="loisirs">LOISIRS</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="galerie_img"
                                        style="background-image: url(./../public/images/gallerie_photos/atome.jpg)">
                                        <div class="gallerie_titre">
                                            <h4>Quantique</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="galerie_img"
                                        style="background-image: url(./../public/images/gallerie_photos/windsurf.jpg)">
                                        <div class="gallerie_titre">
                                            <h4>Windsurf</h4>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="galerie_img"
                                        style="background-image: url(./../public/images/gallerie_photos/avion.jpg)">
                                        <div class="gallerie_titre">
                                            <h4>Voyages</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="galerie_img"
                                        style="background-image: url(./../public/images/gallerie_photos/nebu.jpg)">
                                        <div class="gallerie_titre">
                                            <div class="text_img_4">
                                                <h4>Cosmologie</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="galerie_img"
                                        style="background-image: url(./../public/images/gallerie_photos/livre.jpg)">
                                        <div class="gallerie_titre">
                                            <h4>Lecture</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!--MESSAGES-->
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 id="vosMessages">VOS MESSAGES</h2>
=======
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
                                    <div class="client-profil">
                                        <blockquote>
                                            <div class="imgAlea">
                                                <img class="avatar">
                                            </div>
                                            <p>{{$messagesUser->message_user}}</p>
                                            <br />
                                            <cite>{{$messagesUser->pseudo}}</cite>
                                        </blockquote>
                                    </div>
>>>>>>> front
                                </div>
                                @endif
                                @endforeach
                            </div>
<<<<<<< HEAD
                            <div class="row">
                                @foreach($messagesUsers as $messagesUser)
                                @if($messagesUser-> messageAccueil == 1)
                                <div class="col-md-4">
                                    <div class="client-profil">
                                        <blockquote>
                                            <img src="./../public/images/">
                                            <p>{{$messagesUser->message_user}}</p>
                                            <br />
                                            <cite>{{$messagesUser->pseudo}}</cite>
                                        </blockquote>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                            @include('pagePrincipale/messageModal')
                        </div>
                    </section>
                    <!--Contact et form de messages-->
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 id="contact">Contact</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="adresse">
                                        <i class="fab fa-angellist"></i>
                                        <h5>Ville:</h5>
                                        <p>Venansault</p>
                                    </div>

                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d87590.98061208264!2d-1.6116818781238276!3d46.68169540456109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480430c1840dcf91%3A0x24f1c5b47ba13082!2s85190%20Venansault!5e0!3m2!1sfr!2sfr!4v1603459912746!5m2!1sfr!2sfr"
                                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                                        aria-hidden="false" tabindex="0"></iframe>
                                </div>

                                <div class="col-md-6 formContainer">
=======

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
>>>>>>> front
                                    @include('pagePrincipale/formContact')
                                </div>

                            </div>


                            <div class="col-md-6">
                                <div class="">


                                </div>
                            </div>


                        </div>


                    </section>

<<<<<<< HEAD
                </header>
=======
                </section>
>>>>>>> front
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="copyright">
        <p>Mon cv Gaël H. -2020.<a href="/">Mentions Legals</a>
            <a href="{{url('login')}}" target=_blank>Administateur
        </p></a>

    </div>


</footer>
@endsection