<footer>
    <div>
        <h4>Création</h4> 
        @if (isset($personne))   
        <a href="{{url('/')}}/{{$personne['Identifiant']}}/ajout_association">Crée une Association</a>
        <a href="{{url('/')}}/{{$personne['Identifiant']}}/ajout_event">Crée un Événement</a>
        @else
        <a href="{{url('/')}}/ajout_association">Crée une Association</a>
        <a href="{{url('/')}}/ajout_event">Crée un Événement</a>
        @endif    
    </div>

    <a href=""><h4>Contact</h4></a>
    <a href=""><h4>À propros</h4></a>
</footer>
