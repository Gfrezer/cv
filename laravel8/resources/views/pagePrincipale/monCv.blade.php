<body style="margin:0px;">
    <div class="iframe">
        <iframe src="mon_cv" width="100%" height="100%" style="border:0; margin:0% 0%;">
        </iframe>
    </div>
</body>

<script>
    let iframe = document.querySelector("iframe");
    document.addEventListener('choix', function(event) {
        switch (event.detail.name) {
            case 'fa-desktop':
                window.location = '/'
                break;
            case 'fa-tablet-alt':
                iframe.width = "50%";
                iframe.height = "550px";
                iframe.style.margin = "5% 25%";
                break;
            case 'fa-mobile-alt':
                iframe.width = "25%";
                iframe.height = "660px";
                iframe.style.margin = "5% 41%";
                break;
        }
    });

</script>
