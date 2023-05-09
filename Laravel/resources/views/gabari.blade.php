<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="{{ asset('css/app.css')}}">
   <style>
    .afficherevenement{
        display: flex;
        flex-direction: column;
    }
    .produit{
        display: flex;
        align-items: center;
    }
    .zonenbr {
        width: 50px;
    }
    #creationproduit {
        border-top: solid;
        margin-top: 50px;
        padding-top: 10px;
    }
</style>

   <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

   <title>Projet Asso gestion Event</title>
</head>

<body >
    @include('menu')
    @yield('content')

    @include('footer')
</body>
    
</html>