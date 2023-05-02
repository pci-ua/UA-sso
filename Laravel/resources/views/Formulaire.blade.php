@extends('gabari')


@section('content')
@if ($type =='asso')
    <h3>Créer Association</h3>
    <form action="{{url('/')}}/{{$personne['Identifiant']}}/ajout_association" method="post">
        {{ csrf_field() }}
        <label for="nom">Nom :</label>
        <input type="text" name="nom">

        <label for="prenom">Description:</label>
        <input type="text" name="description">

        <button type="submit">Créer</button>
    
    </form>
@else
    <h3>Créer Événement</h3>
    <form action="{{url('/')}}/{{$personne['Identifiant']}}/ajout_event" method="post">
        {{ csrf_field() }}
        <label for="nom">Nom :</label>
        <input type="text"name="nom">

        <label for="description">Description :</label>
        <input type="text" name="description">

        <label for="date">Date :</label>
        <input type="date" name="date">

        <label for="max">Nombre maximum :</label>
        <input type="number" name="max">

        <label for="lieu">Lieu</label>
        <input type="text" name="lieu" >

        <label for="Asso">Association</label>
        <input type="text" name="Asso">

        <button type="submit">Envoyer le message</button>
    </form>
@endif
@endsection