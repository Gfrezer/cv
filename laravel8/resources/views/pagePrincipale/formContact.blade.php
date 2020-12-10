<div class="containerContact row card text-white bg-dark">
    <h4 class="card-header">Contactez-moi</h4>
    <div class="card-body">
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
                <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="email"
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
            <button type="submit" class="btn btn-secondary submitForm">Envoyer !</button>
            @if(session('messageOk'))
            <div class="messageOk"> {{ session('messageOk') }}</div>
            @endif
        </form>
    </div>
</div>