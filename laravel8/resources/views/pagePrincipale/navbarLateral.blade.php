<div class="navlater">
    <div class="oeilBeauf card__image ">
    </div>
    <p class="nomPrenom">Gaël Hamonic
        <a href="{{ asset('/cv_2021.pdf') }}">Mon cv PDF
        </a>
    </p>
    <div class="blocIcone">
        <a class="git" href="#"><i class="fab fa-github" title="GitHub"></i></a>
        <a class="htm" href="#"><i class="fas fa-desktop" title="Desktop"></i></a>
        <a class="htm" href="#"><i class="fas fa-tablet-alt" title="Tablette"></i></a>
        <a class="htm" href="#"><i class="fas fa-mobile-alt" title="Mobile"></i></a>
    </div>
    <div class="lienVisite">
        <p> Ce site est d'abord conçu comme une démonstration technique.
            Embarquez-vous pour une visite guidée. <a class="visite" href="#mesApplis">Go !</a></p>
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
