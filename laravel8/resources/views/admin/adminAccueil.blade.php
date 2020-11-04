@extends('layouts/adminTemplate')

@section('content')

<p>Bonjour ici c'est admin</p>
<div class="wrapper">

    <div class="table">

        <div class="row header">
            <div class="cell">
                Name
            </div>
            <div class="cell">
                Age
            </div>
            <div class="cell">
                Occupation
            </div>
            <div class="cell">
                Location
            </div>
        </div>

        <div class="row">
            <div class="cell" data-title="Name">
                Luke Peters
            </div>
            <div class="cell" data-title="Age">
                25
            </div>
            <div class="cell" data-title="Occupation">
                Freelance Web Developer
            </div>
            <div class="cell" data-title="Location">
                Brookline, MA
            </div>
        </div>

        <div class="row">
            <div class="cell" data-title="Name">
                Joseph Smith
            </div>
            <div class="cell" data-title="Age">
                27
            </div>
            <div class="cell" data-title="Occupation">
                Project Manager
            </div>
            <div class="cell" data-title="Location">
                Somerville, MA
            </div>
        </div>

        <div class="row">
            <div class="cell" data-title="Name">
                Maxwell Johnson
            </div>
            <div class="cell" data-title="Age">
                26
            </div>
            <div class="cell" data-title="Occupation">
                UX Architect & Designer
            </div>
            <div class="cell" data-title="Location">
                Arlington, MA
            </div>
        </div>

        <div class="row">
            <div class="cell" data-title="Name">
                Harry Harrison
            </div>
            <div class="cell" data-title="Age">
                25
            </div>
            <div class="cell" data-title="Occupation">
                Front-End Developer
            </div>
            <div class="cell" data-title="Location">
                Boston, MA
            </div>
        </div>

    </div>

</div>
@endsection