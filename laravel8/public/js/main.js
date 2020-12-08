document.addEventListener("DOMContentLoaded", function (event) {
    new Typed('.typed', {
        strings: ['Gaël', 'développeur', 'back', 'front'],
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
        let inputs = form.querySelectorAll("input");
        let idForm = form.id;
        let url = form.getAttribute("action");
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
                                form.querySelector(".visu").remove();
                            }, 3000);
                            //Nettoyer au click les messsages erreurs et videz les inputs
                        } else {
                            formElem.querySelectorAll("input").forEach(el => el.addEventListener('focus', function () {
                                el.value = "";
                                el.closest("div").querySelector(".alert").remove();
                                el.classList.remove("is-invalid");
                            }))
                        }
                        ajoutListenerFetch(formElem.querySelector('.submitForm'));
                    })
                }
            })
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


//EFFET A PROPOS
