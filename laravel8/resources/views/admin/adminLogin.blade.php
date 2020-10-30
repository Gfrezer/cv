@extends('layouts/adminTemplate')

@section('content')

<div class="login-page">
    <div class="form">
        <form class="login-form" action="{{url('admin') }}" method="POST">
            @csrf

            <input type="text" placeholder="nom" name="nom" />
            <input type="password" placeholder="password" name="password" />
            <button type="submit">login</button>

        </form>
    </div>
</div>
@endsection