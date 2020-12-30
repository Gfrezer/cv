<body style="margin:0px;">
    <div class="iframe">
        <iframe src="http://localhost/laravel8/public" width="1920px" height="100%" style="border:0; margin:0% 0%;">
        </iframe>
    </div>
</body>

<script>
let iframe = document.querySelector("iframe");
document.addEventListener('choix', function(event) {
    switch (event.detail.name) {
        case 'fa-desktop':
            iframe.width = "1920px";
            iframe.height = "1080px";
            iframe.style.margin = "0% 0%";
            break;
        case 'fa-tablet-alt':
            iframe.width = "1024px";
            iframe.height = "550px";
            iframe.style.margin = "5% 25%";
            break;
        case 'fa-mobile-alt':
            iframe.width = "360px";
            iframe.height = "660px";
            iframe.style.margin = "5% 41%";
            break;
    }
});
</script>