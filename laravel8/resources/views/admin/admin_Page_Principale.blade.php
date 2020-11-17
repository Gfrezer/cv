@extends('layouts/adminTemplate')

@section('content')

<p>Bonjour ici c'est admin</p>
<div class="wrapper">
    <table>
        <div class="table">

            <tr class="row header">
                <th class="cell">
                    Nom
                </th>
                <th class="cell">
                    Email
                </th>
                <th class="cell">
                    Message
                </th>
            </tr>

            <div class="row">
                @foreach($contacts as $contact)

                <tr>
                    <td class="cell" data-title="nom">
                        {{$contact->nom}}
                    </td>
                    <td class="cell" data-title="email">
                        {{$contact->email}}
                    </td>
                    <td class="cell" data-title="message">
                        {{ $contact->message }}
                    </td>
                </tr>

                @endforeach
            </div>
            <div class="btn_logout">
                <button>
                    <a href="{{url('logout')}}">Déconnection</a>
                </button>
            </div>



        </div>
    </table>
    <table>
        <div class="table">

            <tr class="row header">
                <th class="cell">
                    Pseudo
                </th>
                <th class="cell">
                    Message
                </th>
                <th class="cell">
                    ID
                </th>
                <th class="cell">
                    validé
                </th>
                <th class="cell">
                    Suppression
                </th>
            </tr>

            <div class="row">
                @foreach($messagesUsers as $messagesUser)

                <tr>
                    <td class="cell" data-title="pseudo">
                        {{$messagesUser->pseudo}}
                    </td>
                    <td class="cell" data-title="message_user">
                        {{$messagesUser->message_user}}
                    </td>
                    <td class="cell" data-title="message_user">
                        {{$messagesUser->id}}
                    </td>


                    <td class="cell" data-title="bool">
                        @if($messagesUser->messageAccueil === NULL)
                        <form action="{{ url('valide' ,$messagesUser->id) }}" method="POST" id="formMessageUser">
                            @csrf
                            <button type="submit">validez</button>
                        </form>
                        @endif
                    </td>

                    <td class="cell" data-title="destroy">
                        <form action="{{ url('destroy' ,$messagesUser->id) }}" method="POST" id="formMessageUser">
                            @csrf
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>

                @endforeach
            </div>
        </div>
    </table>
</div>
@endsection