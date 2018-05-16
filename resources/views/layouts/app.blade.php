<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>QuidditchManager - Statistiques</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>

        header {
  position: fixed;
  z-index: 2;
  background-color: white;
  top: 0;
  width: 100%;
}

body {
  margin: 0 auto;
}

.logo {
  display: inline-block;
  width: 16.5%;
  border: 2px solid black;
  text-align: center;
  padding-top: 36px;
  padding-bottom: 26px;
}

.titre {
  display: inline-block;
  width: 82%;
  border: 2px solid black;
  text-align: center;
}

nav {
  padding-top: 80px;
  width: 16.5%;
}

ul {
  margin: 0;
  padding: 0;
}

li {
  width: 100%;
  padding-top: 30px;
  padding-bottom: 30px;
  list-style: none;
  border-bottom: 2px solid black;
  border-right: 2px solid black;
  border-left: 2px solid black;
  text-align: center;
}

main {
  margin-left: 16.98%;
  width: 82%;
  margin-top: -400px;
  border-left: 2px solid black;
  border-right: 2px solid black;
  border-bottom: 2px solid black;
  margin-bottom: 20px;
}

article {
  margin: 5px;
  background-color: DarkGray;
  padding-left: 5px;
  padding-bottom: 5px;
  line-height: 35px;
}

h3, h2 {
  text-align: center;
}

aside {
  float: left;
  margin-top: 5px;
  margin-right: 5px;
}

.en-tete {
  border-bottom: 2px solid black;
  padding-top: 12px;
  padding-bottom: 10px;
  text-align: center;
}

#resume {
  display: inline-block;
  width: 25%;
  background-color: DimGray;
}

#editer {
  position: relative;
  right: -75%;
}

#dernier-match {
  display: inline-block;
  width: 70%;
}

#stats-joueur, #stats-equipe, #stats-globales {
  display: inline-block;
  width: 30.9%;
}

#col-1, #col-2, #col-3 {
  display: inline-block;
  width: 32%;
}

    </style>
</head>
<body id="app-layout">
    
    <header>
      <div class="logo">
        <img src="logo.png" alt="Logo">
      </div>
      <div class="titre">
        <h1>Statistiques</h1>
      </div>
    </header>
    
    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
