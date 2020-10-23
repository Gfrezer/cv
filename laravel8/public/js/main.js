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
