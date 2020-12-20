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
document.querySelectorAll('.blocIcone .htm').forEach(element => {
    hrefListener(element);

});

function hrefListener(element) {
    element.addEventListener('click', function(event) {
        event.preventDefault();

        if (this.querySelector('i').classList.contains("fa-tablet-alt")) {
            console.log("azzerttrhrth");
            var event = new Event('tablette');
            console.log(window.parent.document);
            window.parent.document.dispatchEvent(event);

        }
    })

};
</script>