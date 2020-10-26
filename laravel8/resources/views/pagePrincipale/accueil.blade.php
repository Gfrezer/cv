@extends('layouts/template')

@section('content')


<section class="navbar-horizontale">
    <div class="navbar navbar-expand-md bg-light navbar-light fixed-top">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#monMenu"
            aria-controles="monMenu" aria-label="Menu pour mobile">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand">Curriculum Vitae</a>
        <div class="collapse navbar-collapse" id="monMenu">
            <div class="navbar-nav" ml="auto">
                <a class="nav-item nav-link" href="#aPropos">A PROPOS </a>
                <a class="nav-item nav-link" href="#formations">FORMATIONS</a>
                <a class="nav-item nav-link" href="#experiences">EXPERIENCES</a>
                <a class="nav-item nav-link" href="#mesApplis">MES APPLIS</a>
                <a class="nav-item nav-link" href="#loisirs">LOISIRS</a>
                <a class="nav-item nav-link" href="#vosMessages">VOS MESSAGES</a>
                <a class="nav-item nav-link" href="#contact">CONTACT</a>
            </div>
        </div>
    </div>
</section>

<section>
    <div>
        <div class="home_title">
            <div class="photo_1">
                <div class="row">
                    <div class="col-md-6">
                    </div>
                    <!-- ======= Hero Section ======= -->
                    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
                        <div class="hero-container" data-aos="fade-in">
                            <h1>Gaël Hamonic</h1>
                            <p>je suis <span class="typed"></span></p>
                        </div>
                    </section>
                    <!-- End Hero -->
                </div>
            </div>
        </div>
    </div>

</section>
<header>
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
            <div class="container_">
                <button id="mesCompetences">Mes Compétences</button>
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

        </div>
    </section>
    <!--experiences-->
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


    <!--messages-->
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


        </div>
        <!--loisirs-->
        <section>
            <div class="container">
                <div class="row">
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
    </section>
    <!--AVIS CLIENTS-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 id="vosMessages">VOS MESSAGES</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="client-profil">
                        <blockquote>
                            <img src="./../public/images/">
                            <p>« Historia non tam finitos numeros, quam orbem quemdam contextumque desiderat :
                                namque omnia ejus membra connexa sunt, quoniam lubrica est, ac fluit » page 392 = «
                                L'histoire n'exige pas tant une prose parfaitement cadencée, qu'une suite de phrases
                                dont le tissu soit bien lié; car tout s'y enchaîne, tout y coule, tout y gliss</p>
                            <br />
                            <cite>C'est de lui...</cite>
                        </blockquote>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="client-profil">
                        <blockquote>
                            <img src="./../public/images/">
                            <p>« Historia non tam finitos numeros, quam orbem quemdam contextumque desiderat :
                                namque omnia ejus membra connexa sunt, quoniam lubrica est, ac fluit » page 392 = «
                                L'histoire n'exige pas tant une prose parfaitement cadencée, qu'une suite de phrases
                                dont le tissu soit bien lié; car tout s'y enchaîne, tout y coule, tout y gliss</p>
                            <br />
                            <cite>C'est d'elle...</cite>
                        </blockquote>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="client-profil">
                        <blockquote>
                            <img src="./../public/images/">
                            <p>« Historia non tam finitos numeros, quam orbem quemdam contextumque desiderat :
                                namque omnia ejus membra connexa sunt, quoniam lubrica est, ac fluit » page 392 = «
                                L'histoire n'exige pas tant une prose parfaitement cadencée, qu'une suite de phrases
                                dont le tissu soit bien lié; car tout s'y enchaîne, tout y coule, tout y gliss</p>
                            <br />
                            <cite>C'est pas de lui...</cite><br />
                        </blockquote>
                    </div>
                </div>
                @include('pagePrincipale/formMessagesUsers')
            </div>
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

                    <div class="adresse">
                        <i class="fab fa-angellist"></i>
                        <h5>Ville:</h5>
                        <p>Venansault</p>
                    </div>
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
                <div class="col-md-6 ">

                    @include('pagePrincipale/formContact')

                </div>

            </div>


            <div class="col-md-6">
                <div class="">


                </div>
            </div>


        </div>
        </div>

    </section>

</header>

<footer>
    <div class="copyright">
        <p>Mon cv Gaël H. -2020.<a href="/">Mentions Legals</a>
            <a href="/admin">Administateur
        </p></a>

    </div>


</footer>
@endsection