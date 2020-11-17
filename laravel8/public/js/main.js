document.addEventListener("DOMContentLoaded", function (event) {
    new Typed('.typed', {
        strings: ['toto', 'titi', 'tata'],
        loop: true,
        typeSpeed: 100,
        backSpeed: 50,
        backDelay: 2000
    });

    document.getElementById("mesCompetences").addEventListener("click", update);

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
    }
})

document.querySelectorAll('.submitForm').forEach(element => {
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



        // reponse serveur
        let reponseOk;
        req.onload = function () {
            reponseOk = req.status;
            if (reponseOk === 200) {
                let responseHtml = req.response;
                let formElem = document.querySelector("#formContactDiv");
                formElem.innerHTML = responseHtml;
                //messages d'erreurs
                let tab = [];
                let textDanger = document.querySelectorAll(".alert-danger");
                textDanger.forEach(function (elem) {
                    tab.push(elem.innerText);
                })
                if (tab === "") {
                    setTimeout(function () {
                        form = document.getElementById(idForm);
                        form.querySelector(".visu").classList.remove(".pasvisu");
                    }, 3000);
                    //Si  messages erreurs
                } else {
                    setTimeout(function () {

                    }, 3000)
                }


            }
        }
    })
})
