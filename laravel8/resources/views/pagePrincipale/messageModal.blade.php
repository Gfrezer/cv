<div class="wrap">
    <h1>Votre Message...</h1>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-new">
        Ouvrir
    </button>
</div>
<!-- Modal Header -->
<div class="container">
    <div class="modal fade bs-example-modal-new" id="myModal" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="col-md-12 formContainer">
                    @include('pagePrincipale/messModalResponse')
                </div>
            </div>
        </div>
    </div>
</div>