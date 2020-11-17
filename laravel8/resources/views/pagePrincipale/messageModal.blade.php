<div class="wrap">
    <h1>Votre Message...</h1>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-new">
        Ouvrir
    </button>
</div>

<div class="modal fade bs-example-modal-new" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">

    <div class="modal-dialog">

        <!-- Modal Content: begins -->
        <div class="modal-content">

            <!-- Modal Header -->

            <h4 class="card-header">Votre Message...</h4>
            <div class="card-body">
                <form action="{{route('message.store') }}" method="POST" id="formMessageUser">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control  @error('pseudo') is-invalid @enderror" name="pseudo"
                            id="pseudo" placeholder="Votre pseudo" value="{{ old('pseudo') }}">
                        @error('pseudo')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="textarea" class="form-control  @error('message_user') is-invalid @enderror"
                            name="message_user" id="message_user" placeholder="Votre message"
                            value="{{ old('message_user') }}">
                        @error('message')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-secondary submitForm">Envoyer</button>
                    <div class="contactPasOK">Votre message à bien été envoyé !</div>
                </form>

            </div>


            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
            </div>

        </div>
        <!-- Modal Content: ends -->

    </div>

</div>