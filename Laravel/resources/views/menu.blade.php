<header>
    @if (isset($personne))
        <h1> {{$personne->Prenom}} {{$personne['Nom']}}</h1>
    @else
        <h1> Projet Gestion Événement</h1>
    @endif
    <ul>
        <a href="#event"><li>Evènement</li></a>
        <a href="#asso"><li>Association</li></a>
        <a href="#asso"><li>Mon Compte</li></a>
    </ul>
</header>