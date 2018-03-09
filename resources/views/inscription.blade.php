@extends ('layout')


@section('titreMeta')
    <title>Formulaire d'inscription</title>
@endsection

@section('titre')

<h1 class="text-center">Formulaire d'inscription</h1>

@endsection


@section('contenu')

    <div>
        <form  method="post">
            {{ csrf_field() }}
            <label for="email">Mon Email</label><br>
            <input class="form-control" type="text" name="email" placeholder="email"><br>
            <label  for="email">Mon mot de passe</label><br>
            <input class="form-control" type="password" name="password" placeholder="password"><br>
            <label for="email">confirmation mot de passe</label><br>
            <input class="form-control" data-match="password" type="password" name="password" placeholder="password confirm"><br>
            <input type="submit" value="Envoyer">
        </form>
    </div>

@endsection