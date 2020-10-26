document.addEventListener("DOMContentLoaded", function (event) {
    new Typed('.typed', {
        strings: ['toto', 'titi', 'tata'],
        loop: true,
        typeSpeed: 100,
        backSpeed: 50,
        backDelay: 2000
    });
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


let button = document.querySelector('.submitContact');
button.addEventListener('click', event => {
    event.preventDefault();
    let messageContact = new FormData();

    let nom = document.getElementById('nom').value;
    let email = document.getElementById('email').value;
    let message = document.getElementById('message').value;
    let token = document.querySelector('input[name=_token]').value;
    messageContact.append('name', nom);
    messageContact.append('email', email);
    messageContact.append('message', message);
    messageContact.append('_token', token);
    var req = new XMLHttpRequest();

    req.open("POST", "http://localhost/laravel8/public/contact");
    // Envoi de la requête en y incluant l'objet
    req.send(messageContact);

    let reponseOk;
    req.onload = function () {
        reponseOk = JSON.parse(req.response);
        console.log("ceci est ", reponseOk);
        if (reponseOk.sucess === "Ok") {
            document.querySelector(".contactPasOK").classList.add("contactOk")
        }

    }

})
