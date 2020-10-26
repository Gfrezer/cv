<div class="container">
    <div class="row card text-white bg-dark">
        <h4 class="card-header">Votre Message...</h4>
        <div class="card-body">
            <form action="{{route('message.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control  @error('pseudo') is-invalid @enderror" name="pseudo"
                        id="pseudo" placeholder="Votre pseudo" value="{{ old('pseudo') }}">
                    @error('pseudo')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <textarea class="form-control  @error('message') is-invalid @enderror" name="message" id="message"
                        placeholder="Votre message">{{ old('message') }}</textarea>
                    @error('message')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-secondary">Envoyer !</button>
            </form>
        </div>
    </div>
</div