<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="{{ asset('css/app.css')}}">
   
   <title>Projet Asso gestion Event</title>
</head>

<body >
    @include('menu')
    @yield('content')

    @include('footer')
</body>
    
</html>