
@extends('gabari')


@section('content')
    
    <h1>Asso Existantes</h1>

    <ul>
    @foreach($Assos as $asso)
        <li>{{ $asso['Nom'] }}</li>
    @endforeach
    </ul>

@endsection