<div class="navlater">
    <div class="oeilBeauf card__image ">
    </div>

    <div class="blocIcone">
        <p class="nomPrenom">Gaël Hamonic</p>
        <a class="git" href="#"><i class="fab fa-github" title="GitHub"></i></a>
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