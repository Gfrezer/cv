<div class="iframe" style="margin:0" padding="5% 25%">
    <iframe src="http://localhost/laravel8/public" width="1920px" height="100%" style="border:0;">
    </iframe>
</div>


<script>
let iframe = document.querySelector("iframe");
document.addEventListener('choix', function(event) {
    switch (event.detail.name) {
        case 'fa-desktop':
            iframe.width = "1920px";
            iframe.height = "1080px"
            break;
        case 'fa-tablet-alt':
            iframe.width = "1024px";
            iframe.height = "550px"
            break;
        case 'fa-mobile-alt':
            iframe.width = "360px";
            iframe.height = "660px"
            break;
    }
});
</script>