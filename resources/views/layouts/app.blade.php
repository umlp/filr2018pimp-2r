<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Quidditch-Manager</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
            padding-top: 70px;
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">


<!-- barre de menu -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    Petit test
  </div>
  <div class="container-fluid">
    Petit test 2
  </div>
  <div class="container-fluid">
    Petit test 3
  </div>
</nav>

<nav class="nav flex-column">
    <a href = "match.php" class = "texteMenu"><div class = "nav-link disabled">Match</div></a>
    <a href = "actualite.php" class = "texteMenu"><div class = "nav-link disabled">Actualité</div></a>
    <a href = "statistiques.php" class = "texteMenu"><div class = "nav-link active">Statistiques des joueurs</div></a>
    <a href = "entrainement.php" class = "texteMenu"><div class = "nav-link disabled">Entraînement</div></a>
    <a href = "reglages.php" class = "texteMenu"><div class = "nav-link disabled">Réglages</div></a>
</nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
