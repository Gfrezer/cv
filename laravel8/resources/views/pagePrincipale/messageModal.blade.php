<!-- bouton sur la page accueil -->
<div class="wrap">
    <h1>Votre Message...
        <button type="button" class=" btn btn-rounded btn-outline-secondary" data-toggle="modal"
            data-target=".bs-example-modal-new">
            Ouvrir
        </button>
    </h1>
</div>
<!-- Modal Header -->
<div class="container">
    <div class="modal fade bs-example-modal-new" id="myModal" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modalMessage">
            <div class="modal-content">
                <div class="col-md-12 formContainer">
                    @include('pagePrincipale/messModalResponse')
                </div>
            </div>
        </div>
    </div>
</div>