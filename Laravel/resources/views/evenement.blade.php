
@extends('gabari')


@section('content')
    
    <h1>Evênement Prévu</h1>

    <ul>
    @foreach($events as $event)
        <li>{{ $event['Nom'] }}</li>
    @endforeach
    </ul>

@endsection