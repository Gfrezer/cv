<div class="navlater">
    <div class="oeilBeauf card__image ">
    </div>

    <div class="blocIcone">
        <p class="nomPrenom">Gaël Hamonic</p>
        <a class="git" href="#"><i class="fab fa-github" title="GitHub"></i></a>
        <a class="intro" href="#"><i class="far fa-play-circle" title="Intro"></i></a>
        <a class="htm" href="#"><i class="fas fa-desktop" title="Desktop"></i></a>
        <a class="htm" href="#"><i class="fas fa-tablet-alt" title="Tablette"></i></a>
        <a class="htm" href="#"><i class="fas fa-mobile-alt" title="Mobile"></i></a>

    </div>
</div>


<script>
document.querySelectorAll('.blocIcone a').forEach(element => {
    hrefListener(element);
});

function hrefListener(element) {
    element.addEventListener('click', function(event) {
        event.preventDefault();
        if (element.className === "git") {
            window.open("https://github.com/Gfrezer");
        }
        if (element.className === "intro") {
            window.scrollTo(0, 0);
            setTimeout(function() {
                introJs().setOptions({
                    steps: [{
                            element: document.querySelector('.oeilBeauf'),
                            intro: "Bonjour, je suis Intro et je vais vous montrer quelques une des fonctionnalitées que j'ai utilisé pour créer mon site.",
                            position: 'bottom',
                            tooltipClass: "oeilBeaufDemo"
                        },
                        {
                            element: document.querySelector('.htm'),
                            intro: "En cliquant sur une de ces icones cela permet en un click de voir l'aspect du site en responsive sur tablette et mobile grace à l'utilisation d'iframes. ",
                            position: 'right',
                            tooltipClass: "htmDemo",
                            highlightClass: "htmHelperLayer"
                        },
                        {
                            element: document.querySelector('#hero'),
                            intro: "L'effet d'ecriture automatique est réalisé par la bibliotheque Typed.js",
                            position: 'up',
                            tooltipClass: "heroDemo",
                            highlightClass: "heroHelperLayer"
                        },
                        {
                            element: document.querySelector('.introFormation'),
                            intro: "Ici j'ai fait appel à AOS (Animate On Scroll)qui est une librairie toute légère permettant d’ajouter des animations sur des éléments HTML",
                            position: 'left',
                            tooltipClass: "introFormationDemo"
                        },
                        {
                            element: document.querySelector('.progress'),
                            intro: "Pour donner de l'effet aux barres de progressions, j'ai recuperer un code Javascript que j'ai adapté pour mon utilisation. ",
                            position: 'left',
                            tooltipClass: "progressDemo"
                        },
                        {
                            element: document.querySelector('.introModale'),
                            intro: "la fenêtre modale beaucoup plus ergonomique et flexible q'un Pop-up à l’avantage d’être membre du DOM de la page.",
                            position: 'rigth',
                            tooltipClass: "introModaleDemo"
                        },
                        {
                            element: document.querySelector('.avatar'),
                            intro: "L'avatar ici est différent à chaque rechargement du DOM tout en gardant le genre de l'utilisateur,il est génerer avec fakeface qui crée des visages qui n'existe pas.",
                            position: 'bottom',
                            tooltipClass: "avatarDemo"
                        },
                        {
                            element: document.querySelector('.introContact'),
                            intro: "Formulaire avec l'excellent systeme d'Authentification Laravel, la methode fetch permet de gérer le corps de la requête et de la réponse de maniere asychrone ",
                            position: 'left',
                            tooltipClass: "introContactDemo"
                        },
                        {
                            element: document.querySelector('.admin'),
                            intro: "Partie administrateur non accessible par les utilisateurs qui permet de gérer les contacts et les messages ",
                            position: 'up',
                            tooltipClass: "adminDemo"
                        }

                    ]

                }).start();
            }, 1500);
        } else {
            let choixDim = element.childNodes[0].classList[1];
            var event = new CustomEvent('choix', {
                detail: {
                    name: choixDim
                }
            });
            window.parent.document.dispatchEvent(event);
        }

    })


};
</script>