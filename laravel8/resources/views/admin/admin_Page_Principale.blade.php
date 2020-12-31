@extends('layouts/adminTemplate')

@section('content')

<p>Bonjour Gaël</p>
<div class="btn_logout">
    <button>
        <a href="{{url('logout')}}">Déconnection</a>
    </button>
</div>
@foreach($contacts as $contact)

<div class="wrapper">
    <p>Contact</p>
    <div class="table">
        <div class="row header width">
            <div class="cell">
                Nom
            </div>
            <div class="cell">
                Email
            </div>
            <div class="cell">
                Message
            </div>

        </div>

        <div class="row ">

            <tr>
                <td>
                    <div class="cell" data-title="Nom">
                        {{$contact->nom}}
                    </div>
                </td>
                <td>
                    <div class="cell" data-title="Email">
                        {{$contact->email}}
                    </div>
                </td>
                <td>
                    <div class="cell" data-title="Message">
                        {{ $contact->message }}
                    </div>
                </td>
            </tr>

        </div>
    </div>
</div>
@endforeach



@foreach($messagesUsers as $messagesUser)

<div class="wrapper">
    <p>Messages</p>
    <div class="table">

        <div class="row header width">
            <div class="cell">
                Pseudo
            </div>
            <div class="cell">
                Message
            </div>
            <div class="cell">
                Sexe
            </div>
            <div class="cell">
                ID
            </div>
            <div class="cell">
                validé
            </div>
            <div class="cell">
                Suppression
            </div>
        </div>

        <div class="row">
            <tr>
                <td>
                    <div class="cell" data-title="Pseudo">
                        {{$messagesUser->pseudo}}
                    </div>
                </td>
                <td>
                    <div class="cell" data-title="Message">
                        {{$messagesUser->message_user}}
                    </div>
                </td>
                <td>
                    <div class="cell" data-title="Sexe">
                        {{$messagesUser->sexe}}
                    </div>
                </td>
                <td>
                    <div class="cell" data-title="ID">
                        {{$messagesUser->id}}
                    </div>
                </td>
                <td>
                    <div class="cell" data-title="Valider">
                        @if($messagesUser->messageAccueil === NULL)
                        <form action="{{ url('valide' ,$messagesUser->id) }}" method="POST" id="formMessageUser">
                            @csrf
                            <button type="submit">validez</button>
                        </form>
                        @endif
                    </div>
                </td>
                <td>
                    <div class="cell" data-title="Supprimer">
                        <form action="{{ url('destroy' ,$messagesUser->id) }}" method="POST" id="formMessageUser">
                            @csrf
                            <button type="submit">Supprimer</button>
                        </form>
                    </div>
                </td>
            </tr>
        </div>

    </div>
</div>
@endforeach