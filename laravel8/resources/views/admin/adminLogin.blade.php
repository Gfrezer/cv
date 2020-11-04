@extends('layouts/adminTemplate')

@section('content')

<div class="login-page">
    <div class="form">
        <form class="login-form" action="{{url('admin') }}" method="POST">
            @csrf

            <input type="text" placeholder="nom" name="nom" />
            <input type="password" placeholder="password" name="password" />
            <button type="submit">login</button>

            @if(session('error'))
            <div class="demi_tour">
                <div id=flip>
                    <div>
                        <div>Cette accès est:</div>
                    </div>
                    <div>
                        <div>Attention !</div>
                    </div>
                </div>
            </div>
            @endif

            <p>Réservé à l'administrateur!</p>
            <a href="{{url('/')}}">Retour à l'acceuil!</a>


        </form>
    </div>
</div>
@endsection