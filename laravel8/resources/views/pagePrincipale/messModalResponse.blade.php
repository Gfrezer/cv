<!-- Modal Content: begins -->

<h4 class="card-header">Votre Message...</h4>
<div class="card-body">
    <form action="{{route('message.store') }}" method="POST" id="formMessageUser">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control  @error('pseudo') is-invalid @enderror" name="pseudo" id="pseudo"
                placeholder="Votre pseudo" value="{{ old('pseudo') }}">
            @error('pseudo')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <textarea type="textarea" class="form-control  @error('message_user') is-invalid @enderror"
                name="message_user" id="message_user" placeholder="Votre message"
                value="{{ old('message_user') }}"></textarea>
            @error('message_user')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="sexe">Vous êtes un(e)...?</label><br />
            <input type=radio id=sexe name=sexe value=h> homme
            <input type=radio id=sexe name=sexe value=f> femme
        </div>
        <button type="submit" class="btn btn-rounded btnValidez submitForm">Envoyer</button>
        @if(session('messageClientOk'))
        <div class="messageOk">Votre message à bien été envoyé !</div>
        @endif


    </form>
</div>

<!-- Modal Footer -->
<div class="modal-footer">

    <button type="button" class="btn btn-rounded btn-outline-secondary" data-dismiss="modal">Fermer</button>
</div>