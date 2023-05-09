
@extends('gabari')


@section('content')

<section id="corps">
    <section id="information">
        <div id="prochainevents" class="conteneurinfo">
            <h2>Participation aux Événements: </h2>
            @if (isset($eventsparticipant[0]))
                @foreach ($eventsparticipant as $eventpart)
    
                    <div class="events">
                        <div>
                            <h2>{{$eventpart['Nom']}}</h2>
                            <div class="infoevent">
                            <p>{{$eventpart['Date']}}</p>
                            <p>Ouverture à 10h</p>
                            <p>{{$eventpart['Lieu']}}</p>
                            </div>
                        </div>
                    </div>

                @endforeach       
            @endif
        </div>
        @include('partieinvit')
    </section>
    
    <section id="mesevent">
        @if (isset($mesevents[0]))
            <h2>Mes Événements</h2>
           
                @foreach ($mesevents as $monevent)
                    <div class="monevent">
                        <h3>{{$monevent['Nom']}}</h3>
                        <div class="infomonevent">
                            <h4>Participant Max</h4>
                            <p>{{$monevent['nb_max']}}</p>
                        </div>
                        <div class="infomonevent">
                            <h4>Information:</h4>
                            <p>{{$monevent['Lieu']}}</p>
                            <p>{{$monevent['Date']}}</p>
                            <p>{{$monevent['Description']}}</p>
                        </div>
                        <div><a href="{{url('/')}}/{{$personne['Identifiant']}}/{{$monevent['id']}}"><input type="button" value="Gestion"></a></div>
                    </div>
                @endforeach
        @else
            <h4>Pas d'événement</h4>
        @endif
        <a href="{{url('/')}}/{{$personne['Identifiant']}}/ajout_event"><svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m12.002 2c5.518 0 9.998 4.48 9.998 9.998 0 5.517-4.48 9.997-9.998 9.997-5.517 0-9.997-4.48-9.997-9.997 0-5.518 4.48-9.998 9.997-9.998zm0 1.5c-4.69 0-8.497 3.808-8.497 8.498s3.807 8.497 8.497 8.497 8.498-3.807 8.498-8.497-3.808-8.498-8.498-8.498zm-.747 7.75h-3.5c-.414 0-.75.336-.75.75s.336.75.75.75h3.5v3.5c0 .414.336.75.75.75s.75-.336.75-.75v-3.5h3.5c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-3.5v-3.5c0-.414-.336-.75-.75-.75s-.75.336-.75.75z" fill-rule="nonzero"/></svg></a>
    </section>

    <section id="membreAsso">
        <h2>Association</h2>

        <div id="listeasso">
            <div class="monasso">
                <h3>Une asso</h3>
                <div class="infomonasso">
                    <a href=""><h4>Les Evenement de l'asso</h4></a>
                </div>
                <div><input type="button" value="info"></div>
            </div>
        
            <div class="monasso">
                <h3>Une asso</h3>
                <div class="infomonasso">
                    <a href=""><h4>Les Evenement de l'asso</h4></a>
                </div>
                <div><input type="button" value="info"></div>
            </div>
        </div>
        <a href="#asso"><svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m12.002 2c5.518 0 9.998 4.48 9.998 9.998 0 5.517-4.48 9.997-9.998 9.997-5.517 0-9.997-4.48-9.997-9.997 0-5.518 4.48-9.998 9.997-9.998zm0 1.5c-4.69 0-8.497 3.808-8.497 8.498s3.807 8.497 8.497 8.497 8.498-3.807 8.498-8.497-3.808-8.498-8.498-8.498zm-.747 7.75h-3.5c-.414 0-.75.336-.75.75s.336.75.75.75h3.5v3.5c0 .414.336.75.75.75s.75-.336.75-.75v-3.5h3.5c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-3.5v-3.5c0-.414-.336-.75-.75-.75s-.75.336-.75.75z" fill-rule="nonzero"/></svg></a>
    </section>

    <section id="event">
        <div>
            <h3>Rejoindre événement:</h3>
        </div>
        <div class="afficherevenement">
            @if (isset($evenement[0]))
            @foreach ($evenement as $evenem)
                <article>
                    <div>
                        <h5>{{$evenem['NomEvent']}}</h5>
                        <p>{{$evenem['Desciption']}}</p>
                    </div><br>
                    <div>
                        <p>{{$evenem['Lieu']}}</p>
                        <p>{{$evenem['Date']}}</p>    
                    </div>
                    <div><button>Participer</button></div>
                </article>
                
            @endforeach
            @endif
        </div>
        
    </section>
    <section id="asso">
        <div>
            <h3>Rejoindre une Association:</h3>
        </div>
        <div >
            @if (isset($assos[0]))
                @foreach ($assos as $asso)
                <article>
                    <h5>{{$asso['Nom']}}</h5>
                    <button>Rejoindre</button>
                </article>
                @endforeach
            @endif
            
        </div>
        
    </section>
</section>


@endsection