@extends ('layout')


@section('titreMeta')
    <title>Titre yield Laraval</title>
@endsection


@section('titre')
    <!--$test est en relation avec test de la route-->
    <h1>Bonjour {{ $test }}</h1>

@endsection