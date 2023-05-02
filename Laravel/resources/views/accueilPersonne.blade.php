
@extends('gabari')


@section('content')

<section id="corps">

    <!--MonEvent en cours -->
    @if (isset($soneventencours['Nom']))
        <section id="moneventencours">
            <h2>Mon Evenement en cours</h2>
            <div id="infoeventencours">
                <h2>{{$soneventencours['Nom']}}</h2>
                <p>Consommation: 5/50L</p>
                <p>Present: 400/{{$soneventencours['nb_max']}}</p>
            </div>
            <div>
                <button>Notifier une information</button>
                <button>Stats Soirée</button>
            </div>
        </section>

    @endif

    @if (isset($eventencours['Nom']))
    <section id="eventencours">
        <h2>Evenement en cours</h2>
        <div id="info">
            <h2>{{$eventencours['Nom']}}</h2>
            <p>Consommation: 0.25/1L</p>
            <div id="infosoirée">
                <h3>Information:</h3>
                <div id="alcool">
                <p> fermeture alcool dans:</p>
                <p>minuteur?</p>
                </div>
            </div>
        </div>
    </section>
    @endif

    <section id="information">
        <div id="prochainevents" class="conteneurinfo">
            @if (isset($eventsparticipant[0]))
                @foreach ($eventsparticipant as $eventpart)
    
                    <div class="events">
                        <div class="images">?Image?</div>
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
            @else
            <div class="events">
                <div class="images">?Image?</div>
                <div>
                    <h2>Grand Prix Rétro</h2>
                    <div class="infoevent">
                    <p>29 et 30 juillet 2023</p>
                    <p>Ouverture à 10h</p>
                    <p>Puy Notre Dame</p>
                    </div>
                </div>
            </div>
            <div class="events">
                <div class="images">?Image?</div>
                <div>
                    <h2>Journée de la Rose</h2>
                    <div class="infoevent">
                    <p>13-16 juillet 2023</p>
                    <p>Ouverture à 10h</p>
                    <p>Doué la Fontaine</p>
                    </div>
                </div>
            </div>
            <div class="events">
                <div class="images">?Image?</div>
                <div>
                    <h2>Nom Evenement</h2>
                    <div class="infoevent">
                    <p>Date</p>
                    <p>Horaire</p>
                    <p>Lieu</p>
                    </div>
                </div>
            </div>                
            @endif

        </div>
        <div id="invit">
            <div id="invitation" class="conteneurinfo">
                <h3>invitation:</h3>
                <div>
                    <p>Nom Prenom vous invite à l'événement NomEvent</p>
                    <div class="checkinvit">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"/></svg>
                    </div>
                </div>
                <div>
                    <p>Nom Prenom vous invite à l'événement NomEvent</p>
                    <div class="checkinvit">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"/></svg>
                    </div>
                </div>
            </div>
            <div id="assodemande" class="conteneurinfo">
                <h3>Demande:</h3>
                <div>
                    <p>Nom Prenom veut rejoindre NomAsso</p>
                    <div class="checkinvit">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"/></svg>
                    </div>
                </div>
                <div>
                    <p>Nom Prenom veut rejoindre NomAsso</p>
                    <div class="checkinvit">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"/></svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="mesevent">
        @if (isset($mesevents[0]))
            <h2>Mes Evenement</h2>
           
                @foreach ($mesevents as $monevent)

                    <div class="monevent">
                        <h3>{{$monevent['Nom']}}</h3>
                        <div class="infomonevent">
                            <h4>Participant</h4>
                            <p>250/500</p>
                        </div>
                        <div class="infomonevent">
                            <h4>Consommation</h4>
                            <p>5/50L</p>
                        </div>
                        <div><input type="button" value="info"></div>
                    </div>
                @endforeach
        @else
            <h4>Pas d'événement</h4>
        @endif
        <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m12.002 2c5.518 0 9.998 4.48 9.998 9.998 0 5.517-4.48 9.997-9.998 9.997-5.517 0-9.997-4.48-9.997-9.997 0-5.518 4.48-9.998 9.997-9.998zm0 1.5c-4.69 0-8.497 3.808-8.497 8.498s3.807 8.497 8.497 8.497 8.498-3.807 8.498-8.497-3.808-8.498-8.498-8.498zm-.747 7.75h-3.5c-.414 0-.75.336-.75.75s.336.75.75.75h3.5v3.5c0 .414.336.75.75.75s.75-.336.75-.75v-3.5h3.5c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-3.5v-3.5c0-.414-.336-.75-.75-.75s-.75.336-.75.75z" fill-rule="nonzero"/></svg>
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
            <h3>Rechercher un événement:</h3>
            <input type="search" name="Événement" id="searchEvent">
        </div>
        <div display="none" class="contentrechercheEvent">
            <article>
                <div>
                    <div class="images">?Image?</div>
                    <h5>NomEvent</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet justo nibh. Integer fermentum, lectus vitae consequat sodales, elit libero porttitor massa, nec malesuada erat nibh ac diam. In luctus sem velit, quis aliquam magna posuere ut. Quisque vulputate massa et risus ullamcorper egestas.</p>
                </div>
                <div>
                    <p>Date</p>
                    <p>Lieu</p>    
                </div>
                <div><button>Participé</button></div>
            </article>
            <article>
                <div>
                    <div class="images">?Image?</div>
                    <h5>NomEvent</h5>
                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam dui nisi, efficitur ac ultricies eu, euismod quis diam. Nullam sit amet diam non ligula aliquet dictum sed sed tortor. In nisi ligula, vehicula nec fermentum eu, condimentum eget lorem. Praesent ut molestie lectus. </p>
                </div>
                <div>
                    <p>Date</p>
                    <p>Lieu</p>    
                </div>
                <div><button>Participé</button></div>
            </article>
        </div>
        
    </section>
    <section id="asso">
        <div>
            <h3>Rechercher une Association:</h3>
            <input type="search" name="Association" id="searchAsso">
        </div>
        <div class="contentrechercheAsso">
            <article>
                <div>
                    <h5>NomAsso</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <button>Rejoindre</button>
            </article>
            <article>
                <div>
                    <h5>NomAsso</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <button>Rejoindre</button>
            </article>

        </div>
        
    </section>
</section>


@endsection