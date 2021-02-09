document.addEventListener("DOMContentLoaded", function (event) {
    new Typed('.typed', {
        strings: ['Gaël', 'dév', 'back', 'front'],
        loop: true,
        typeSpeed: 100,
        backSpeed: 50,
        backDelay: 2000
    });
})



//Barre des competences
document.getElementById("container_competences").addEventListener("mouseover", update)

function update() {
    const progressTab = document.querySelectorAll('.progress-done');
    const percent = document.querySelector('small');
    progressTab.forEach(element => {
        let width = 1;
        let identity = setInterval(scene, 10);

        function scene() {
            if (width >= element.getAttribute('data-value')) {
                clearInterval(identity);
            } else {
                width++;
                element.style.width = width + '%';
                element.innerHTML = width + '%';
            }
        }
    });
    this.removeEventListener("mouseover", update);
}




document.querySelectorAll('.submitForm').forEach(element => {
    ajoutListenerFetch(element);
});
//Methode fetch
function ajoutListenerFetch(element) {
    element.addEventListener('click', function (event) {
        event.preventDefault();
        let form = this.closest("form");
        let inputs = form.querySelectorAll("input[type=text], input[type=hidden],input[type=checkbox]:checked, input[type=radio]:checked, textarea");
        let idForm = form.id;
        let url = form.getAttribute("action");
        if ((scales.checked === false) && (form.id === "formContact")) {
            const visuRgpd = document.querySelector(".textRgpd");
            visuRgpd.classList.add("pasChecked");
        } else {
            let messageContact = new FormData();
            inputs.forEach(el => messageContact.append(el.name, el.value));

            fetch(url, {
                    method: 'post',
                    body: messageContact
                }) //reponse serveur     
                .then(response => {
                    if (response.ok) {
                        response.text().then(responseHtml => {
                            let formElem = this.closest(".formContainer");
                            formElem.innerHTML = responseHtml;

                            let tab = [];
                            let textDanger = document.querySelectorAll(".alert-danger");
                            textDanger.forEach(function (elem) {
                                tab.push(elem.innerText);
                            })
                            if (tab.length === 0) {
                                setTimeout(function () {
                                    form = document.getElementById(idForm);
                                    form.querySelector(".messageOk").remove();
                                }, 4000);
                                //Nettoyer au click les messsages erreurs et videz les inputs
                            } else {
                                formElem.querySelectorAll("input,textarea").forEach(el => el.addEventListener('focus', function () {
                                    el.value = "";
                                    el.closest("div").querySelector(".alert").remove();
                                    el.classList.remove("is-invalid");
                                }))
                            }
                            ajoutListenerFetch(formElem.querySelector('.submitForm'));
                        })
                    }
                })
        }
    })
}


//Modal: vider les champs à l'eventTarget boutton fermer
$('#myModal').on('hidden.bs.modal', function (e) {
    e.target.querySelectorAll("input.form-control").forEach(el => el.value = "");
    e.target.querySelectorAll(".alert").forEach(el => el.remove());
    e.target.querySelectorAll(".form-control.is-invalid").forEach(el => el.classList.remove("is-invalid"));
})







//Methode XMLHttpRequest
function ajoutListenerXMLHTTP(element) {
    element.addEventListener('click', function (event) {
        event.preventDefault();
        let form = this.closest("form");
        let inputs = form.querySelectorAll("input");
        var req = new XMLHttpRequest();
        let messageContact = new FormData();
        inputs.forEach(el => messageContact.append(el.name, el.value));
        let url = form.getAttribute("action");
        req.open("POST", url);
        let idForm = form.id;
        req.send(messageContact);


        let self = this;
        // reponse serveur
        let reponseOk;
        req.onload = function () {
            reponseOk = req.status;
            if (reponseOk === 200) {
                let responseHtml = req.response;
                let formElem = self.closest(".formContainer");
                formElem.innerHTML = responseHtml;

                //messages d'erreurs
                let tab = [];
                let textDanger = document.querySelectorAll(".alert-danger");
                textDanger.forEach(function (elem) {
                    tab.push(elem.innerText);
                })
                if (tab.length === 0) {
                    setTimeout(function () {
                        form = document.getElementById(idForm);
                        form.querySelector(".visu").remove();
                    }, 3000);
                    //Si  messages erreurs
                } else {
                    setTimeout(function () {
                        //form.querySelector(".visu").classList.remove(".pasvisu");

                    }, 3000)
                }
                ajoutListener(formElem.querySelector('.submitForm'));
            }
        }
    })
}


//STICKY
const $realSticky = document.querySelector(".fake-header");
const $navSticky = document.querySelector(".navbar-horizontale");

const stickyHeader = () => function () {
    const sr1 = $realSticky.getBoundingClientRect();
    if ((sr1.bottom > 0) || (sr1.bottom === 60)) {
        console.log("caché");
        $navSticky.classList.remove("sticky");
    } else {
        $navSticky.classList.add("sticky");
    }
};
window.addEventListener("scroll", _.debounce(stickyHeader(), 50));


//Fermer la navbar toggler "version mobile"
$('.navbar-nav a').click(function () {
    $(".navbar-to-collapse").collapse("hide")
});






//DEMO
const elementDemo = document.querySelector('.href-demo.monCv');
elementDemo.addEventListener('click', function (event) {
    event.preventDefault();
    window.scrollTo(0, 0);
    setTimeout(function () {
        introJs().setOptions({
            nextLabel: "Suivant",
            prevLabel: "Précédent",
            doneLabel: "Fin",
            steps: [{
                    element: document.querySelector('.oeilBeauf'),
                    intro: "Bonjour, je suis Gaël et grâce à IntroJS je vais vous montrer quelques unes des technologies utilisées pour créer ce site.",
                    position: 'bottom',
                    tooltipClass: "oeilBeaufDemo",

                },
                {
                    element: document.querySelector('.htm'),
                    intro: "Cliquez sur une de ces icones permet de voir l'aspect du site en responsive sur tablette et mobile grace à l'utilisation d'iframes. ",
                    position: 'right',
                    tooltipClass: "htmDemo",
                    highlightClass: "htmHelperLayer",

                },
                {
                    element: document.querySelector('#hero'),
                    intro: "L'effet d'écriture automatique est réalisé par la bibliotheque Typed.js",
                    position: 'left',
                    tooltipClass: "heroDemo",
                    highlightClass: "heroHelperLayer"
                },
                {
                    element: document.querySelector('.introFormation'),
                    intro: "Ici j'ai fait appel à AOS (Animate On Scroll) qui est une librairie toute légère permettant d’ajouter des animations sur des éléments HTML, passez la souris sur une des trois images pour un zoom CSS3",
                    position: 'left',
                    tooltipClass: "introFormationDemo"
                },
                {
                    element: document.querySelector('.progress'),
                    intro: "Les barres de progressions, sont animées par du code Javascript que j'ai adapté pour mon utilisation. ",
                    position: 'right',
                    tooltipClass: "progressDemo",

                },
                {
                    element: document.querySelector('.avatar'),
                    intro: "L'avatar ici est différent à chaque rechargement du DOM tout en gardant le genre de l'utilisateur, il est génerer avec Fakeface une A.I. qui crée des visages qui n'existe pas.",
                    position: 'right',
                    tooltipClass: "avatarDemo",
                    highlightClass: "avatarHelperLayer"
                },
                {
                    element: document.querySelector('.introModale'),
                    intro: "La fenêtre modale beaucoup plus érgonomique et flexible q'un Pop-up à l’avantage d’être membre du DOM de la page.",
                    position: 'right',
                    tooltipClass: "introModaleDemo",
                    highlightClass: "introHelperModale"
                },

                {
                    element: document.querySelector('.introContact'),
                    intro: "Formulaire avec l'excellent systeme d'Authentification Laravel, la méthode fetch permet de gérer le corps de la requête et de la réponse de maniere asychrone ",
                    position: 'left',
                    tooltipClass: "introContactDemo"
                },
                {
                    element: document.querySelector('.admin'),
                    intro: "Partie administrateur non accessible par les utilisateurs qui me permet de gérer les contacts et vos messages ",
                    position: 'up',
                    tooltipClass: "adminDemo"
                },
                {
                    element: document.querySelector('.finDemo'),
                    intro: "Bien sur je ne peux pas tous detaillé, si vous le souhaiter vous pouvez regarder pour plus de détails mon GitHup dans Mes Applis.",
                    position: 'right',
                    tooltipClass: "adminDemo"
                }
            ]
        }).start();
    }, 1500);
    //window.parent.document.dispatchEvent(event);
});
