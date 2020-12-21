<div class="navlater">
    <div class="oeilBeauf card__image "
        data-intro=" Bonjour, je suis Intro et je vais vous montrer quelques une des fonctionnalitées que j'ai utilisé pour créer mon site.">
    </div>

    <div class="blocIcone">
        <p class="nomPrenom">Gaël Hamonic</p>
        <a href="javascript:introJs().start()">intro</a><BR>
        <i class="fab fa-github"></i>
        <a class="htm" href="#"><i class="fas fa-desktop"></i></a>
        <a class="htm" href="#"><i class="fas fa-tablet-alt"></i></a>
        <a class="htm" href="#"><i class="fas fa-mobile-alt"></i></a>
    </div>
</div>

<script>
document.querySelectorAll('.blocIcone a').forEach(element => {
    hrefListener(element);

});

function hrefListener(element) {
    element.addEventListener('click', function(event) {
        event.preventDefault();

        let choixDim = element.childNodes[0].classList[1];

        var event = new CustomEvent('choix', {
            detail: {
                name: choixDim
            }
        });
        window.parent.document.dispatchEvent(event);

    })
};
</script>