<div class="containerContact row card text-white bg-dark">
    <h4 class="card-header">Contactez-moi</h4>
    <div class="card-body introContact">
        <form action="{{url('formContact') }}" method="POST" id="formContact">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control  @error('nom') is-invalid @enderror" name="nom" id="nom"
                    placeholder="Votre nom" value="{{ old('nom') }}" required></input>
                @error('nom')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" class="form-control  @error('email') is-invalid @enderror" name="email" id="email"
                    placeholder="Votre email" value="{{ old('email') }}" required></input>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">

                <textarea type="textarea" class="form-control  @error('message') is-invalid @enderror" name="message"
                    id="messageContact" placeholder="Votre message" value="{{ old('message') }}" required></textarea>

                @error('message')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="icon-btn">

            </div>
            <div class="icon-btn">
                <button type="submit" class="btn-demo btnValidez submitForm" data-dismiss="modal">
                    <span class="btn-gradient">
                        <i class="fas fa-paper-plane"></i>
                    </span>
                    <span class="btn-text">Envoyer</span>
                </button>
            </div>
            @if(session('messageOk'))
            <div class="messageOk"> {{ session('messageOk') }}</div>
            @endif
            <div class="rgpd">
                <label for="scales">
                    <input type="checkbox" id="scales" name="scales">
                    J'autorise ce site à conserver mes données personnelles transmises via ce
                    formulaire.
                    Aucune exploitation commerciale ne sera faite des données conservées.</br>Voir la <a target="_blank"
                        href="{{url('/rgpd')}}">politique de
                        gestion des données personnelles</a>
                </label>
            </div>
            <div class="textRgpd" id="textRgpd">
                <p>Vous devez Validez le RGPD!</p>
            </div>
        </form>
    </div>
</div>