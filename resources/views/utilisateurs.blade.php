@extends ('layout')


@section('contenu')


    <h1>Liste des utilisateurs</h1>

    <ul>

        @foreach($utilisateurs as $utilisateur)

            <li>{{ $utilisateur -> email }}</li>

        @endforeach

    </ul>


@endsection