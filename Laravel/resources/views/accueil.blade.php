
@extends('gabari')


@section('content')
    
    <h1>Accueil</h1>

    <label>Qui etes-vous?</label>
    <ul>
    @foreach($personnes as $pers)
        <li><a href="http://127.0.0.1:8000/{{ $pers['Identifiant'] }}">{{ $pers['Identifiant'] }}</a></li>
    @endforeach
    </ul>

    <section class="ajout">
    <h3>Ajout</h3>
    <form action="{{url('/')}}/ajout_personne" method="post">
        {{ csrf_field() }}
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom">

        <label for="prenom">Prenom :</label>
        <input type="text" id="prenom" name="prenom">

        <label for="filiere">Filière :</label>
        <input type="text" id="filiere" name="filiere">

        <label for="mail">Mail :</label>
        <input type="email" id="mail" name="mail">

        <button type="submit">Ajouter</button>

    </form>
    </section>
@endsection